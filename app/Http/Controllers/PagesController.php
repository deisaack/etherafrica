<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use App\Comment;
use App\Blog;
use App\Team;

class PagesController extends Controller
{
    public function index(){
    	$products = Detail::all();
        $blogs = Blog::all();
        $teams = Team::all();
    	return view('index')->with(compact('products','comments','blogs','teams'));
    }
    public function about_us(){
        $products = Detail::all();
        // $products = json_decode(json_encode($products));
        // echo "<pre>";print_r($products);die;
    	return view('about-us')->with(compact('products','comments'));
    }
    public function blog(){
        $blogs = Blog::all();
    	return view('blog')->with(compact('blogs'));
    }
	public function contact(){
    	return view('contact');
    }
}
