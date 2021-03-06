@extends('master')

@section('title')
@parent
:: Edit Display
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
    <h2>Display Information</h2>
</div>

<?php
$displayURL = 'display/edit/'.$display->id;
 ?>

    {{ Form::open(array('url' => $displayURL, 'class' => 'form-horizontal')) }}
      <div class="form-group">
        <label for="inputTeamName"  class="col-sm-2 control-label">Team Name</label>
        <div class="col-sm-10">
          <input type="text" name="teamName" class="form-control" id="inputTeamName" placeholder="Team Name" value="{{$display->teamname}}">
        </div>
      </div>
      <div class="form-group">
        <label for="inputNames" class="col-sm-2 control-label">Team Member Names</label>
        <div class="col-sm-10">
          <input type="text" name="teaMembersNames"  class="form-control" id="teamMemberNames" placeholder="Team Members Names Separated by Comma(,)">
        </div>
      </div>
      <div class="form-group">
        <label for="inputProjectName" class="col-sm-2 control-label">Project Name</label>
        <div class="col-sm-10">
          <input type="text" name="projectName"  class="form-control" id="projectName" placeholder="Project Name" value="{{$display->project_name}}">
        </div>
      </div>
      <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">Team Member</label>
        <div class="col-sm-10">
          <input type="text" name="userName"  class="form-control" id="userName" placeholder="Your Name" >
        </div>
      </div>
      <div class="form-group">
        <label for="inputType" class="col-sm-2 control-label">Display Type</label>
        <div class="col-sm-10">
          <select name="displayType" id="displayType" class="form-control" value="{{$display->type}}">
            <option value="0">Limited Display</option>
            <option value="1">Open Class Display</option>
            <option value="2">Freshman/Sophomore Display</option>
            <option value="3">Graduate Display</option>
            <option value="4">Student Club Display</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">Display Information</label>
        <div class="col-sm-10">
          <textarea name="content" class="form-control ckeditor" id="contentInput" >{{stripslashes($display->content)}}</textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Save</button>
          {{ Form::token() }}
        </div>
      </div>
    </form>

{{ Form::close() }}

<div>
  <h3> Your Project QR Code. Share this with people visiting. </h3>
  <p>You will have to screen cap this if you want use it sorry, couldn't get PNG's working in time </p>
</div>

<div class="">
    {{ QrCode::format('svg')->size(399)->color(40,40,40)->generate(URL::to('/display/view/'.$display->id)) }}
</div>
@stop
