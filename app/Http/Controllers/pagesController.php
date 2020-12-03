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
        $title = 'Here is our single value that we are sending to blade using with';
        return view('pages.index') -> with('title',$title);
    }
    public function services()
    {
        // $services = array('services'=>['jljljl','jvjjv','jhjjgi']);
        $ser = array('title'=>'Services',
        'service0'=>array(
            'name'=>'Laravel',
            'description'=>'Backend development framework...!',
            'complexity'=>'Medium'
        ),
        'service1'=>array(
            'name'=>'Vue',
            'description'=>'Frontend development framework...!',
            'complexity'=>'hard'
        ),
        'service2'=>array(
            'name'=>'Bootstrap',
            'description'=>'Fontend development framework...!',
            'complexity'=>'easy'
        )
    
    );
    return view('pages.services') -> with($ser);
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
    public function auth()
    {
        return view('layouts.app');
    }

    /*
    //using compact
    public function getSingleValueUsingCompact()
    {
        $title = 'Here is our single value that we are sending to blade using compact';
        return view('pages.index',compact('title'));
    }
    public function getArrayOfValueUsingWith()
    {
     // $services = array('services'=>['jljljl','jvjjv','jhjjgi']);
            $ser = array('title'=>'Services',
            'service0'=>array(
                'name'=>'Laravel',
                'description'=>'Backend development framework...!',
                'complexity'=>'Medium'
            ),
            'service1'=>array(
                'name'=>'Vue',
                'description'=>'Frontend development framework...!',
                'complexity'=>'hard'
            ),
            'service2'=>array(
                'name'=>'Bootstrap',
                'description'=>'Fontend development framework...!',
                'complexity'=>'easy'
            )
        
        );
        return view('pages.services') -> with($ser); 
    }
    public function getsingleValueUsingWith()
    {
        $title = 'Here is our single value that we are sending to blade using with';
        return view('pages.index') -> with('title',$title); 
    }
    */

}
