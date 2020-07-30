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
}
