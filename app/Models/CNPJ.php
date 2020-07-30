<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CNPJ extends Model
{
    protected $fillable = ['cnpj', 'soma'];

    /**
     **
    **/
    public function validateNumber($cnpj)
    {
        $patternNumber = "/^[0-9]{14}$/";//Pattern only number
        $patternMask = "/^[0-9]{2}\.[0-9]{3}.[0-9]{3}\/[0-9]{4}\-[0-9]{2}$/";//Pattern mask format 00.000.000/0000-00

        if( preg_match($patternNumber, $cnpj) == true || preg_match($patternMask, $cnpj)){
            // Returns CNPJ if it is within the standard
            return $cnpj;
        }else{
            // Returns false if the CNPJ is not within the standard
            return false;
        }
    }

    /**
    **  Function that verify the first digit in accordance
    **  with the logic of the Receita Federal
    **/
    public function multiplierFirstDigit($cnpj)
    {
        $soma = 0;
        $multiplierFirstDigit = [
            '0' => '5', '1' => '4', '2' => '3', '3' => '2',
            '4' => '9', '5' => '8', '6' => '7', '7' => '6',
            '8' => '5', '9' => '4', '10' => '3', '11' => '2',
        ];

        /** It multiplies the first 12 digits of the CNPJ by the
        ** values stipulated by the Receita Federal and stores it in the variable $soma.
        **/
        for($i = 0; $i < count($multiplierFirstDigit); $i++){
            $soma += $cnpj[$i] * $multiplierFirstDigit[$i];
        }

        /**
        **  Divide the value of the variable $soma by '11'
        **  and store in the variable $result the rest of the division.
        **/
        $result = $soma%11;

        /**
        ** If the rest of the division is less than 2,
        ** set value 0 for the variable $firstDigit,
        ** otherwise subtract the value of $result by 11
        **/
        if( $result < 2 ){
            $firstDigit = 0;
        }else{
            $firstDigit = 11-$result;
        }
        return $firstDigit;
    }

    public function multiplierSecondDigit($cnpj){
        $soma = 0;
        $multiplierSecondDigit = [
            '0' => '6', '1' => '5', '2' => '4', '3' => '3',
            '4' => '2', '5' => '9', '6' => '8', '7' => '7',
            '8' => '6', '9' => '5', '10' => '4', '11' => '3', '12' => '2',
        ];

        /** It multiplies the first 13 digits of the CNPJ by the
        ** values stipulated by the Receita Federal and stores it in the variable $soma.
        **/
        for($i = 0; $i < count($multiplierSecondDigit); $i++){
            $soma += $cnpj[$i] * $multiplierSecondDigit[$i];
        }

        /**
        **  Divide the value of the variable $soma by '11'
        **  and store in the variable $result the rest of the division.
        **/
        $result = $soma%11;


        /**
        ** If the rest of the division is less than 2,
        ** set value 0 for the variable $firstDigit,
        ** otherwise subtract the value of $result by 11
        **/
        if( $result < 2 ){
            $secondDigit = 0;
        }else{
            $secondDigit = 11-$result;
        }
        return $secondDigit;
    }
}
