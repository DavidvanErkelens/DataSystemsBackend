<?php
/**
 *  AdminPanel.php
 * 
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

        // Keep track of average ratings
        $ratings = array(0, 0, 0, 0, 0);

        // Keep track of total satisfaction
        $rateOverTime = array();
        for ($i = 1; $i < 32; $i++) $rateOverTime[$i] = array('sat' => 0, 'total' => 0);

        // Do the same for the model rating
        $modelRateOverTime = array();
        for ($i = 1; $i < 32; $i++) $modelRateOverTime[$i] = array('value' => 0.0, 'total' => 0);

        // Loop over conversations
        foreach ($conversations as $c) 
        {
            // Is this conversation satisfying?
            if ($c->satisfiedAnnotators()) 
            {
                // Increment according counters
                $totalSatisfied += 1;
                $rateOverTime[(int) $c->dateTime()->format('d')]['sat'] += 1;
            }

            // Increment according counters
            $ratings[(int) $c->averageAnnotatorRating()] += 1;
            $rateOverTime[(int) $c->dateTime()->format('d')]['total'] += 1;
        }

        // Loop over all conversations
        foreach ($this->website()->backend()->conversations() as $c)
        {
            // Increment model counters
            $modelRateOverTime[(int) $c->dateTime()->format('d')]['value'] += $c->averageModelRating();
            $modelRateOverTime[(int) $c->dateTime()->format('d')]['total'] += 1;
        }

        // Store last value for over time rating
        $total = 0;
        $rating = 0;

        // Store over time ratings
        $smarty->assign('rateOverTime', array_map(function($value) use (&$rating, &$total) {
            
            // If we have no value, use the last value
            if ($value['total'] == 0 && $total == 0) return 0.0;

            // Increase counters
            $rating += $value['sat'];
            $total += $value['total'];

            // Return value
            return round($rating / $total * 100, 2);
        }, $rateOverTime));

        // Store last value for over time rating
        $modeltotal = 0;
        $modelrating = 0;

        // Store over time ratings
        $smarty->assign('modelRateOverTime', array_map(function($value) use (&$modelrating, &$modeltotal) {
            
            // If we have no value, use the last value
            if ($value['total'] == 0 && $modeltotal == 0) return 0.0;

            // Increase counters
            $modelrating += $value['value'];
            $modeltotal += $value['total'];

            // Return value
            return round($modelrating / $modeltotal * 100, 2);
        }, $modelRateOverTime));

        // Store percentage
        if (count($conversations) > 0) $smarty->assign('satisfiedPercentage', number_format(($totalSatisfied / count($conversations)) * 100, 2));
        else $smarty->assign('satisfiedPercentage', 100.0);

        // Store ratings
        $smarty->assign('sdsat', $ratings[0]);
        $smarty->assign('dsat', $ratings[1]);
        $smarty->assign('neut', $ratings[2]);
        $smarty->assign('sat', $ratings[3]);
        $smarty->assign('ssat', $ratings[4]);
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