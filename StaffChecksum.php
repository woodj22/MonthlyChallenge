<?php
/**
 * Created by PhpStorm.
 * User: JoeWood
 * Date: 24/10/2016
 * Time: 22:37
 */

namespace StaffChecksum;

class StaffChecksum {



    public function makeChecksum($staffNumber){

      // echo $staffNumber[0];


        $array  = array_map('intval', str_split($staffNumber));

            var_dump($array);

    }


    public function validateNumber($staffNumber,$numberLength)
    {

        //return true if staff number has the right count and is an integer.
        return (count($staffNumber) == $numberLength && is_int($staffNumber));


}





}

$checkSumCode = getallheaders()["checkSumCode"];
$staffNumber = getallheaders()["staffNumber"];


$staffNumber = "111111";
$checkSumCode =[7,5,3,1,11,13];
$m = new StaffChecksum();
//$m->validateNumber($staffNumber,6);
$m->validateNumber($checkSumCode,6);
$m->makeChecksum($staffNumber);


