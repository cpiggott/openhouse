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
    <h2>Welcome to the CIS Open House Page!</h2>
</div>

<div>
    <p> Welcome {{Auth::user()->email}}</p>
</div>


@stop
