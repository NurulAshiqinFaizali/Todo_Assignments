<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $table = 'todo1';//so you can see other table
    
    
    public $timestamps = true;

  

    protected $fillable = [
        'name',
        'details',
        'user_id',
    ];

    public function myUser()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

}
