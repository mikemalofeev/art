<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Order extends BaseController
{
//    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function orderAction(Request $request)
    {
        return view('order');
    }

    public function orderSubmitAction(Request $request)
    {

        $data = [
//            'baseUrl' => $baseUrl,
//            'theme' => $utheme,
//            'uname' => $uname,
//            'ulogin' => $uLogin,
//            'upartner' => $upartner,
//            'aviakassaHost' => $self->getAviakassaHost(),
//            'version' => $self->getFrontVersion(),
        ];

        return view('order', $data);
    }
}
