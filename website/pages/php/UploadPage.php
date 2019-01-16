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
     *  Add variables to the parser
     *  @param  \Smarty
     */
    protected function initialize(\Smarty $smarty)
    {
        // Call parent
        parent::initialize($smarty);

        // Assign status information
        if (!is_null($this->last_result))
        {
            if ($this->last_result == 'invalidext') $smarty->assign('resultmsg', "Invalid extension, please upload a zip file.");
            else if ($this->last_result == 'toobig') $smarty->assign('resultmsg', "Files about 5MB are not allowed.");
            else if ($this->last_result == 'failure') $smarty->assign('resultmsg', "Something went wrong during the upload.");
            else if (is_int($this->last_result)) $smarty->assign('resultmsg', "Uploaded {$this->last_result} conversations.");
        }
        
        // No message to display
        else $smarty->assign('resultmsg', null);
    }

    /**
     *  Process post call
     *  @param  array
     *  @return BasePage
     */
    function process(array $vars = array()): BasePage
    {
        // Set redirect
        $this->redirect = '/upload';
        
        // Is the file provided?
        if (isset($_FILES['zipfile']))
        {
            // Get file properties
            $filename = $_FILES['zipfile']['name'];
            $filesize = $_FILES['zipfile']['size'];
            $filetmp  = $_FILES['zipfile']['tmp_name'];
            $filetype = $_FILES['zipfile']['type'];
            $fileext  = strtolower(end(explode('.', $filename)));
            
            // Zero-size indicates an error
            if ($filesize == 0)
            {
                // Store upload information
                $_SESSION['last_act'] = 'upload';
                $_SESSION['result'] = 'failure';
                
                // Return self
                return $this;
            }

            // Not zip? Done
            if ($fileext != 'zip') 
            {
                // Store upload information
                $_SESSION['last_act'] = 'upload';
                $_SESSION['result'] = 'invalidext';
                
                // Return self
                return $this;
            }
            
            // Do no allow files of over 5 MB
            if ($filesize > 5 * Constants::MB) 
            {
                // Store upload information
                $_SESSION['last_act'] = 'upload';
                $_SESSION['result'] = 'toobig';
                
                // Return self
                return $this;
            }
            
            // Get temporary filename
            $tempfile = tempnam(sys_get_temp_dir(), 'zip-upload-');
            unlink($tempfile);

            // Add zip extension
            $filename = $tempfile . '.zip';

            // Move file to temporary storage
            move_uploaded_file($filetmp, $filename);
            
            // Process zip file
            $number = $this->website()->backend()->importZip($filename);

            // Store upload information
            $_SESSION['last_act'] = 'upload';
            $_SESSION['result'] = $number;

            // Remove temp file
            unlink($filename);
        }

        // Return this page 
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