<?php
/**
 * Created by PhpStorm.
 * User: JoeWood
 * Date: 02/10/2016
 * Time: 18:36
 */

namespace woodj22\MonthlyChallenge\AnnualLeave;

class LeaveCalculator {


public function getWeekNumber($datetime){

    $date = new DateTime($datetime);
    $week = $date->format("W");

    echo $week-12;

    return ($week-12);


}

    public function daysHoliday($weekNumber){
        $seq = array(0.5,1,1.5,2,2.5,3,3.5,4,4.5,5,5.5,6,6.6,7,7.5,8,8.5,9,9.5,10,10.5,11,11,11.5,12,12.5,13,13.5,14,14.5,15,15.5,16,16.5,17,17.5,18,18.5,19,19.5,20,20.5,21.5,22,22.5,23,23,23.5,24,24.5,25);
      $seqSort =  $seq[$weekNumber-1];
       $daysHoliday = 25 - $seqSort;
         // echo $daysHoliday;

    }

}



$lC = new LeaveCalculator();


$date = new DateTime();

$lC->getWeekNumber($datetime = '2016/01/30');
$lC->daysHoliday($weekNo = 6);