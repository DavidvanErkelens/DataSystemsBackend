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
     *  Add variables to the parser
     *  @param  \Smarty
     */
    protected function initialize(\Smarty $smarty)
    {
        $smarty->assign('title', "ABC");
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
}