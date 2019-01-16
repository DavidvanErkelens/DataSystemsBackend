<?php
/**
 *  BasePage.php
 * 
 *  Base class for the pages used
 */

/**
 *  Class definition
 */
abstract class BasePage extends SiteFramework\Page
{
    /**
     *  Make sure we know the last action
     *  @var string | null
     */
    protected $last_action = null;

    /**
     *  Get last rated item
     *  @var string | null
     */
    protected $last_rate = null;

    /**
     *  Should we redirect after the post?
     *  @var string | null
     */
    protected $redirect = null;


    /**
     *  Overwrite constructor 
     *  @param  SiteFramework\Website
     *  @param  string
     *  @param  array
     */
    public function __construct(SiteFramework\Website $site, string $path, array $params = array())
    {
        // Call parent constructor
        parent::__construct($site, $path, $params);

        // Add history
        if (isset($_SESSION['history'])) 
        {
            // Make sure array is not too long
            if (count($_SESSION['history']) > 5) array_shift($_SESSION['history']);

            // Store path
            $_SESSION['history'][] = $path;
        }

        // Store path
        else $_SESSION['history'] = array($path);

        // Store last action (if applicable)
        if (array_key_exists('last_act', $_SESSION)) $this->last_action = $_SESSION['last_act'];
        if (array_key_exists('rate', $_SESSION)) $this->last_rate = $_SESSION['rate'];

        // Unset session settings
        unset($_SESSION['last_act']);
        unset($_SESSION['rate']);

        // Set the redirect if we need to login
        if ($this->loginRequired() && !$this->website()->loggedIn()) 
        {
            // Set page we need to redirect back to
            $_SESSION['redirect_after_login'] = '/index';

            // Set redirect URL
            $this->redirect = '/login';
        }
    }

   /**
     *  Add variables to the parser
     *  @param  \Smarty
     */
    protected function initialize(\Smarty $smarty)
    {
        // Set title
        $smarty->assign('title', "ING DSP System");

        // Construct pages
        $pages = array(
            array(
                "href"  =>  "index",
                "title" =>  "Home"
            ),
            array(
                'href'  =>  'rate',
                'title' =>  'Conversation'
            ),
        );

        // Are we logged in? Then add logout link
        if ($this->website()->loggedIn()) 
        {
            // Set pages for logged in users
            $pages = array_merge($pages, array(
                array(
                    'href'  =>  'admin',
                    'title' =>  'Admin panel'
                ),
                array(
                    'href'  =>  'upload',
                    'title' =>  'Upload new data'
                ),
                array(
                    'href'  =>  'logout', 
                    'title' =>  'Log out'
                ),
            ));
            
        }

        // Otherwise add a login link
        else $pages[] = array('href' => 'login', 'title' => 'Log in');
        
        // Add active page
        $smarty->assign('active', $this->activePage());
        
        // Set pages
        $smarty->assign('pages', $pages);
    }

    /**
     *  Return the active page
     *  @return string
     */ 
    public function activePage(): string
    {
        // Return the path
        return $this->path;
    }

    /**
     *  Overwrite the template function
     *  @return string
     */
    protected function template(): string
    {
        // Get the name of the called class
        $class = get_called_class();

        // Return the location
        return __DIR__ . "/pages/tpl/{$class}.tpl";
    }

    /**
     *  Do we require a login for this page?
     *  @return boolean
     */
    public function loginRequired(): bool
    {
        // By default, we don't require a login
        return false;
    }

    /**
     *  Should we redirect after the POST?
     *  @return string | null
     */
    public function redirect(): ?string
    {
        // Return member
        return $this->redirect;
    }
}