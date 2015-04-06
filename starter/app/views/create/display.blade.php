@extends('master')

@section('title')
@parent
:: Create Display
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

    {{ Form::open(array('url' => 'display/create', 'class' => 'form-horizontal')) }}
      <div class="form-group">
        <label for="inputTeamName"  class="col-sm-2 control-label">Team Name</label>
        <div class="col-sm-10">
          <input type="text" name="teamName" class="form-control" id="inputTeamName" placeholder="Team Name" {{ (Input::old('teamName')) ? ' value="' . e(Input::old('teamName')) . '"' : '' }}>
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
          <input type="text" name="projectName"  class="form-control" id="projectName" placeholder="Project Name">
        </div>
      </div>
      <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">Team Member</label>
        <div class="col-sm-10">
          <input type="text" name="userName"  class="form-control" id="userName" placeholder="Your Name">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2 control-label"></div>
        <p style="color: red">&nbsp;&nbsp;&nbsp;&nbsp;Make sure to choose correctly, this cannot be changed!</p>
      </div>
      <div class="form-group">
        <label for="inputType" class="col-sm-2 control-label">Display Type</label>
        <div class="col-sm-10">
          <select name="displayType" id="displayType" class="form-control">
            <option value="0">Limited Display</option>
            <option value="1">Open Class Display</option>
            <option value="2">Freshman/Sophomore Display</option>
            <option value="3">Graduate Display</option>
            <option value="4">Student Club Display</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2 control-label"></div>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;Please make sure that images placed in editor below are no bigger than 300px wide.</p>
      </div>
      <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">Display Information</label>
        <div class="col-sm-10">
          <textarea name="content" class="form-control ckeditor" id="contentInput">Insert Snippet here</textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2 control-label"></div>
        <h3 style="color: red">&nbsp;&nbsp;&nbsp;&nbsp;WARNING! THIS CANNOT BE EDITED ONCE COMPLETE! YOU WILL HAVE TO START OVER</h3>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
          {{ Form::token() }}
        </div>
      </div>
    </form>

{{ Form::close() }}
@stop
