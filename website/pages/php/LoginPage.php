<?php
/**
 *  LoginPage.php
 * 
 *  Basic index page
 */

/**
 *  Class definition
 */
class LoginPage extends BasePage
{
    /**
     *  Constructor
     */
    public function __construct(SiteFramework\Website $site, string $path, array $params = array())
    {
        // Call parent
        parent::__construct($site, $path, $params);

        // "Log in"
        $_SESSION['login'] = 'yes';
    }
}