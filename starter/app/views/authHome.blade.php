@extends('master')

@section('title')
@parent
:: Create Account
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
                {{ $error }}<br>
            @endforeach
        </div>
        @endif
<div class="page-header">
    <h2>Welcome to the CIS Open House Admin Page.</h2>
    <p>Please create a project by clicking the link below or click on one of the projects in "Your Projects" table to edit it.</p>
</div>

<div>
    <p> Currently logged in as:  {{Auth::user()->email}}</p>
    <h3>{{ HTML::link('display/create', 'Create a Display') }}</h2>
    <br>
    <br>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="list-group">
      <a href="" class="list-group-item disabled">Edit Your Projects(Click to edit )</a>
      <?php
        $userid = Auth::user()->id;
        $displays = DB::table('displays')->where('user_id', '=', $userid)->orderby('updated_at', 'desc')->get();
      ?>
      @foreach ($displays as $display)
        <a href="display/edit/{{$display->id}}" class="list-group-item"><span class="glyphicon glyphicon-pencil"></span> &nbsp &nbsp {{$display->project_name}} last editied: {{$display->updated_at}} </a>
      @endforeach

    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="list-group">
      <a href="" class="list-group-item disabled">View Your Projects(Click to Views)</a>
      <?php
        $userid = Auth::user()->id;
        $displays = DB::table('displays')->where('user_id', '=', $userid)->orderby('updated_at', 'desc')->get();
      ?>
      @foreach ($displays as $display)
        <a href="display/view/{{$display->id}}" class="list-group-item"><span class="glyphicon glyphicon-list-alt"></span> &nbsp &nbsp {{$display->project_name}} last editied: {{$display->updated_at}} </a>
      @endforeach

    </div>
  </div>
</div>




@stop
