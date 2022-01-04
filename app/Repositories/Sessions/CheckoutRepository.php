<?php

namespace App\Repositories\Sessions;

use App\Repositories\Contracts\CheckoutRepositoryContract;
use Illuminate\Support\Facades\Mail;

class CheckoutRepository implements CheckoutRepositoryContract
{
    public function save_order(string $phone, string $name, string $email): bool
    {

//        $cart = basket()->all();
//
//        dump($this->phone);
//        dump($this->name);
//        dump($this->email);
//        dump($cart);

        // отправка письма с заказом на е-мейл
        $to_name = 'Станислав Четвериков';
        $to_email = 'stanislav.chetverikov@gmail.com';
        $data = array(
            'phone' =>  $phone,
            'name'  =>  $name,
            'email' =>  $email);
        Mail::send('emails.new-order',
            $data,
            function ($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                    ->subject('Новый заказ');
                $message->from('sklad.bsp.msk@gamil.com', 'Marina Fashion');
            });

        return true;
    }


    public function send_order_confirmation()
    {
        // TODO: Implement send_order_confirmation() method.
    }
}
