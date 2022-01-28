<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\Product;
use Carbon\Carbon;
use Mail;
use App\Mail\TransactionSuccess;
use Illuminate\Support\Facades\DB;
use Midtrans\Config;
use Midtrans\Snap;


class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {

        $item = Transaction::with(['details','product'])->findorFail($id);
        return view('pages.checkout',[
            'item' => $item
        ]);

        $item = Product::with(['product_galleries'])
        ->where('slug',$slug)
        ->firstOrfail();
        return view('pages.checkout',[
            'item' => $item
        ]);

    }




    public function process(Request $request, $id)
    {

        $product = Product::findorFail($id);
        

        

        $transaction = Transaction::create([
           
            'uid' => 'ID',
            'products_id' => $product->id,
            'transaction_total' => $product->price,
            'transaction_status' => 'PENDING',
            'name' =>'Kosong',
            'email' =>'Kosong',
            'phone' =>'Kosong',
            'address' =>'Kosong',

        ]);

        

        TransactionDetail::create([
            'transactions_id' => $transaction->id,
            'products_id' =>$product->id

        ]);

        return redirect()->route('checkout',$transaction->id);
    }


    

    public function remove(Request $request, $detail_id)
    {
        $item = TransactionDetail::findorFail($detail_id);

        $transaction = Transaction::with(['details','product'])
            ->findorfail($item->transactions_id);

            if($item->product)
            {
        
               
    
            }

        $transaction->transaction_total -= $transaction->product->price;

        $transaction->save();
        $item->delete();

        return redirect()->route('checkout',$item->transactions_id);
        
    }

    public function create(Request $request, $id)
    {

        $transaction = DB::table('transactions')->where('id',$id)
        ->update([
        'name'=>$request->input('name'),
        'email'=>$request->input('email'),
        'phone'=>$request->input('phone'),
        'address'=>$request->input('address')


        ]);
        


        
        $request->validate([

            'name' => 'required|string',
            'email' => 'required|email', 
            'phone' => 'required|digits_between:0,13',
            'adress' => 'required|string',

        ]);

        
 

        $data = $request->all();
        $data['transactions_id'] = $id;

        TransactionDetail::create($data);
        $transaction = Transaction::with(['product.product_galleries'])->findorFail($id);


        if($request->product)
        {
            $transaction->transaction_total += 1000;
        }

        $transaction->transaction_total += $transaction->product->price;

        $transaction->save();

        return redirect()->route('checkout',$id);
    }




    public function success(Request $request, $id)
    {
        $transaction = Transaction::with(['details','product.product_galleries'])->findorFail($id);
        $transaction->transaction_status = 'PENDING';

        $transaction->save();


        //Set Midtrans

        // Config::$serverKey = config('midtrans.serverKey');
        // Config::$isProduction = config('midtrans.serverKey');
        // Config::$isSanitized = config('midtrans.serverKey');
        // Config::$is3ds = config('midtrans.serverKey');


        // //Buat Array
        // $midtrans_parants =[
        //     'transaction_details' =>[
        //         'order_id' => 'NGETES-' . $transaction->id,
        //         'gross_amount' => (int) $transaction->transaction_total
        //     ],
        //     'costumer_details' => [
        //         'first_name' => $transaction->name,
        //         'email' => $transaction->user->email,
        //     ],
        //     'enabled_payments' => ['gopay'],
        //     'vtweb' => []
        // ];

        // try {
        //     //Ambil Halaman Payment

        //     $paymentUrl = Snap::createTransaction($midtrans_params)->redirect_url;


        //     //Redirect Halaman
        //     header('Location:'. $paymentUrl);

        // } catch (Exeption $e) {
            

        //     echo $e->getMessage();
        // }


        // return $transaction;

        // Kirim Mail Ke User

            Mail::to($transaction->email)->send(
                new TransactionSuccess($transaction)
            );
        
        return view('pages.success');
    }
}
