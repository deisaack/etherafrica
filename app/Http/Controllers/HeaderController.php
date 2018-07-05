<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Detail;
use App\Comment;
use App\Contact;
use Image;
use App\Blog;
use App\Team;


class HeaderController extends Controller
{
     public function addDetails(Request $request){
     		if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>";print_r($data); die;
            $details = new Detail;
            $details->heading = $data['heading'];
            if (!empty($data['description'])) {
                $details->description = $data['description'];
            }else{
                $details->description = ''; 
            }
            $details->mission = $data['mission'];
            $details->vision = $data['vision'];
            $details->support = $data['support'];

            //Upload Image
            if ($request->hasFile('image')) {
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $large_image_path = 'images/about/large/'.$filename;
                    $medium_image_path = 'images/about/medium/'.$filename;
                    $small_image_path = 'images/about/small/'.$filename;
                    // Resize Images
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(656,406)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                    // Store image name in products table
                    $details->image = $filename;
                }
            }
            // echo "<pre>";print_r($details); die;
            $details->save();
            return redirect()->back()->with('flash_message_success','Content Added Successfuly!');

        }
    	
    	return view('/admin/headerinfo/about');

    }

    public function addHome(Request $request){
            if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>";print_r($data); die;
            $home = new Comment;
            $home->heading = $data['heading'];
            if (!empty($data['description'])) {
                $home->description = $data['description'];
            }else{
                $home->description = ''; 
            }
            //Upload Image
            if ($request->hasFile('image')) {
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $large_image_path = 'images/home/large/'.$filename;
                    $medium_image_path = 'images/home/medium/'.$filename;
                    $small_image_path = 'images/home/small/'.$filename;
                    // Resize Images
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(1908,987)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                    // Store image name in products table
                    $home->image = $filename;
                }
            }
            // echo "<pre>";print_r($home); die;
            $home->save();
            return redirect()->back()->with('flash_message_success','Content Added Successfuly!');

        }
        
        return view('/admin/headerinfo/home');

    }

     public function addBlog(Request $request){

        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>";print_r($data); die;
            $blogs = new Blog;
            $blogs->blog_name = $data['blog_name'];
            $blogs->date = $data['date'];
            $blogs->summary = $data['summary'];
            if (!empty($data['description'])) {
                $blogs->description = $data['description'];
            }else{
                $blogs->description = ''; 
            }
            //Upload Image
            if ($request->hasFile('image')) {
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $large_image_path = 'images/pictures/large/'.$filename;
                    $medium_image_path = 'images/pictures/medium/'.$filename;
                    $small_image_path = 'images/pictures/small/'.$filename;
                    // Resize Images
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(650,480)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                    // Store image name in products table
                    $blogs->image = $filename;
                }
            }
            $blogs->save();
            // echo "<pre>";print_r($blogs); die;
            return redirect()->back()->with('flash_message_success','Blog Added Successfuly!');

        }
        return view('/admin/headerinfo/add_blog');
    }

    public function addContact(Request $request){
         if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>";print_r($data); die;
            $contacts = new Contact;
            $contacts->fullname = $data['fullname'];
            $contacts->number = $data['number'];
            $contacts->email = $data['email'];
            $contacts->subject = $data['subject'];
            $contacts->message = $data['message'];
            $contacts->save();
            // echo "<pre>";print_r($contacts); die;
            return redirect()->back()->with('flash_message_success','Message Send Successfuly!');

        }
                return view('index');
    }
     public function addTeam(Request $request){

        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>";print_r($data); die;
            $team = new Team;
            $team->name = $data['name'];
            if (!empty($data['description'])) {
                $team->description = $data['description'];
            }else{
                $team->description = ''; 
            }
            //Upload Image
            if ($request->hasFile('image')) {
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $large_image_path = 'images/pictures/large/'.$filename;
                    $medium_image_path = 'images/pictures/medium/'.$filename;
                    $small_image_path = 'images/pictures/small/'.$filename;
                    // Resize Images
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(263,335)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                    // Store image name in products table
                    $team->image = $filename;
                }
            }
            $team->save();
            // echo "<pre>";print_r($team); die;
            return redirect()->back()->with('flash_message_success','Member Added Successfuly!');

        }
        return view('/admin/headerinfo/team');
    }
    public function viewBlogs(Request $request){

        $blog = Blog::get();
        $blog = json_decode(json_encode($blog));
        // foreach($products as $key => $val){
        //     $category_name = Category::where(['id'=>$val->category_id])->first();
        //     $products[$key]->category_name = $category_name->category_name;
        // }
        // echo "<pre>"; print_r($products); die;
        return view('admin.headerinfo.view_blogs')->with(compact('blog'));
    }
     public function viewHome(Request $request){

        $home = Comment::get();
        $home = json_decode(json_encode($home));
     
        // echo "<pre>"; print_r($products); die;
        return view('admin.headerinfo.view_homeinfo')->with(compact('home'));
    }
    public function viewTeam(Request $request){

        $teams = Team::get();
        $teams = json_decode(json_encode($teams));
       
        // echo "<pre>"; print_r($products); die;
        return view('admin.headerinfo.view_team')->with(compact('teams'));
    }
    public function viewAbout(Request $request){

        $abouts = Detail::get();
        $abouts = json_decode(json_encode($abouts));
       
        return view('admin.headerinfo.view_about')->with(compact('abouts'));
    }
    public function editBlog(Request $request, $id = null){
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>";print_r($data);die;

            Blog::where(['id'=>$id])->update(['blog_name'=>$data['blog_name'],'date'=>$data['date'],'description'=>$data['description']]);
            return redirect('/admin/headerinfo/view_blogs')->with('flash_message_success','Blog updated Successfully!');
        }
        $blogDetails = Blog::where(['id'=>$id])->first();
        return view('admin/headerinfo.edit_blog')->with(compact('blogDetails'));
    }

      public function deleteBlog($id = null){
        if (!empty($id)) {
            Blog::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Blog deleted Successfully!');
        }
   }
   public function editHome(Request $request, $id = null){
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            //Upload Image
            if ($request->hasFile('image')) {
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $large_image_path = 'images/home/large/'.$filename;
                    $medium_image_path = 'images/home/medium/'.$filename;
                    $small_image_path = 'images/home/small/'.$filename;
                    // Resize Images
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(650,480)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path); 
                }
            }else{
                $filename = $data['image'];
            }
            Comment::where(['id'=>$id])->update(['heading'=>$data['heading'],'description'=>$data['description'],'image'=>$filename]);
            return redirect('/admin/headerinfo/view_homeinfo')->with('flash_message_success','Details updated Successfully!');
        }
        $homeDetails = Comment::where(['id'=>$id])->first();
        return view('admin/headerinfo.edit_home')->with(compact('homeDetails'));
    }

    public function deleteHome($id = null){
        if (!empty($id)) {
            Comment::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Home Info deleted Successfully!');
        }
   }
    public function editTeam(Request $request, $id = null){
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>";print_r($data);die;

            Team::where(['id'=>$id])->update(['name'=>$data['name'],'description'=>$data['description']]);
            return redirect('/admin/headerinfo/view_team')->with('flash_message_success','Member Details updated Successfully!');
        }
        $teamDetails = Team::where(['id'=>$id])->first();
        return view('admin/headerinfo.edit_team')->with(compact('teamDetails'));
    }
    public function deleteTeam($id = null){
        if (!empty($id)) {
            Team::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Team Member Record deleted Successfully!');
        }
   }
    public function deleteAbout($id = null){
        if (!empty($id)) {
            Detail::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Record deleted Successfully!');
        }
   }
   public function deleteHomeImage($id = null){
        
        //Get Product Image Name
        $HomeImage = Comment::where(['id'=>$id])->first();

        //Get Product Image path
        $large_image_path = 'images/home/large/';
        $medium_image_path = 'images/home/medium/';
        $small_image_path = 'images/home/small/';

        //Delete Large Image if not exist in large folder
        if (file_exists($large_image_path.$HomeImage->image)) {
            unlink($large_image_path.$HomeImage->image);
        }

        //Delete Large Image if not exist in large folder
        if (file_exists($medium_image_path.$HomeImage->image)) {
            unlink($medium_image_path.$HomeImage->image);
        }
        //Delete Small Image if not exist in large folder
        if (file_exists($small_image_path.$HomeImage->image)) {
            unlink($small_image_path.$HomeImage->image);
        }

        //Delete Image from Products table
        Comment::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_success','Home Image has been Deleted!');
    }
}
