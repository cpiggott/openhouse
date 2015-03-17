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
    <h2><span class="glyphicon glyphicon-book"></span><a href="{{{ URL::to('') }}}">  open_house</a> / <a href="{{{ URL::to('') }}}"> {{$display->teamname}}</a></h2>
</div>

<div>
    <h4>{{$display->project_name}}</h4>
</div>

<div class="row">
  <div class="col-md-9">
    <div class="list-group">
      <a href="" class="list-group-item disabled">
        {{$display->project_name}}
      </a>
      <!-- Foreach here -->
      <a href="" class="list-group-item"><span class="glyphicon glyphicon-file"></span> .gitignore</a>
      <a href="" class="list-group-item"><span class="glyphicon glyphicon-file"></span> README.md</a>
    </div>
    <div class="panel panel-default ">
      <div class="panel-heading">README.md</div>
        <div class="panel-body">

          <div class="page-header">
              <h2>{{ $display->project_name }}</h2>
          </div>

          {{$display->content}}
        </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        {{$display->teamname}}
      </a>
      <!-- Foreach here -->
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
