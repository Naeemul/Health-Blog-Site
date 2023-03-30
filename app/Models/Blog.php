<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    static $blog, $image, $imageName, $directory ;
    static function imageURL($imageData)
    {
        self::$image = $imageData->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'blog-image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    static  function createBlog($data)
    {
        self::$blog = new Blog();
        self::$blog->title = $data->title;
        self::$blog->description = $data->description;
        self::$blog->image = self::imageURL($data);
        self::$blog->save();
    }
    static  function deleteBlog($id)
    {
        $blog = Blog::find($id);
        if(file_exists($blog->image)){
            unlink($blog->image);
        }
        $blog->delete();
    }
    static function updateBlog($data, $id)
    {
        $blog = Blog::find($id);
        $blog->title = $data->title;
        $blog->description = $data->description;
        if($data->file('image')){
            if(file_exists($blog->image)){
                unlink($blog->image);
            }
            $blog->image = self::imageURL($data);
        }
        $blog->save();
    }
}
