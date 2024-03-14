<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){

        // $data = ['nama'=> 'doraemon', 'pekerjaan'=>'Developer'];
        // return view("home")->with($data);

        $nama = "Nobita";
        $pekerjaan = "Student";
        
        return view('home',compact('nama', 'pekerjaan'));

    }

    public function contact(){
        return view("contact");
    }

    public function getData(){
       $dataRegister = [
        ["id_register" => 1, "username" => "nagabonar", "password" => "titisanrajaiblis123", "nama_user" => "Jeje Wadidaw", "harga" => 22000],
        ["id_register" => 1, "username" => "nagabonar", "password" => "titisanrajaiblis123", "nama_user" => "Jeje Wadidaw", "harga" => 22000],
        ["id_register" => 1, "username" => "nagabonar", "password" => "titisanrajaiblis123", "nama_user" => "Jeje Wadidaw", "harga" => 22000],
        ["id_register" => 1, "username" => "nagabonar", "password" => "titisanrajaiblis123", "nama_user" => "Jeje Wadidaw", "harga" => 22000],
    ];  
       return $dataRegister;
    }

    public function register(){
        $data = $this->getData();
        return view("register", compact("data"));
    }
}
