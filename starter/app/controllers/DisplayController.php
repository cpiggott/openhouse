<?php

class DisplayController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showLimited()
	{

		return View::make('views.github');

	}


  public function getCreateDisplay(){
    if(Auth::check()){
      return View::make('create.display');
		} else {
			return View::make('home');
		}

  }



  public function postCreateDisplay(){

    $teamName = Input::get('teamName');
    $projectName = Input::get('projectName');
    $username = Input::get('userName');
    $content = Input::get('content');
    $user_id = Auth::id();

    $content = addslashes($content);

    $display = Display::create( array(
      'teamname' => $teamName,
      'project_name' => $projectName,
      'team_memebrs' => $username,
      'content' => $content,
      'user_id' => $user_id
      )
    );


      if($display){
        return Redirect::to('')->with('success', 'You have created your display info successfully');
      }

    }





}
