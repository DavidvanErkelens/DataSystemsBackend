<?php
/**
 *  TestPost.php
 */

/**
 *  Class definition
 */
class TestPost extends PostPage
{
    /**
     *  Process post call
     *  @param  array
     *  @return BasePage
     */
    function process(array $vars = array()): BasePage
    {
        echo 'Process called with: ' . PHP_EOL;
        var_dump($vars);
    }
}