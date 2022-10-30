<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenericController extends Controller
{
    //Rotas

    public function index(){
        return view('index');
    }

    public function product(){
        return view('product');
    }
    public function product2(){
        return view('product2');
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function blog(){
        return view('blog');
    }
    public function blogsingle(){
        return view('blog-single');
    }
    public function checkout(){
        return view('checkout');
    }
    public function faqs(){
        return view('faqs');
    }
    public function help(){
        return view('help');
    }
    public function payment(){
        return view('payment');
    }
    public function privacy(){
        return view('privacy');
    }
    public function single(){
        return view('single');
    }
    public function single2(){
        return view('single2');
    }
    public function terms(){
        return view('terms');
    }



}
