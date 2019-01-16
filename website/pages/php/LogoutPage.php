<?php
/**
 *  LogoutPage.php
 * 
 *  Basic index page
 */

/**
 *  Class definition
 */
class LogoutPage extends BasePage
{
    /**
     *  Constructor
     */
    public function __construct(SiteFramework\Website $site, string $path, array $params = array())
    {
        // Call parent
        parent::__construct($site, $path, $params);

        // Log out
        unset($_SESSION['login']);
    }

    /**
     *  Overwrite redirect function
      * @return string 
     */
    public function redirect(): string
    {
        // We always go back home
        return "/index";
    }
}