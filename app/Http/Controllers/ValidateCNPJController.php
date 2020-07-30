<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CNPJ;


class ValidateCNPJController extends Controller
{
    private $repository;

    public function __construct(CNPJ $cnpj)
    {
        $this->repository = $cnpj;
    }

    /**
    ** Exercise 1 Methods
    **/
    public function exercise1()
    {
        return view('exercise-1.validatecnpj');
    }

    public function validateCNPJ(Request $request)
    {
        // Call function validateNumber
        $cnpj = $this->repository->validateNumber($request->cnpj);
        if ($cnpj != false){
            return redirect()
                    ->back()
                    ->with('successFormat','A string digitada se parece com um CNPJ');
        }else{
            return redirect()
                    ->back()
                    ->with('invalidFormat','A string digitada NÃO se parece com um CNPJ');
        }
    }

    /**
    ** Exercise 2 Methods
    **/
    public function exercise2()
    {
        return view('exercise-2.validatecnpj');
    }

    public function verifyCnpjTrue(Request $request)
    {
        $soma = 0;
        $cnpj = $this->repository->validateNumber($request->cnpj);

        // If the variable $ cnpj is true, do all the logic to check if it is a valid CNPJ or not
        if( $cnpj != false ){

        // removes any character other than a number
        $cnpj = preg_replace("/[^0-9]/", "", $cnpj);

        /**
        **  Check that the number entered does not belong to the group below
        **/
        if ($cnpj == '00000000000000' ||
            $cnpj == '11111111111111' ||
            $cnpj == '22222222222222' ||
            $cnpj == '33333333333333' ||
            $cnpj == '44444444444444' ||
            $cnpj == '55555555555555' ||
            $cnpj == '66666666666666' ||
            $cnpj == '77777777777777' ||
            $cnpj == '88888888888888' ||
            $cnpj == '99999999999999') {
            return redirect()
                ->back()
                ->with('invalidCPNJ', "O CNPJ digitado NÃO é valido!");
        }else{

            /**
            ** Separate each CNPJ number individually
            **/
            $cnpj = str_split($cnpj);

            //Store the return of the multiplierFirstDigit method in the $ multiplierFirstDigit variable
            $multiplierFirstDigit = $this->repository->multiplierFirstDigit($cnpj);

            //Store the return of the multiplierSecondDigit method in the $ multiplierSecondDigit variable
            $multiplierSecondDigit = $this->repository->multiplierSecondDigit($cnpj);

            /**
            ** If the two verification digits are the same as the one entered by the user,
            ** a success message is returned, otherwise an invalid CNPJ message is returned
            **/
            if( $cnpj['12'] == $multiplierFirstDigit && $cnpj['13'] == $multiplierSecondDigit){
                return redirect()
                        ->back()
                        ->with('successCNPJ', "O CNPJ digitado é valido!");
            }else{
                return redirect()
                        ->back()
                        ->with('invalidCPNJ', "O CNPJ digitado NÃO é valido!");
            }
        }

        // If the entered value deviates from the stipulated standards, return the $error message
        }else{
            return redirect()
            ->back()
            ->with('error','A string digitada NÃO se parece com um CNPJ');
        }
    }
}
