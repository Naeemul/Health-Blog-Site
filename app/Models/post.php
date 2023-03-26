<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    static $data;
    static function storePost($data)
    {
        self::$data = new post;
        self::$data->title = $data->title;
        self::$data->description = $data->description;
        self::$data->image = $data->image;
        self::$data->postDate = $data->postDate;
        self::$data->save();
    }
}
