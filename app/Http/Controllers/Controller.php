<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function testLogging()
    {
        $message = "Logging Test !!";

        Log::emergency($message);
        Log::alert($message);
        Log::critical($message);
        Log::error($message);
        Log::warning($message);
        Log::notice($message);
        Log::info($message);
        Log::debug($message);
    }
    public function case1($id){
        //Logging info show data
        Log::info("Showing Data From User:".$id);
    }
    public function case2($id){
        //Logging Contextual
        Log::info('User failed to login.', [
            'id' => $id,
            'email' => 'test@gmail.com'
        ]);
    }
    public function finalCase(Request $request,$id){
        //Logging to save IP Address in case anyone changes data from database.

        $ip = $request->ip();
        Log::info('IP Addres: '.$ip.' Change Data From User: '.$id);

        
    }

}
