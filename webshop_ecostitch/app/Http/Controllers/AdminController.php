<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\News;

use App\Models\Contact;



class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request)
    {
        $category = new Category;

        $category->category_name = $request->category;

        $category->save();

        toastr()->timeOut(10000)->closeButton()->addSuccess('Category Added Succesfully');

        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);

        $data->delete();

        toastr()->timeOut(10000)->closeButton()->addSuccess('Category Deleted Succesfully');

        return redirect()->back();
    }

    public function edit_category($id)
    {
        $data = Category::find($id);

        return view('admin.edit_category', compact('data'));
    }

    public function update_category(Request $request,$id)
    {
        $data= Category::find($id);

        $data->category_name = $request->category_name;
        
        $data->save();

        return redirect('/view_category');
    }

    public function view_news()
    {
        $data = News::all();
        return view('admin.news',compact('data'));
    }

    public function add_news(Request $request)
    {
        $news = new News;

        $news->title = $request->title;
        $news->cover_image = $request->cover_image;
        $news->content = $request->content;
        $news->publishing_date = $request->publishing_date;

        $news->save();

        toastr()->timeOut(10000)->closeButton()->addSuccess('News Post Added Succesfully');

        return redirect()->back();
    }

    public function delete_news($id)
    {
        $data = News::find($id);

        $data->delete();

        toastr()->timeOut(10000)->closeButton()->addSuccess('News Post Deleted Succesfully');

        return redirect()->back();
    }

    public function edit_news($id)
    {
        $data = News::find($id);

        return view('admin.edit_news', compact('data'));
    }

    public function update_news(Request $request,$id)
    {
        $data= News::find($id);

        $data->title = $request->title;
        $data->cover_image = $request->cover_image;
        $data->content = $request->content;
        $data->publishing_date = $request->publishing_date;

        $data->save();

        return redirect('/view_news');
    }

    public function view_contact()
    {
        $data = Contact::all();
        return view('admin.contact',compact('data'));
    }
}
