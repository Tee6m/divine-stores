<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function clean_numbers($dirty) {
        $unwanted = [",", " ", "N", "NGN", "$", "#", "USD", "GBP"];
        $clean = str_replace($unwanted, " ", $dirty);
        return $clean;
    }
}
