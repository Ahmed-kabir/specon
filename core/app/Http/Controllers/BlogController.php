<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class BlogController extends Controller
{

    public function addBlog()
    {
        $data['title'] = 'Add Blog';
        return view('blog.add_blog', $data);
    }

    public function saveBlog(Request $request)
    {


        $request->validate([
            "title" => 'required',
            "date" => 'required',
            "short_desc" => 'required',
            "long_desc" => 'required',
            "img" => 'mimes:jpeg,jpg,png,gif|required|max:1000'

        ]);
//        $blogImage = $request->file('img');
//
//        $randNumber = Str::random(6);
//        $fileExtension = $blogImage->getClientOriginalExtension();
//        $name = $randNumber . '.' . $fileExtension;
//
//        $path = ('assets/blogImage/');
//        $blogImage->move($path, $name);
//        $imageurl = $path . $name;

        $imageName = $request->file('img');
        $speakerNameFormate = 'blog-'.Str::random(8).'.'.$imageName->getClientOriginalExtension();
        $img = Image::make($imageName);
        $path = 'assets/blogImage/';
        $img->resize(350,310);
        $img->save($path.'/'.$speakerNameFormate);




        $date = date("F-j", strtotime($request->date));

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->short_desc = $request->short_desc;
        $blog->long_desc = $request->long_desc;
        $blog->img = $speakerNameFormate;
        $blog->date = $date;
        $blog->status = 1;
        $blog->save();
        return back()->with('success_message', 'Blog Added Successfully');
    }

    public function manageBlog()
    {
        $data['title'] = 'Manage Blog';
        $data['blog'] = Blog::where('status', 1)->paginate(5);
        return view('blog.manage_blog', $data);
    }

    public function editBlog($id)
    {
        $data['title'] = 'Edit Blog';
        $data['editBlogById'] = Blog::find($id);
        return view('blog.edit_blog', $data);
    }

    public function updateBlog(Request $request, $id)
    {
        $request->validate([
            "title" => 'required',
            "short_desc" => 'required',
            "long_desc" => 'required',
            "img" => 'mimes:jpeg,jpg,png,gif|max:1000'

        ]);
        $speakerNameFormate = $this->chkimage($request, $id);

        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->short_desc = $request->short_desc;
        $blog->long_desc = $request->long_desc;
        $blog->img = $speakerNameFormate;
        $blog->save();
        return redirect()->route('manageBlog')->with('success_message', 'Blog Updated Successfully');
    }

    public function chkimage($request, $id)
    {
        $blog = Blog::where('id', $id)->first();
        $blogImage = $request->file('img');
        if ($blogImage) {
            unlink('assets/blogImage/'.$blog->img);


            $speakerNameFormate = 'speaker-'.Str::random(8).'.'.$blogImage->getClientOriginalExtension();
            $img = Image::make($blogImage);
            $path = 'assets/blogImage/';
            $img->resize(350,310);
            $img->save($path.'/'.$speakerNameFormate);

        } else {
            $speakerNameFormate = $blog->img;
        }
        return $speakerNameFormate;
    }

    public function inactiveBlog($id)
    {
        $blog = Blog::where('id', $id)->first();
        $blog->status = 0;
        $blog->save();
        return redirect()->route('manageBlog')->with('success_message', 'Blog Inactivated Successfully');
    }

}
