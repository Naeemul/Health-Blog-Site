<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\post;

class AdminController extends Controller
{
    function login()
    {
        return view('admin.login');
    }
    function loginSubmit(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');
        
        $result = DB::table('admin')
                    ->where('email', $email)
                    ->where('password', $password)
                    ->get();

        if(isset($result[0]->id) && $result[0]->status==1){
            session()->put('admin', $result[0]->id);
            return redirect()->route('viewPost');
        }
        else{
            session()->flash('msg', 'Please Enter Valid Details');
            return redirect()->route('admin-login');
        }
    }
    function viewPost()
    {
        $postData = post::all();
        return view('admin.viewPost', ['postData' => $postData]);
    }
    function managePost()
    {
        return view('admin.managePost');
    }
    function logout()
    {
        session()->forget('admin');
        return redirect()->route('admin-login');
    }
    function postSubmit(Request $request)
    {
        post::storePost($request);
        return redirect()->route('viewPost');
    }
    function deletePost($id)
    {
        post::destroy('id', $id);
        return redirect()->route('viewPost');
    }
    function updatePost($id)
    {
        $result = post::find($id);
        return view('admin.updatePost', ['result' => $result]);
    }
    function updatePostComplete(Request $request,$id)
    {
        $result = post::find($id);
        $result->title = $request->title;
        $result->description = $request->description;
        $result->image = $request->image;
        $result->postDate = $request->postDate;
        $result->save();
        return redirect()->route('viewPost');
    }
}
