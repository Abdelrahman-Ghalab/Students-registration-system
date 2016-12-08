<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

 //$primarykey = 'sid';
$primaryKey = 'sid';
class Student extends Eloquent
{
    //
    public function section(){
    return $this->belongsTo(Section::class, 'section_ID');
  }
}
