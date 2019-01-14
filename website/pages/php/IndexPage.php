<?php
/**
 *  IndexPage.php
 * 
 *  Basic index page
 */

/**
 *  Class definition
 */
class IndexPage extends BasePage
{
    /**
     *  Add variables to the parser
     *  @param  \Smarty
     */
    protected function initialize(\Smarty $smarty)
    {
        // Call parent
        parent::initialize($smarty);

        // Add conversations
        $smarty->assign('convs', $this->website()->backend()->conversations());
    }
}