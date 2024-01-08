<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {

        // $listuser = DB::table('tbl_user')->get();


        return view('user.index');
    }
}
