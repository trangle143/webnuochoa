<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hinh extends Model
{
	protected $table="hinh";
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
