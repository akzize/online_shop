<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData['title'] = 'Home Page - Online Store';

        /*
         * I don't know if they're using this way in laravel 10
         *
         * return view('home.index')->with("viewData", $viewData);
         *
         * but I've found it
         * */

        return view('home.index', $viewData);

    }

    public function about(){
        /*
         * An other one
         * $data1 = "About us - Online Store";
            $data2 = "About us";
            $description = "This is an about page ...";
            $author = "Developed by: Your Name";
            return view('home.about')->with("title", $data1)
            ->with("subtitle", $data2)
            ->with("description", $description)
            ->with("author", $author);
         * */

        /* instead I can do this  */

        $viewData =  [];
        $viewData['title'] = "About us - Online Store";
        $viewData['subtitle'] = "About us";
        $viewData['description'] = "This is an about page ...";
        $viewData['author'] = "Developed by: Zakaria Ak";
        return view('home.about', $viewData);

    }
}
