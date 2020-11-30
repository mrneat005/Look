<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //This is our Posts model class
    //Now our migration is inside database and migration folder 
    //that have initially two functions up and down function
    //Lets visit that migrationclear
    //In order to add some crud functionalities we need some route function
    //for that we will use the following command
    //php artisan make:controller postController --resource
    //now visit that controller you created that will have those function
    //that we need
  //table name
  protected $table = 'posts';
  //primary key
  public $primarykey='id';
  //Time stamp
  public $timestamp=true;

}
