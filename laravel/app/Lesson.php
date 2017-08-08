<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Lesson extends Eloquent
{

  protected $connection = 'mongodb';

  public static function getById($id) //returns the specific lessons by id
  {
    return static::where('_id', $id)->first();
  }

  public static function getLatest()
  {
    return static::latest()->get();
  }

  public static function getByName($name) //directs the related department
  {
    Department::getDep($name);
  }

}
