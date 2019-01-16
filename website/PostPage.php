<?php
/**
 *  PostPage.php
 * 
 *  Class that is able to handle post calls
 */

/**
 *  Class definition
 */
abstract class PostPage extends BasePage
{
    /**
     *  Should we redirect after the post?
     *  @var string | null
     */
    protected $redirect = null;

    /**
     *  Process post call
     *  @param  array
     *  @return BasePage        the page to render after the POST call
     */
    abstract function process(array $vars = array()): BasePage;

    /**
     *  Should we redirect after the POST?
     *  @return string|null
     */
    public function redirect(): ?string
    {
        // Return member
        return $this->redirect;
    }

}