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
    //   var_dump(array_sum($array));
    }


     private function checkAlphabet(){



         $ar = array("C","G","I","M","O","Q","U","V","Z");
         $newArray =  array_diff(range('A','Z'),$ar);

         //var_dump($ar);
      // $r= array_filter(range('A','Z'),'self::filterLetters');
        //var_dump($r);

    return;

    }

    private function filterLetters ($k){

        $ar = array("C","G","I","M","O","Q","U","V","Z");
        return array_diff($k,$ar);

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


