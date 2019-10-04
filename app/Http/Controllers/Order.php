<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Order extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function orderAction(Request $request)
    {
        $data = [
            'options' => $request->get('size', ''),
            'description' => $request->get('description', ''),
            'price' => $request->get('price', 0),
            'is_submited' => false,
        ];
        return view('order', $data);
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
            'is_submited' => true,
        ];

        //Добавить капчу к заказу
        //Отправка почты
        //Сделать шаблон почты
        //Добавить маску телефона

        return view('order', $data);
    }
}
