<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',  'HomePageController@show');
Route::get('/home',  'HomeController@index');

Auth::routes();



//BLOGSCONTROLLER

Route::get('blogs', [


	'uses' => 'BlogsController@index',

    'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

Route::get('blogs/search','BlogsController@search'); 


Route::get('blogs/create', [ 


	'uses' => 'BlogsController@create',

    'middleware' => 'roles',
	'roles'  => ['Admin','Blogger']

	]);


Route::post('blogs/create', [


	'uses' => 'BlogsController@store',

    'middleware' => 'roles',
	'roles'  => ['Admin','Blogger']

	]);

Route::get('blogs/{id}', [


	'uses' => 'BlogsController@show',

    'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

Route::post('blogs/{id}/publish', [


	'uses' => 'BlogsController@update',

    'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

Route::post('blogs/{id}/delete', [


	'uses' => 'BlogsController@destroy',

    'middleware' => 'roles',
	'roles'  => ['Admin']

	]);
Route::post('blogs/{id}/featured', [


	'uses' => 'BlogsController@featureblog',

    'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

Route::post('blogs/{id}/subfeatured', [


	'uses' => 'BlogsController@subfeatureblog',

    'middleware' => 'roles',
	'roles'  => ['Admin']

	]);





//TAGCONTROLLER

Route::get('tags/create', [


	'uses' => 'TagController@create',

    'middleware' => 'roles',
	'roles'  => ['Admin','Blogger']

	]);


Route::post('tags/create', [


	'uses' => 'TagController@store',

    'middleware' => 'roles',
	'roles'  => ['Admin','Blogger']

	]);

Route::post('tags/{id}/delete', [


	'uses' => 'TagController@destroy',

    'middleware' => 'roles',
	'roles'  => ['Admin','Blogger']

	]);

	







Route::get('Paragraphs/{id}/create', [

	'uses' => 'ParagraphController@create',
	'middleware' => 'roles',
	'roles'  => ['Admin','Blogger']

	]);


Route::post('Paragraphs/{id}/create',[

	'uses' => 'ParagraphController@store',
	'middleware' => 'roles',
	'roles'  => ['Admin','Blogger']

	]);



//USERSCONTROLLER
Route::get('/users', [
	'uses' => 'UsersController@index',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);


Route::get('/user/{user}',[
	'uses' => 'UsersController@show',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);
Route::POST('/user/{user}/role',[
	'uses' => 'UsersController@assign',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

//SLIDERCONTROLLER


Route::get('/slider/create',[
	'uses' => 'SliderController@create',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);
Route::POST('/slider/create',[
	'uses' => 'SliderController@store',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

Route::POST('/slider/{id}/edit',[
	'uses' => 'SliderController@edit',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

Route::POST('/slider/{id}/delete',[
	'uses' => 'SliderController@destroy',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

Route::POST('/slider/{id}/publish',[
	'uses' => 'SliderController@update',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);


//SLIDECONTROLLER


Route::get('/slide/create',[
	'uses' => 'SlideController@create',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);
Route::POST('/slide/create',[
	'uses' => 'SlideController@store',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	
]);


	//SLIDECONTROLLER





Route::get('/slider/{id}/slides/create',[
	'uses' => 'SlideController@create',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);


Route::POST('/slider/{id}/slides/create',[
	'uses' => 'SlideController@store',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);


Route::POST('/slide/{id}/edit',[
	'uses' => 'SlideController@edit',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

Route::POST('/slide/{id}/delete',[
	'uses' => 'SlideController@destroy',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);


//EventController


Route::get('/events/index',[

	'uses'  => 'EventController@index',
	'middleware' => 'roles',
	'roles'  => ['Admin']
	]);


Route::POST('/events/{id}/publish',[

	'uses' => 'EventController@publish',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);


Route::POST('/events/{id}/delete',[

	'uses' => 'EventController@delete',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

Route::get('/events/create',[
	'uses' => 'EventController@create',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

Route::get('/events/{id}','EventController@display');
	


Route::POST('/events/create',[
	'uses' => 'EventController@store',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);


//CampaignController


//show create a donation for campaign page 

Route::get('/campaign/{id}/cpcreatedonation',[
	'uses' => 'CampaignController@donation',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

//save donation for campaign
Route::POST('/campaign/{id}/cpcreatedonation',[
	'uses' => 'CampaignController@savedonation',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);


//show all campaigns

Route::get('/campaigns',[
	'uses' => 'CampaignController@index',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);


Route::get('/campaigns/create',[
	'uses' => 'CampaignController@create',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

Route::get('/campaigns/{id}/display',[
	'uses' => 'CampaignController@show',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);


Route::POST('/campaigns/create',[
	'uses' => 'CampaignController@store',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

Route::POST('/campaigns/{id}/publish',[
	'uses' => 'CampaignController@publish',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

Route::POST('/campaigns/{id}/delete',[
	'uses' => 'CampaignController@delete',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);


//TeamController

Route::get('/team/create',[
	'uses' => 'TeamController@create',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

	Route::get('/team/index',[
	'uses' => 'TeamController@index',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

Route::get('/team/{id}',[
	'uses' => 'TeamController@display',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);



Route::get('/team/index',[
	'uses' => 'TeamController@index',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

Route::POST('/team/{id}/publish',[
	'uses' => 'TeamController@publish',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

Route::get('/team/{id}/edit',[
	'uses' => 'TeamController@update',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);


Route::POST('/team/{id}/edit',[
	'uses' => 'TeamController@edit',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);

Route::POST('/team/{id}/delete',[
	'uses' => 'TeamController@delete',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);


Route::POST('/team/create',[
	'uses' => 'TeamController@store',
	'middleware' => 'roles',
	'roles'  => ['Admin']

	]);


//sectionController

Route::get('/section/create',[
	'uses' => 'SectionController@create',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);

Route::get('/section/index',[
	'uses' => 'SectionController@index',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);

Route::POST('/section/create',[
	'uses' => 'SectionController@store',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);

Route::POST('/section/{id}/delete',[
	'uses' => 'SectionController@delete',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);


Route::get('/section/{id}/edit',[
	'uses' => 'SectionController@showedit',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);

Route::POST('/section/{id}/edit',[
	'uses' => 'SectionController@edit',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);


//HOMESLIDERCONTROLLER

Route::get('/homeslider/create',[
	'uses' => 'HomeSliderController@create',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);

Route::POST('/homeslider/create',[
	'uses' => 'HomeSliderController@store',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);

Route::POST('/homeslider/{id}/publish',[
	'uses' => 'HomeSliderController@update',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);

Route::POST('/homeslider/{id}/delete',[
	'uses' => 'HomeSliderController@delete',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);



//HOMESLIDECONTROLLER


Route::get('/homeslide/{id}/create',[
	'uses' => 'HomeSlideController@create',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);

Route::POST('/homeslide/{id}/create',[
	'uses' => 'HomeSlideController@store',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);

Route::POST('/homeslider/{id}/{Id}/edit',[
	'uses' => 'HomeSlideController@edit',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);

Route::get('/homeslider/{id}/{Id}/edit',[
	'uses' => 'HomeSlideController@displayedit',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);

Route::POST('/homeslider/{id}/{Id}/delete',[
	'uses' => 'HomeSlideController@delete',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);



Route::get('/homeslider/{id}/show',[
	'uses' => 'HomeSliderController@show',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);

Route::get('/homeslide/{id}/show', 'HomeSlideController@showslide');
	


	

//DONATIONSCONTROLLER

Route::get('/homeslide/{id}/hscreatedonation',[
	'uses' => 'DonationController@create',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);

Route::POST('/homeslide/{id}/hscreatedonation',[
	'uses' => 'DonationController@store',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);


//TESTIMONIALCONTROLLER

Route::get('/testimonial-dg/create',[
	'uses' => 'TestimonialController@create',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);
// show all testimonials
Route::get('/testimonial-dg/index',[
	'uses' => 'TestimonialController@index',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);

Route::POST('/testimonial-dg/create',[
	'uses' => 'TestimonialController@store',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);


//CREATE SPONSORS

Route::get('/sponsor/create',[
	'uses' => 'SponsorController@create',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);

Route::POST('/sponsor/create',[
	'uses' => 'SponsorController@store',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);


//Volunteer Controller

// Register a volunteer

Route::get('/volunteer/register',[
	'uses' => 'VolunteerController@create',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);

Route::POST('/volunteer/register',[
	'uses' => 'VolunteerController@register',
	'middleware' => 'roles',
	'roles'  => ['Admin']


	]);