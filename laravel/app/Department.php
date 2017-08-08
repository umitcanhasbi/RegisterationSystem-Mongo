<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Department extends Eloquent
{

  protected $connection = 'mongodb';

  public static function getById($id) //returns department by specific id
  {
    return static::where('_id', $id)->first();
  }

  public static function getLatest()
  {
    return static::latest()->get();
  }

  public function lesson() // one department can be related with many lessons
  {
  	return $this->hasMany(Lesson::class);
  }

  public static function getDep($id) //prints the related department info
  {
    $x = static::where('name', $id)->first();
    echo "$x->info";
    
  }

}
