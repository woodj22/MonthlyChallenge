<?php
/**
 * Created by PhpStorm.
 * User: JoeWood
 * Date: 24/10/2016
 * Time: 22:37
 */

namespace CheckSum;

class StaffChecksum {

    protected $checksumCode;
    protected $staffNumber;

    public function setStaffNumber($staffNumber){


        $this->staffNumber = $staffNumber;


    }

    public function setChecksumCode ($checksumCode) {

        $this->checksumCode = $checksumCode;

    }


    public function calculateChecksum($checkSumCode,$staffNumber)

    {

        $this->validateNumber($checkSumCode,staffNumberLength);
        $this->validateNumber($staffNumber,staffNumberLength);
        $checksumKey = $this->calculateChecksumNumber($staffNumber,$checkSumCode);
        $alphabet = $this->calculateAlphabet(["C","G","I","M","O","Q","U","V","Z"]);
        return $alphabet[$checksumKey];

    }


    private function calculateChecksumNumber($staffNumber,$checksumCode)
    {

        $staffNumberArray  = array_map('intval', str_split($staffNumber));
        $multipliedArray  = array_map('self::multiply', $staffNumberArray, $checksumCode);
        $sum = 1+((array_sum($multipliedArray))%17);


        return $sum;
    }


    private function calculateAlphabet($lostLetters)
    {

        $alphabetWithoutLetters =  array_diff(range('A','Z'),$lostLetters);
        $arrayStartFromOne =array_combine(range(1, count($alphabetWithoutLetters)), array_values($alphabetWithoutLetters));
        return $arrayStartFromOne;

    }







    private function validateNumber($staffNumber,$numberLength)
    {
        return (count($staffNumber) == $numberLength && is_int($staffNumber));

    }




    private function multiply($x,$y)
    {
        return $x*$y;
    }





}

const staffNumberLength = 6;
$input = $_GET['input'];
$staffNumber = $input;
$checkSumCode =[7,5,3,1,11,13];
$m = new StaffChecksum();
$m->calculateChecksum($staffNumber,$checkSumCode);


