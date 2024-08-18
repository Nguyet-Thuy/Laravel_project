<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;
use App\Models\Contact;
use App\Models\FaqCategory;
use App\Models\Product;
use App\Models\FaqItem;
use App\Models\User;
use App\Models\Order;



class AdminController extends Controller
{
    public function index()
    {
        // Your code here
        return view('admin.index');
    }

//User
public function view_user()
    {
        $data = User::all();
        return view('admin.user',compact('data'));
    }

    public function add_user(Request $request)
    {
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->bio = $request->bio;
        $user->avatar = $request->avatar;
        $user->usertype = $request->usertype;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->birthday = $request->birthday;
        $user->password = $request->password;

        $image = $request->avatar;

        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->avatar->move('profilePictures',$imagename);

            $user->avatar = $imagename;
        }

        $user->save();


        return redirect()->back();
    }

    public function delete_user($id)
    {
        $data = User::find($id);

        $data->delete();


        return redirect()->back();
    }

    public function edit_user($id)
    {
        $data = User::find($id);

        return view('admin.edit_user', compact('data'));
    }

    public function update_user(Request $request,$id)
    {
        $data= User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->bio = $request->bio;
        $data->avatar = $request->avatar;
        $data->usertype = $request->usertype;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->birthday = $request->birthday;

        $data->save();

        return redirect('/view_user');
    }


    //Product Category
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


        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);

        $data->delete();


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

    //News Posts
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


        return redirect()->back();
    }

    public function delete_news($id)
    {
        $data = News::find($id);

        $data->delete();


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

    //Contact
    public function view_contact()
    {
        $data = Contact::all();
        return view('admin.contact',compact('data'));
    }

     //FAQ Category
     public function view_faqCategory()
{
    // Retrieve all FAQ categories
    $data = FaqCategory::all();

    // Pass the data to the view
    return view('admin.faqCategory', compact('data'));
}


     public function add_faqCategory(Request $request)
    {
        $faqCategory = new FaqCategory;

        $faqCategory->faqCategory_name = $request->faqCategory;

        $faqCategory->save();


        return redirect()->back();
    }

    public function delete_faqCategory($id)
    {
        $data = FaqCategory::find($id);

        $data->delete();


        return redirect()->back();
    }

    public function edit_faqCategory($id)
{
    $data = FaqCategory::find($id); 
    return view('admin.edit_faqCategory', compact('data')); 
}


public function update_faqCategory(Request $request, $id)
{
    $data = FaqCategory::find($id); 

    $data->faqCategory_name = $request->faqCategory_name; 

    $data->save(); 

    return redirect('/view_faqCategory'); 
}

//Product

public function add_product()
{
    $category = Category::all();
    return view('admin.add_product',compact('category'));
}

public function upload_product(Request $request)
{
    $data = new Product; 

    $data->title = $request->title; 
    $data->description = $request->description;
    $data->price = $request->price;
    $data->quantity = $request->quantity;
    $data->category = $request->category;

    $image = $request->image;

    if($image)
    {
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('products',$imagename);

        $data->image = $imagename;
    }

    $data->save(); 

    return redirect()->back(); 
}

public function view_product()
{
    $product = Product::paginate(5);
    return view('admin.view_product',compact('product'));
}

public function delete_product($id)
{
    $data = Product::find($id);

    $image_path = public_path('products/'.$data->image);

    if(file_exists($image_path))
    {
        unlink($image_path);
    }

    $data->delete();

    return redirect()->back();
}

public function update_product($id)
{
    $data = Product::find($id);

    $category = Category::all();

    return view('admin.update_page', compact('data','category'));
}

public function edit_product(Request $request,$id)
{
    $data = Product::find($id);

    $data->title = $request->title;
    $data->description  = $request->description;
    $data->price = $request->price;
    $data->quantity = $request->quantity;
    $data->category = $request->category;

    $image = $request->image;

    if($image)
    {
        $imagename = time().'.'.$image-> getClientOriginalExtension();

        $request->image->move('products',$imagename);

        $data->image = $imagename;
    }
    $data->save();
    return redirect('/view_product');
}

//FAQ Item

public function add_faqItem()
{
    $faqCategory = FaqCategory::all();
    return view('admin.add_faqItem',compact('faqCategory'));
}

public function upload_faqItem(Request $request)
{
    $data = new FaqItem; 

    $data->category = $request->category;
    $data->question = $request->question; 
    $data->answer = $request->answer;

    $data->save(); 

    return redirect()->back(); 
}

public function view_faqItem()
{
    $faqItem = FaqItem::paginate(5);
    return view('admin.view_faqItem',compact('faqItem'));
}

public function delete_faqItem($id)
{
    $data = FaqItem::find($id);

    $data->delete();

    return redirect()->back();
}

public function update_faqItem($id)
{
    $data = FaqItem::find($id);

    $faqCategory = FaqCategory::all();

    return view('admin.update_faqItem', compact('data','faqCategory'));
}
 
public function edit_faqItem(Request $request,$id)
{
    $data = FaqItem::find($id);

    $data->category = $request->category;
    $data->question = $request->question;
    $data->answer  = $request->answer;
    
    $data->save();
    return redirect('/view_faqItem');
}

//Orders

public function view_orders()
{

    $data = Order::all();

    return view('admin.orders',compact('data'));

}

public function on_the_way($id)
{
    $data = Order::find($id);
    $data->status = 'On the way';

    $data->save();

    return redirect('/view_orders');
}

public function delivered($id)
{
    $data = Order::find($id);
    $data->status = 'Delivered';

    $data->save();

    return redirect('/view_orders');
}

}

