<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index(){
        // Raw Insert Query
        // DB::insert('insert into users (name,email,password) values (?,?,?)',['steve','steve@project.com','steve@1235']);

        //Raw Update Query
        // DB::update('update users set name = ? where id = 1',['anand']);

        //Raw Delete Query
        DB :: delete('delete from users where name = ?',['anand']);

        //Raw Select Query
        $user = DB::select('select * from users');
        return $user;
        return view('home');
    }
}
