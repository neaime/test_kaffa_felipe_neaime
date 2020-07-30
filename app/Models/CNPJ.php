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
}
