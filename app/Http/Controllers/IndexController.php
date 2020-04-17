<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('web.pages.home.home');
    }
    public function contact(){
        return view('web.pages.contact.contact');
    }
    public function about(){
        return view('web.pages.about.about');
    }
    public function allProduct(){
        return view('web.pages.product.products');
    }
    public function blog(){
        return view('web.pages.blog.blog');
    }
    public function login(){
        return view('web.pages.user.login');
    }
    public function register(){
        return view('web.pages.user.register');
    }
    public function myAccount(){
        return view('web.pages.user.my_account');
    }
}
