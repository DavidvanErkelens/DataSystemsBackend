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
     *  @return ???
     */
    function process(array $vars = array())
    {
        echo 'Process called with: ' . PHP_EOL;
        var_dump($vars);
    }
}