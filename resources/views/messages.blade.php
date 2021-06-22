@extends('layouts.app')

@section('title')
  Messages
@endsection

@section('content')
<h1>Messages</h1>

  @if(count($messages) > 0)
    @foreach($messages as $message)
      <ul class="list-group">
        <li class="list-group-item">
          <strong>Name:</strong> {{$message->name}}
        </li>
        <li class="list-group-item">
          <strong>Email:</strong> {{$message->email}}
        </li>
        <li class="list-group-item">
          <strong>Text:</strong> {{$message->message}}
        </li>
      </ul>
    @endforeach
  @endif
@endsection

@section('sidebar')
  @parent
  <p>This is appended to the sidebar from Home.</p>
@endsection