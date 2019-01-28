<?php
/**
 *  LoginPage.php
 * 
 *  Basic index page
 */

/**
 *  Class definition
 */
class LoginPage extends PostPage
{
    /**
     *  Constructor
     */
    public function __construct(SiteFramework\Website $site, string $path, array $params = array())
    {
        // Call parent
        parent::__construct($site, $path, $params);
    }

    /**
     *  Process call
     *  @param  array
     *  @return BasePage
     */
    public function process(array $vars = array()): BasePage
    {
        // "Log in"
        $_SESSION['login'] = 'yes';

        // Fetch history
        $history = $_SESSION['history'];

        // Loop over history
        while (count($history) > 0)
        {
            // Get last item
            $path = array_pop($history);

            // Does it contain 'login'?
            if (strpos($path, 'login') !== FALSE) continue;

            // Set redirect
            $this->redirect = $path;

            // Done
            break;
        }

        // Do we have a redirect path?
        // if (is_null($this->redirect)) $this->redirect = '/index';

        // Set redirect to dashboard
        $this->redirect = '/dashboard';

        // Return itself
        return $this;
    }
}