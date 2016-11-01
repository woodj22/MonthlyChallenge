<?php
/**
 * Created by PhpStorm.
 * User: JoeWood
 * Date: 24/10/2016
 * Time: 22:37
 */

namespace StaffChecksum;

class StaffChecksum {



    public function makeChecksum($staffNumber,$checksumCode){


        $array1  = array_map('intval', str_split($staffNumber));
        $array  = array_map('self::multiply', $array1, $checksumCode);
        $sum = 1+((array_sum($array))%17);
       $t=  $this->checkAlphabet();
      //  var_dump($t);
    }


    private function checkAlphabet(){

        array_filter(range('A','Z'),[]);
        foreach (range('A', 'Z') as $char) {
            echo $char . "\n";
        }

    }


    private function multiply($x,$y){


        return $x*$y;
    }


    public function validateNumber($staffNumber,$numberLength)
    {
        return (count($staffNumber) == $numberLength && is_int($staffNumber));

}





}

//$checkSumCode = getallheaders()["checkSumCode"];
//$staffNumber = getallheaders()["staffNumber"];
const staffNumberLength = 6;
$input = $_GET['input'];
$staffNumber = $input;
$checkSumCode =[7,5,3,1,11,13];
$m = new StaffChecksum();
//$m->validateNumber($staffNumber,6);
$m->validateNumber($checkSumCode,staffNumberLength);
$m->makeChecksum($staffNumber,$checkSumCode);


