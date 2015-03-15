@extends('master')

@section('title')
@parent
:: Home
@stop

@section('header')
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" stlye="color: #512888">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="">CIS Open House</a>
        </div>
        <!-- Everything you want hidden at 940px or less, place within here -->
        <div class="collapse navbar-collapse">
           <ul class="nav navbar-nav">
                <li><a href="{{{ URL::to('') }}}">Home</a></li>
                @if ( Auth::guest() )
                    <li>{{ HTML::link('signin', 'Team Sign In') }}</li>
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
    <p>Thank you for coming to CIS Open House, this website is here to help you find more infotmation about displays and ask questions...</p>
</div>
<!--
<div>
    <p>The QR Code Scanner will go here once I implement it!</p>
</div>
-->

<div>
    <h1>Displays</h1>
    <p>Below you will find links to all the displays for CIS and what each display is.</p>

    <h3>Clubs</h3>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Clubs
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
            Check out the clubs in CIS. <!--ADD MORE HERE PLEASE-->
            <ul>
              <li><a href="#">Association for Computing Machinery</a></li>
              <li><a href="#">Association for Computing Machinery - Women in Computing</a></li>
              <li><a href="#">Cyber Defense Club</a></li>
              <li><a href="#">eSports</a></li>
              <li><a href="#">Game Development Club</a></li>
              <li><a href="#">Makerspace</a></li>
              <li><a href="#">Mobile Development Club</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Freshman and Sophmore Displays
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
          Freshman and Sophomore displays will show you what freshman and sophmore students are currently working on during and outside of class.
            <ul>
              <li><a href="#">Association for Computing Machinery</a></li>
              <li><a href="#">Association for Computing Machinery - Women in Computing</a></li>
              <li><a href="#">Cyber Defense Club</a></li>
              <li><a href="#">eSports</a></li>
              <li><a href="#">Game Development Club</a></li>
              <li><a href="#">Makerspace</a></li>
              <li><a href="#">Mobile Development Club</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Graduate Displays
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
            <!-- This is where information about graduate displays will go -->
            These displays are work done b Graduate and PhD students in Computer Science.
            <ul>
              <li><a href="#">Usability Testing for Blah</a></li>
              <li><a href="#">Some other stuff</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFour">
          <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Limited Class
            </a>
          </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
          <div class="panel-body">
            <!-- Information about what Limited class displays are -->
            Limited Class displays are projects built specifically for K-State Engineering Open House. They are projects that are done entirely outside of class and are meant to show what the CIS Department does.
            <ul>
              <li><a href="#">Association for Computing Machinery</a></li>
              <li><a href="#">Association for Computing Machinery - Women in Computing</a></li>
              <li><a href="#">Cyber Defense Club</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFive">
          <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Open Class
            </a>
          </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
          <div class="panel-body">
            <!-- information on what open classes are-->
            Open Class Displays can be anythign from class projects, to local, regional, or national competition entries. <!-- This needs edit -->
            <ul>
              <li><a href="#">Association for Computing Machinery</a></li>
              <li><a href="#">Association for Computing Machinery - Women in Computing</a></li>
              <li><a href="#">Cyber Defense Club</a></li>
              <li><a href="#">eSports</a></li>
              <li><a href="#">Game Development Club</a></li>
              <li><a href="#">Makerspace</a></li>
              <li><a href="#">Mobile Development Club</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>

<div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>



@stop
