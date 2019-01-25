<?php
/**
 *  AdminPanel.php
 * 
 *  Basic index page
 */

/**
 *  Class definition
 */
class AdminPanel extends BasePage
{
    /**
     *  Add variables to the parser
     *  @param  \Smarty
     */
    protected function initialize(\Smarty $smarty)
    {
        // Call parent
        parent::initialize($smarty);

        // Get the conversations
        $conversations = $this->website()->backend()->conversations();

        // Filter by conversations that have a rating
        $conversations = $conversations->hasAnnotatorRatings();

        // Store number of satisfied conversations
        $totalSatisfied = 0;

        // Loop over conversations
        foreach ($conversations as $c) if ($c->satisfiedAnnotators()) $totalSatisfied += 1;

        // Store percentage
        $smarty->assign('satisfiedPercentage', number_format(($totalSatisfied / count($conversations)) * 100, 2));
    }

    /**
     *  Admin panel requires login
     *  @return bool
     */
    public function loginRequired(): bool
    {
        // return false;
        return true;
    }
}