<?php
/**
 *  Entity.php
 * 
 *  Base class for entities
 */

/**
 *  Class definition
 */
abstract class Entity
{
    /**
     *  Expose ID
     *  @return int
     */
    public function ID(): int
    {
        // Return member
        return 1;
    }
}