<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Tag;
use Illuminate\Support\Facades\Validator;
use App\Photo;
use App\Paragraph;
use App\Paragraphphoto;
use App\Slider;
use Input;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();

        

        

        return view('blogsindex',['blogs' => $blogs]);
    }


    public function search()
    {
        $featuredblog = Blog::whereStatusAndFeatured(1,1)->first();


         

        
        $subfeaturedblogs = Blog::whereStatusAndSubfeatured(1,1)->get();

     

         $blogs =  Blog::where('status', 1)->where('featured',0)->where('subfeatured',0)->orderBy('created_at','asc')->paginate(3);

       

         return view('blogsearch',['featuredblog' => $featuredblog,'subfeaturedblogs' =>$subfeaturedblogs,'blogs' => $blogs]);
    }




    public function featureblog(Request $request,$id)

    {

        $featuredblog = Blog::find($id);


        if($featuredblog->featured){

                DB::table('blogs')
                    ->where('id', $id)
                    ->update(['featured'=> 0]);

            }
            
            else{
                DB::table('blogs')
                    ->where('id', $id)
                    ->update(['featured'=> 1]);

            }

            

            

             $blogs = Blog::all();
             return view('blogsindex',['blogs' => $blogs]);
    }

    public function subfeatureblog(Request $request,$id)
    {
             $subfeaturedblog = Blog::find($id);
        if($subfeaturedblog->subfeatured){

                DB::table('blogs')
                    ->where('id', $id)
                    ->update(['subfeatured'=> 0]);

            }
            
            else{
                DB::table('blogs')
                    ->where('id', $id)
                    ->update(['subfeatured'=> 1]);

            }

            

            

             $blogs = Blog::all();
             return view('blogsindex',['blogs' => $blogs]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {   

        $allTags = DB::table('tags')->pluck('name');
        return view('blogcreate',['allTags' => $allTags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $this->validate($request, [
            'title' => 'bail|required|max:255',
            'body' => 'required',
            'tags'  => 'required',
            'photo' =>'required'
        ]);

         $newStory = new Blog;

        
        

         $newStory->title = $request->title;
      
         $newStory->body = $request->body;
         
         $newStory->video = $request->video;
          $newStory->slider_name = $request->input('slider_name');
         $newStory->user_id = Auth::id();

         $newStory->status = false;
         $newStory->featured = false;
         $newStory->subfeatured = false;

         $newStory->save();

if ($request->hasFile('photo')) {


         
            $filename = $request->photo->store('public/photos');


          
            Photo::create([
                'blog_id' => $newStory->id,
                'filename' => $filename
            ]);
        
    }

if ($request->tags) {

         

         $tags = $request->tags;



         foreach($tags as $tag){

            $currentTag = DB::table('tags')->where('name', $tag)->value('id');

            DB::table('blog_tag')->insert([

                'blog_id' => $newStory->id, 
                'tag_id' => $currentTag

                ]);




            
         }
     }

}

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)


    {   

       // $paragraphs =  DB::table('paragraphs')->where('blog_id',$blog->id)->get();

            
                 $paragraphs  = Blog::find($id)->paragraphs;



                     


      $blog = Blog::find($id);
      $image = $blog->photo;
      $slider = Slider::where('body',$blog->slider_name)->first();

      // $images = DB::table('photos')->where('blog_id',$blog->id)->pluck('filename');  
          
       
        
        return view('blogdisplay',['blog' => $blog,'image' =>  $image,'paragraphs'=> $paragraphs,'slider' => $slider]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
    

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


       

        


         $blog = Blog::find($id);
            

            if($blog->status){

                DB::table('blogs')
                    ->where('id', $id)
                    ->update(['status'=> 0]);

            }
            
            else{
                DB::table('blogs')
                    ->where('id', $id)
                    ->update(['status'=> 1]);

            }

            

            

             $blogs = Blog::all();

        

        return view('blogsindex',['blogs' => $blogs]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('blogs')
            ->where('id', $id)
            ->delete();
            
             $blogs = Blog::all();

        

        

        return view('blogsindex',['blogs' => $blogs]);
    }
}
