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



    {{ Form::open(array('url' => 'display/edit/'echo $display->id'', 'class' => 'form-horizontal')) }}
      <div class="form-group">
        <label for="inputTeamName"  class="col-sm-2 control-label">Team Name</label>
        <div class="col-sm-10">
          <input type="text" name="teamName" class="form-control" id="inputTeamName" placeholder="TeamName" value="{{$display->teamname}}">
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
            <option value="2">Technical Display</option>
            <option value="3">Freshman/Sophomore Display</option>
            <option value="4">Graduate Display</option>
            <option value="5">Student Club Display</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">Display Information</label>
        <div class="col-sm-10">
          <textarea name="content" class="form-control ckeditor" id="contentInput" >{{$display->content}}</textarea>
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
  <h3> Your Project QR Code </h3>
</div>

<div class="">
    {{ QrCode::format('svg')->size(399)->color(40,40,40)->generate(Request::url()); }}
</div>
@stop
