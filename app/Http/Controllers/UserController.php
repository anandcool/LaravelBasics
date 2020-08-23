<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index(){

        //Elquent Operation for database
        //Insert
        // $user = new User();

        // $user->name = "kruzz";
        // $user->email = "kruzz@steve.com";
        // $user->password= bcrypt("12345"); 
        // $user->save();

        //Select
        // $user = User::all();
        // return $user;

        //Delete
        // User::where('id',3)->delete();

        //Update
        User::where('id',4)->update(['name'=>"steve"]);

        //-----------------------------------
        // Raw Insert Query
        // DB::insert('insert into users (name,email,password) values (?,?,?)',['steve','steve@project.com','steve@1235']);

        //Raw Update Query
        // DB::update('update users set name = ? where id = 1',['anand']);

        //Raw Delete Query
        // DB :: delete('delete from users where name = ?',['anand']);

        //Raw Select Query
        // $user = DB::select('select * from users');
        // return $user;
        return view('home');
    }
}
