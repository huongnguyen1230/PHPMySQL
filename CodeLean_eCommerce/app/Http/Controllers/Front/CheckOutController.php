<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Utilities\VNPay;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;

class CheckOutController extends Controller
{
    public function index(){
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.checkout.index', compact('carts','total', 'subtotal'));
    }

    public function addOrder(Request $request){
        //01.them don hang
        $order = Order::create($request->all());

        //02.them chi tiet don hang
        $carts = Cart::content();

        foreach ($carts as $cart){
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart -> id,
                'qty' => $cart->qty,
                'amount' => $cart->price,
                'total' => $cart-> price * $cart->qty,

            ];

            OrderDetail::create($data);
        }

        if ($request->payment_type == 'pay_later'){

                        //03.gui email
                        $total = Cart::total();
                        $subtotal = Cart::subtotal();
                        $this->sendEmail($order, $total, $subtotal);

                        //04.xoa gio hang
                        Cart::destroy();

                        //05.tra ve ket qua
                        return redirect('checkout/result')
                            -> with('notification', 'Success! You will pay on delivery. Please check your email.');
        }

        if ($request->payment_type == 'online_payment'){
            //01.lay URL thanh toan VNP
            $data_url = VNPay::vnpay_create_payment([
                'vnp_TxnRef' => $order->id, //id don hang
                'vnp_OrderInfo' => 'Mô tả về đơn hàng ở đây....',
                'vnp_Amount' => Cart::total(0, '', '') * 23075, //nhân với tỉ giá để đổi sang tiền việt
            ]);

            //02. Chuyen huong den URL lay duoc
            return redirect()->to($data_url);
        }

    }

    public function vnPayCheck(Request $request){
        //01. lay data tu url (do vnpay gui qua $$vnp_Returnurl)
        $vnp_ResponseCode = $request->get('vnp_ResponseCode'); //ma phan hoi ket qua thanh toan 0==thanh cong
        $vnp_TxnRef = $request->get('vnp_TxnRef'); //ticket_id
        $vnp_Amount = $request->get('vnp_Amount'); //so tien thanh toan

        //02.kiem tra ket qua giao dich tra ve tu vnPay
        if ($vnp_ResponseCode != null){
            //thanh cong
            if($vnp_ResponseCode == 0){
                //gui Email
                $order = Order::find($vnp_TxnRef);
                $total = Cart::total();
                $subtotal = Cart::subtotal();
                $this-> sendEmail($order, $total, $subtotal);

                //xoa gio hang
                Cart::destroy($order);

                //thong bao ket qua
                return redirect('checkout/result')
                    -> with('notification', 'Success! You will pay on delivery. Please check your email.');
            } else { //khong thanh cong
                //xoa don hang da them vao Database
                Order::find($vnp_TxnRef)->delete();

                // tra ve thong bao loi
                return redirect('checkout/result')
                    -> with('notification', 'ERROR: Payment failed or canceled...');
            }
        }
    }

    public function result(){
        $notification = session('notification');

        return view('front.checkout.result', compact('notification'));
    }

    private function sendEmail($order, $total, $subtotal){
        $email_to = $order->email;

        Mail::send('front.checkout.email', compact('order', 'total', 'subtotal'), function ($message) use ($email_to){
            $message->from('codelean@gmail.com', 'CodeLean eCommerce');
            $message->to($email_to, $email_to);
            $message->subject('Order Notification');
        });
    }

}
