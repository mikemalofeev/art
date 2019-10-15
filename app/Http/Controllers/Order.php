<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Mail;

class Order extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function orderAction(Request $request)
    {
        $data = [
            'options' => $request->get('size', ''),
            'description' => $request->get('description', ''),
            'price' => $request->get('price', ''),
            'is_submited' => false,
        ];
        return view('order', $data);
    }

    public function orderSubmitAction(Request $request)
    {

        $data = [
            'order' => $request->get('order'),
            'price' => $request->get('price'),
            'name' => $request->get('full-name'),
            'email' => $request->get('email'),
            'phone' => $request->get('telephone'),
            'address' => $request->get('address'),
            'comments' => $request->get('message'),
            'is_submited' => true,
        ];
        Mail::send('email', $data, function(Message $message) use ($request)
        {
            $message->from('artprestige2012@ya.ru', 'Типография Полиграф');

            $message->to($request->get('email'));
        });

        return view('order', $data);
    }
}
