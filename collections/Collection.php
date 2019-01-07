<?php
/**
 *  Collection.php
 * 
 *  Base class for all collections
 */

/**
 *  Class definition
 */
abstract class Collection extends SqlFramework\Entity
{
    /**
     *  The items in the collection
     *  @var Entity[]
     */   
    protected $items = array();

    /**
     *  Expose the items
     *  @return Entity[]
     */
    public function items()
    {
        return $items;
    }
}