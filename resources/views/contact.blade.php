@extends('layouts.app')

@section('title')
  Contact Us
@endsection

@section('content')
  <h1>Contact</h1>
  {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group{{$errors->has('name') ? ' has-error has-feedback' : ''}}">
      {{Form::label('name', 'Name')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
      @if($errors->has('name'))
        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
        <div class="help-block" role="alert">
          {{ $errors->first('name') }}
        </div>
      @endif
    </div>
    <div class="form-group{{$errors->has('email') ? ' has-error has-feedback' : ''}}">
      {{Form::label('email', 'Email')}}
      {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email'])}}
      @if($errors->has('email'))
        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
        <div class="help-block" role="alert">
          {{ $errors->first('email') }}
        </div>
      @endif
    </div>
    <div class="form-group{{$errors->has('message') ? ' has-error has-feedback' : ''}}">
      {{Form::label('message', 'Message')}}
      {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter message'])}}
      @if($errors->has('message'))
        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
        <div class="help-block" role="alert">
          {{ $errors->first('message') }}
        </div>
      @endif
    </div>
    <div class="form-group">
      <input type="hidden" id="firstError" name="firstError" value="{{session('firstError')}}" />
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>    
  {!! Form::close() !!}  
@endsection

@section('sidebar')
  @parent
  <p>This is appended to the sidebar from Contact.</p>
@endsection