<?php
/**
 *  Filter.php
 * 
 *  Base class for filters
 */

/**
 *  Class definition
 */
abstract class Filter
{
    /**
     *  Create new filter, based on another one
     *  @param  Filter
     *  @return Filter
     */
    static public function create(Filter $filter = null): Filter
    {
        if (is_null($filter)) return new self();
        return $filter;
    }
}