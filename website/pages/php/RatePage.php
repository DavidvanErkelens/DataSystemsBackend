<?php
/**
 *  IndexPage.php
 * 
 *  Basic index page
 */

/**
 *  Class definition
 */
class RatePage extends PostPage
{
    /**
     *  Store the conversation we're rating
     *  @var Conversation
     */
    private $conversation = null;

    /**
     *  All conversation that should be rated for the demo
     *  @var array
     */
    private $testConversations = array(501, 502);


    /**
     *  Constructor
     */
    public function __construct(SiteFramework\Website $site, string $path, array $params = array())
    {
        // Call parent
        parent::__construct($site, $path, $params);

        // Get different between rate arrays
        if (array_key_exists('rated', $_SESSION)) $diff = array_diff($this->testConversations, $_SESSION['rated']);
        else $diff = $this->testConversations;

        // Do we have something to rate?
        if (count($diff) > 0) $this->conversation = $this->website()->backend()->conversation(array_shift($diff));

        // Otherwise go to thanks page
        else $this->redirect = '/thanks';
    }

    /**
     *  Add variables to the parser
     *  @param  \Smarty
     */
    protected function initialize(\Smarty $smarty)
    {
        // Call parent
        parent::initialize($smarty);

        // Assign conversation information
        $smarty->assign('id', $this->conversation->identifier());
        $smarty->assign('conversation', $this->conversation);
    }

    /**
     *  Process post call
     *  @param  array
     *  @return BasePage
     */
    function process(array $vars = array()): BasePage
    {
        // Get satisfaction rating
        $rating = (int) $vars['satisfaction'];

        // Was it a good satisfaction?
        if ($rating > 2) 
        {
            // Fetch the reason for the happiness
            $reason = $vars['reason_satisfaction'];

            // If it's other, extra formatting
            if ($reason == 'other') $reason = 'other:' . $vars['other_satisfied'];
        }

        // Otherwise our reason is already in the data
        else $reason = $vars['reasons'];
        
        // Get the conversation
        $conversation = $this->website()->backend()->conversation((int) $vars['conversation_id']);
        
        // Add the rating
        $conversation->addAnnotatorRating($rating, $reason);

        // Store that we're rated this conversation
        if (array_key_exists('rated', $_SESSION)) $_SESSION['rated'][] = (int) $vars['conversation_id'];
        else $_SESSION['rated'] = array((int) $vars['conversation_id']);

        // Should we rate another conversation?
        if (count(array_diff($this->testConversations, $_SESSION['rated'])) > 0) $this->redirect = '/rate';

        // Otherwise, redirect to home
        else $this->redirect = '/thanks';

        // Return this page to redirect (done by render function)
        return $this;
    }
}