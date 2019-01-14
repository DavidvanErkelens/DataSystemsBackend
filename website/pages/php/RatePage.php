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

        // Store
        $this->conversation = $conv;
    }

    /**
     *  Should this page redirect?
     *  @return  string | null
     */
    public function redirect(): ?string
    {
        // Do we have a conversation?
        if (is_null($this->conversation)) return '/index';

        // No redirect by default
        return null;
    }

    /**
     *  Add variables to the parser
     *  @param  \Smarty
     */
    protected function initialize(\Smarty $smarty)
    {
        $smarty->assign('id', $this->conversation->identifier());
        // $smarty->assign()
    }

    /**
     *  Process post call
     *  @param  array
     *  @return ???
     */
    function process(array $vars = array())
    {
        // Get value
        if (array_key_exists('rating', $vars))
        {
            // Parse value
            $good = $vars['rating'] == 'yes';

            // Add value
            $this->conversation->addSatisfiedRating($good);
        }

        // Redirect or so?
    }
}