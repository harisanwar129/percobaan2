<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates=['created_at'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function thumbnail(){
        // if($this->thumbnail){
        //     return $this->thumbnail;
        // }else{
        //     return asset('image/no-thumbnail.jpg');
        // }
         return !$this->thumbnail ? asset('image/no-thumbnail.jpg') : $this->thumbnail;
    }
}
