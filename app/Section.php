<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
//use Illuminate\Database\Eloquent\Model;

class Section extends Eloquent
{
//
  protected $collection = 'section';
  protected $primaryKey = 'section_ID';

  public function students(){
    return $this->hasMany(Student::class, 'section_ID');
  }

}
