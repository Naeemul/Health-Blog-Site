<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class AdminController extends Controller
{
    function admin()
    {
        $allBlogs = new Blog();
        return view('backend.admin-dashboard', ['blogs' => $allBlogs->all()]);
    }
    public function blogDetails($id)
    {
        $blog = Blog::find($id);
        return view('backend.blogDetails', ['blog' => $blog]);
    }
    function createBlog()
    {
        return view('backend.createBlog');
    }
    function createBlogComplete(Request $blogData)
    {
        Blog::createBlog($blogData);
        return redirect()->route('create.blog')->with('msg', 'Blog added successfully');
    }
    public function manageBlog()
    {
        $blogs = new Blog();
        return view('backend.manageBlog', ['blogs' => $blogs->all()]);
    }
    public function deleteBlog($id)
    {
        blog::deleteBlog($id);
        return redirect()->back();
    }
    public function updateBlog($id)
    {
        $blog = Blog::find($id);
        return view('backend.updateBlog', ['blog' => $blog]);
    }
    public function updateBlogComplete(Request $updateData, $id)
    {
        Blog::updateBlog($updateData, $id);
        return redirect()->route('manage.blog');
    }
}

