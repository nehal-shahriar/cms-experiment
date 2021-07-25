<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public function topics(){
        return $this->belongsToMany(Topic::class);
    }

    protected $casts=[
        'topiclist'=> 'array'
    ];
}
