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
     *  Constructor
     */
    public function __construct(SiteFramework\Website $site, string $path, array $params = array())
    {
        // Call parent
        parent::__construct($site, $path, $params);

        // Get conversation
        $conv = $this->parameter(0);

        // Make sure it exists
        $conv = $this->website()->backend()->conversation($conv);

        // If it does not exist, we're going back home
        if (is_null($conv)) $this->redirect = '/index';

        // Store
        $this->conversation = $conv;
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
        $smarty->assign('conversation', $this->conversation->stringify(true));
    }

    /**
     *  Process post call
     *  @param  array
     *  @return BasePage
     */
    function process(array $vars = array()): BasePage
    {
        // Get value
        if (array_key_exists('rating', $vars) && in_array($vars['rating'], array('yes','no')))
        {
            // Parse value
            $good = $vars['rating'] == 'yes';

            // Add value
            $this->conversation->addSatisfiedRating($good);
    
            // Store what we did in session
            $_SESSION['last_act'] = 'rate';
            $_SESSION['rate'] = $this->conversation->identifier();
        }

        // Redirect to home
        $this->redirect = '/index';

        // Return this page to redirect (done by render function)
        return $this;
    }

    public function loginRequired(): bool
    {
        // return false;
        return true;
    }
}