<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function getImage(){
        return $this->image != ''?'images_category/'.$this->image:'images_category/logo.png';
    }



}
