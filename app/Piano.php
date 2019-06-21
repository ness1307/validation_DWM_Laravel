<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piano extends Model
{
    protected $fillable = ['name', 'color', 'price', 'date'];
    
    public function category()
    {
        return $this->belongsTo('App\Category');
        
    }

}
