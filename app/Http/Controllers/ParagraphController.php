<?php

namespace App\Http\Controllers;

use App\Paragraph;
use App\Paragraphphoto;
use Illuminate\Http\Request;
use App\Blog;
use App\Slider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class ParagraphController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('paragraphcreate',['blogId' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        





        $validation = Validator::make($request->all(), [
        
        
        
        
        'body'  => 'required',
        'video' => 'required',
        'photos' => 'required'

        
      ]);



      

        $photos = count($request->photos);
        foreach(range(0, $photos) as $index) {
            $rules['photos.' . $index] = 'image|mimes:jpeg,bmp,png';
        }


        if( $validation->fails() ){
        session()->flash('message','Please Fill Required Fields !!!');

            return redirect()->back()->withInput()
                             ->with('errors', $validation->errors() );

                             return session('message'); 
      }





         $newParagraph =  Paragraph::create([



       'blog_id' => $id,

        
         'body' => $request->body,
         
        'video' => $request->video


            ]);

        
        
         

         if(count($request->photos) > 0){


         foreach ($request->photos as $photo) {
            $filename = $photo->store('public/photos');


          
           
            $newPara = new Paragraphphoto;

               $newPara->paragraph_id = $newParagraph->id;
                $newPara->filename =$filename;
           
                $newPara->save();

        }

    }


    $paragraphs  = Blog::find($id)->paragraphs;

                     


      $blog = Blog::find($id);
      $images = $blog->photos;

      $slider = Slider::where('body',$blog->slider_name)->first();

      // $images = DB::table('photos')->where('blog_id',$blog->id)->pluck('filename');  
          
       
        
        return view('blogdisplay',['blog' => $blog,'images' =>  $images,'paragraphs'=> $paragraphs,'slider' => $slider]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paragraph  $paragraph
     * @return \Illuminate\Http\Response
     */
    public function show(Paragraph $paragraph)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paragraph  $paragraph
     * @return \Illuminate\Http\Response
     */
    public function edit(Paragraph $paragraph)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paragraph  $paragraph
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paragraph $paragraph)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paragraph  $paragraph
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paragraph $paragraph)
    {
        //
    }
}
