<?php
/**
 *  UploadPage.php
 * 
 *  Basic index page
 */

/**
 *  Class definition
 */
class UploadPage extends PostPage
{
   

    /**
     *  Process post call
     *  @param  array
     *  @return BasePage
     */
    function process(array $vars = array()): BasePage
    {
        // @todo implement

        // Redirect to home
        $this->redirect = '/admin';

        // Return this page to redirect (done by render function)
        return $this;
    }

    /**
     *  This page requires a login
     *  @return bool
     */
    public function loginRequired(): bool
    {
        return true;
    }
}