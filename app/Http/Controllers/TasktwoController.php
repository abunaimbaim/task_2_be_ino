<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Posts;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;

class TasktwoController extends Controller
{
    public function pertama(){
        $total = 5;
        $hasilfaktorial = 1;

        for ($i=1; $i < $total; $i++) { 
            $hasilfaktorial = $hasilfaktorial * $i;
        }
        
        return $hasilfaktorial;
    }
}
