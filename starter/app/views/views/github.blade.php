@extends('master')

@section('title')
@parent
:: Home
@stop

@section('header')
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" stlye="color: #f5f5f5">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{{ URL::to('') }}}"><img src="{{asset('images/cis.jpeg')}}" alt="CIS Logo" id="cis-logo" width="25px" /></a>
        </div>
        <!-- Everything you want hidden at 940px or less, place within here -->
        <div class="collapse navbar-collapse">
           <ul class="nav navbar-nav">
                <li><a href="{{{ URL::to('') }}}">Home</a></li>
                @if ( Auth::guest() )
                    <!-- <li>{{ HTML::link('signin', 'Sign In') }}</li> -->
                    <!-- <li>{{ HTML::link('create', 'Create Account') }}</li> -->
                @else
                    <li>{{ HTML::link('signout', 'Sign Out') }}</li>
                @endif
            </ul>
        </div>
    </div>
</div>
@stop

{{-- Content --}}
@section('content')
    @if ($errors->has())
        <div id="errors" class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>test
            @endforeach
        </div>
        @endif
<div class="page-header">
    <h2><span class="glyphicon glyphicon-book"></span><a href="{{{ URL::to('') }}}">  open_house</a> / <a href="{{{ URL::to('') }}}">teamname</a></h2>
</div>

<div>
    <h4>General overview of the project will go here.</h4>
</div>

<div class="row">
  <div class="col-md-9">
    <div class="list-group">
      <a href="" class="list-group-item disabled">
        project name
      </a>
      <!-- Foreach here -->
      <a href="" class="list-group-item"><span class="glyphicon glyphicon-file"></span> .gitignore</a>
      <a href="" class="list-group-item"><span class="glyphicon glyphicon-file"></span> README.md</a>
    </div>
    <div class="panel panel-default ">
      <div class="panel-heading">README.md</div>
        <div class="panel-body">

          <div class="page-header">
              <h2>Project Name</h2>
          </div>

          Bacon ipsum dolor amet turducken salami venison ball tip, jerky boudin pork belly. Kielbasa salami turducken, biltong jerky pig frankfurter leberkas. Frankfurter tenderloin tongue turkey spare ribs, ham capicola corned beef chuck. Pastrami prosciutto shankle meatloaf frankfurter fatback tail rump shank filet mignon. Meatloaf capicola pork landjaeger pork belly. Strip steak jerky ball tip alcatra swine t-bone salami jowl bresaola.
          <br>
          <br>
          Hamburger short ribs shank, ham turducken brisket tail flank pastrami chuck. Shank beef ribs beef kielbasa boudin tenderloin strip steak corned beef flank venison alcatra short ribs pork. Drumstick meatloaf brisket strip steak venison pastrami pork doner tri-tip filet mignon ground round. Brisket doner landjaeger fatback. Prosciutto t-bone strip steak meatloaf, turkey andouille brisket short loin landjaeger jerky flank pork loin beef ribs chuck kevin.
          <br><br>
          Hamburger pancetta strip steak short ribs, ribeye prosciutto leberkas pig doner ball tip filet mignon drumstick landjaeger beef ribs sirloin. Pork chop ham kielbasa corned beef pork pork belly chicken brisket. Biltong pork belly ground round, alcatra pancetta kielbasa boudin swine venison bacon. Frankfurter beef bresaola biltong ham filet mignon swine. Picanha salami leberkas, filet mignon venison boudin sausage jerky meatball turducken swine andouille sirloin porchetta. Frankfurter kielbasa flank, ball tip cupim t-bone swine beef.
          <br><br>
          Kevin kielbasa strip steak, cow beef beef ribs filet mignon landjaeger cupim salami. Chicken flank alcatra corned beef salami, ball tip shankle. Andouille meatloaf tri-tip rump doner, corned beef sausage turducken picanha leberkas frankfurter. Ham kevin salami chuck flank. Turducken venison drumstick frankfurter kielbasa. Short ribs bresaola ham spare ribs, alcatra hamburger ham hock biltong leberkas brisket drumstick. Jowl rump tenderloin drumstick pork filet mignon pig kielbasa chicken andouille biltong.
          <br><br>
          Brisket sirloin t-bone pastrami, ham corned beef salami. Cow shank ball tip spare ribs tail landjaeger strip steak drumstick. Biltong chicken boudin swine rump pork flank drumstick cupim. Rump sirloin frankfurter beef, corned beef ribeye meatball short ribs.
          <br><br>
          Does your lorem ipsum text long for something a little meatier? Give our generator a try… it’s tasty!
        </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        Open House Dream Team
      </a>
      <!-- Foreac here -->
      <a href="#" class="list-group-item">Chris Piggott</a> <!-- mailto? -->
      <a href="#" class="list-group-item">Ethan Schwaiger</a> <!-- mailto? -->
      <a href="#" class="list-group-item disabled">More Info</a> <!-- mailto? -->
      <a href="http://cis.ksu.edu" class="list-group-item">CIS Homepage</a> <!-- mailto? -->
      <a href="http://engg.ksu.edu" class="list-group-item">Engineering Homepage</a>
      <a href="http://ksu.edu" class="list-group-item">K-State Homepage</a>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md-9">

  </div>
</div>


@stop
