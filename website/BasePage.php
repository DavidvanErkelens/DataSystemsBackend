<?php
/**
 *  BasePage.php
 * 
 *  Base class for the pages used
 */

/**
 *  Class definition
 */
abstract class BasePage extends SiteFramework\Page
{
    /**
     *  Make sure we know the last action
     *  @var string | null
     */
    protected $last_action = null;

    /**
     *  Get last rated item
     *  @var string | null
     */
    protected $last_rate = null;

    /**
     *  Overwrite constructor 
     *  @param  SiteFramework\Website
     *  @param  string
     *  @param  array
     */
    public function __construct(SiteFramework\Website $site, string $path, array $params = array())
    {
        // Call parent constructor
        parent::__construct($site, $path, $params);

        // Store last action (if applicable)
        if (array_key_exists('last_act', $_SESSION)) $this->last_action = $_SESSION['last_act'];
        if (array_key_exists('rate', $_SESSION)) $this->last_rate = $_SESSION['rate'];

        // Unset session settings
        unset($_SESSION['last_act']);
        unset($_SESSION['rate']);

        // Set the redirect if we need to login
        if ($this->loginRequired() && !$this->website()->loggedIn()) 
        {
            // Set page we need to redirect back to
            $_SESSION['redirect_after_login'] = '/index';

            // Set redirect URL
            $this->redirect = '/login';
        }
    }

   /**
     *  Add variables to the parser
     *  @param  \Smarty
     */
    protected function initialize(\Smarty $smarty)
    {
        $smarty->assign('title', "ING DSP System");
    }

    /**
     *  Overwrite the template function
     *  @return string
     */
    protected function template(): string
    {
        // Get the name of the called class
        $class = get_called_class();

        // Return the location
        return __DIR__ . "/pages/tpl/{$class}.tpl";
    }

    /**
     *  Do we require a login for this page?
     *  @return boolean
     */
    public function loginRequired(): bool
    {
        // By default, we don't require a login
        return false;
    }
}