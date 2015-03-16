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
      return Redirect::to('')->with('error', 'You are nto authorized to create a display.');
		}

  }



  public function postCreateDisplay(){

//Add more error checking
    $teamName = Input::get('teamName');
    $projectName = Input::get('projectName');
    $username = Input::get('userName');
    $type = Input::get('displayType');
    $content = Input::get('content');
    $user_id = Auth::id();

    $content = addslashes($content);

    $display = Display::create( array(
      'teamname' => $teamName,
      'project_name' => $projectName,
      'team_memebrs' => $username,
      'content' => $content,
      'user_id' => $user_id,
      'type' => $type
      )
    );


    if($display){
      return Redirect::to('')->with('success', 'You have created your display info successfully');
    } else {
      return Redirect::to('display/create')->withErrors();
    }
  }

  public function getDisplay($code){
    $display = Display::find($code);
    if($display){

      switch ($display->type) {
        case 0:
            echo "Limited Dispaly";
            break;
        case 1:
            echo "Open Class Display";
            break;
        case 2:
            echo "Technical Display";
            break;
        case 3:
            echo "Freshman/Sophomore Display";
            break;
        case 4:
            echo "Graduate Dispaly";
            break;
        case 5:
            echo "Student Club Display";
            break;

      }

    }

    else {
      echo "Something went wrong";
    }

  }




}
