<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function alert_success ()
    {
        Session::flash('success', 'Запрос успешный!');
    }

    public function alert_error ()
    {
        Session::flash('error', 'Запрос с ошиюкой');
    }
}
