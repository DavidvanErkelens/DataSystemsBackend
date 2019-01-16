<?php
/**
 *  Site.php
 * 
 *  Basic Site framework
 */

/**
 *  Class definition
 */
class Site extends SiteFramework\Website
{
    /**
     *  Remember the backend
     *  @var Backend
     */
    private $backend = null;


    /**
     *  Get the backend object
     *  @return Backend | null
     */
    public function backend(): ?Backend
    {
        // Expose member
        return $this->backend;
    }

    /**
     *  Set the backend for this object
     *  @param  Backend
     *  @return Site
     */
    public function setBackend(Backend $backend): Site
    {
        // Store member
        $this->backend = $backend;

        // Done
        return $this;
    }

    /**
     *  Are we logged in?
     *  @return bool
     */
    public function loggedIn(): bool
    {
        // Check session var for now
        return array_key_exists('login', $_SESSION) && $_SESSION['login'] == 'yes';
    }
}