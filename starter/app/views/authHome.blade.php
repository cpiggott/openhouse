@extends('master')

@section('title')
@parent
:: Create Account
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