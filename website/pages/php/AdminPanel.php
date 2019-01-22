<?php
/**
 *  AdminPanel.php
 * 
 *  Basic index page
 */

/**
 *  Class definition
 */
class AdminPanel extends BasePage
{
    /**
     *  Add variables to the parser
     *  @param  \Smarty
     */
    protected function initialize(\Smarty $smarty)
    {
        // Call parent
        parent::initialize($smarty);
    }

    /**
     *  Admin panel requires login
     *  @return bool
     */
    public function loginRequired(): bool
    {
        // return false;
        return true;
    }
}