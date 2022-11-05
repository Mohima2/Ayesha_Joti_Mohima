<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class siteController extends Controller
{

    public function home(){
        $data['login_info'] =DB::table('login_info') ->get();
        //dd($data);
        return view('wallet/home', $data);
    }

    public function login(){
        return view('wallet/login');
    }



    public function store(Request $request) {
       $data['username'] = $request-> username;
       $data['usertype'] = $request-> usertype;
       $data['password'] = $request->password;
       $data['email'] = $request->email;

       DB::table('login_info') -> insert($data);

       //dd(DB::table('login_info') ->get());

       //return view('wallet/login');

       return redirect('login_info');
    }

    public function show($email){

        $data['wallet']=DB::table('login_info') ->where('email',$email)->first();
        return view('wallet/show', $data);
    }

    public function index2(){
        $data['recharges'] =DB::table('recharges') ->get();
        //dd($data);
        return view('wallet/index2', $data);
    }

    public function bkash(){
        return view('wallet/bcash');
    }

    public function store2(Request $request) {

        //$data['login_info__id'] = $request->login_info__id;
        $data['bkash_account'] = $request->bkash_account;
        $data['recharge_amount'] = $request->recharge_amount;

        DB::table('recharges') -> insert($data);

       // dd(DB::table('recharges') ->get());

        //return view('wallet/login');

        return redirect('recharges');
     }

}
