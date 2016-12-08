<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage()
    {
    	$accounts = DB::table('accounts')->get();
    	$transactions = DB::table('transactions')->get();
    	$data = [
			'accounts' => $accounts,
			'transactions' => $transactions
		];
    	return view('welcome', compact('data'));
    }
}
