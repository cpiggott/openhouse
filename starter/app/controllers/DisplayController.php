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


  //Add more error checking
  //Creates the Display in the database
  public function postCreateDisplay(){
    $teamName = Input::get('inputTeamName');
    $projectName = Input::get('projectName');
    $username = Input::get('userName');
    $type = Input::get('displayType');
    $content = Input::get('content');
    $user_id = Auth::id();
		$teamNames = Input::get('teamMemberNames');

    $content = addslashes($content);

    $display = Display::create( array(
      'teamname' => $teamName,
      'project_name' => $projectName,
      'team_memebrs' => $username,
      'content' => $content,
      'user_id' => $user_id,
      'type' => $type,
			'names' => $teamNames
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
            return View::make('views.github')->with('display', $display);
            break;
        case 1:
            return View::make('views.scholar')->with('display', $display);
            break;
        case 2:
					return View::make('views.stackoverflow')->with('display', $display);
            break;
        case 3:
					return View::make('views.reddit')->with('display', $display);
            break;
        case 4:
						return View::make('views.facebook')->with('display', $display);
            break;
      }
    } else {
      echo "Something went wrong";
    }
  }

  public function editDisplay($code){
    $display = Display::find($code);
    if(Auth::check() && $display->user_id == Auth::user()->id){
      //var_dump($display->teamname);
      return View::make('edit.editdisplay')->with('display', $display);
    } else {
      return Redirect::to('')->with('error', 'You are not authorized to create a display.');
    }
  }

  public function postEditDisplay($code){

    $display = Display::find($code);
    if(Auth::check() && $display->user_id == Auth::user()->id){
      $teamName = Input::get('inputTeamName');
      $projectName = Input::get('projectName');
      $username = Input::get('userName');
      $type = Input::get('displayType');
      $content = Input::get('content');
      $user_id = Auth::id();
			$teamNames = Input::get('teamMemberNames');

      $content = addslashes($content);

      $display->teamname = $teamName;
      $display->project_name = $projectName;
      $display->team_members = $username;
      $display->type = $type;
      $display->content = $content;
      $display->user_id = $user_id;
			$display->names = $teamNames;

      $display->save();
      return Redirect::to('')->with('success', 'You have updated your display info successfully');
    } else {
      return Redirect::to('home')->withErrors();
    }
  }

}
