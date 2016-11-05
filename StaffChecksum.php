<?php
/**
 * Created by PhpStorm.
 * User: JoeWood
 * Date: 24/10/2016
 * Time: 22:37
 */

namespace StaffChecksum;

class StaffChecksum {



    public function calculateChecksumNumber($staffNumber,$checksumCode)
    {

        $staffNumberArray  = array_map('intval', str_split($staffNumber));
        $multipliedArray  = array_map('self::multiply', $staffNumberArray, $checksumCode);
        $sum = 1+((array_sum($multipliedArray))%17);


        return $sum;
    }


     public function calculateAlphabet($ar)
     {

         $alphabetWithoutLetters =  array_diff(range('A','Z'),$ar);
         $arrayStartFromOne =array_combine(range(1, count($alphabetWithoutLetters)), array_values($alphabetWithoutLetters));
         return $arrayStartFromOne;

    }

    public function calculateChecksum($alphabetArray,$key)
    {
        return $alphabetArray[$key];

    }




    public function validateNumber($staffNumber,$numberLength)
    {
        return (count($staffNumber) == $numberLength && is_int($staffNumber));

    }


    private function multiply($x,$y)
    {
        return $x*$y;
    }





}

//$checkSumCode = getallheaders()["checkSumCode"];
//$staffNumber = getallheaders()["staffNumber"];
const staffNumberLength = 6;
$input = $_GET['input'];
$staffNumber = $input;
$checkSumCode =[7,5,3,1,11,13];
$m = new StaffChecksum();
$m->validateNumber($checkSumCode,staffNumberLength);
$m->validateNumber($staffNumber,staffNumberLength);
$checksumIndex = $m->calculateChecksumNumber($staffNumber,$checkSumCode);
$alaphabet = $m->calculateAlphabet(["C","G","I","M","O","Q","U","V","Z"]);
$m->calculateChecksum($alaphabet,$checksumIndex);


