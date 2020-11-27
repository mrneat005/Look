<?php
// So as a result our controller is creating
//using "php artisan make:controller pagesController" command
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// you might have noticed that if not so let me tell you
//what ever you create either its acontroller or a model 
//they always extends their base class like in controllers case every
//controller that you make extends the base Controller
class pagesController extends Controller
{
    //So here we will code for request of the routes and we 
    // will return views for them asap

    public function index()
    {
        //now when ever this function is called its
        // gonna return a view mentioned
        return view('pages.index');
    }
    public function services()
    {
        return view('pages.services');
    }

    public function posts()
    {
        return view('pages.posts');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function home()
    {
        return view('welcome');
    }

}
