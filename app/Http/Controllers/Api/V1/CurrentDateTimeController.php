<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrentDateTimeController extends Controller
{
    public function index(){
        $date = [
            'currentDateTime' => date('Y-m-d').'T'.date('H:i').'Z'
        ];
        return response()->json($date);
    }
}
