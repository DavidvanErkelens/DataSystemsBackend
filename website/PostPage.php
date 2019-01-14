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
     *  Process post call
     *  @param  array
     *  @return ???
     */
    abstract function process(array $vars = array());
}