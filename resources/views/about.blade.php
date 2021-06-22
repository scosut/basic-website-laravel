@extends('layouts.app')

@section('title')
  About Us
@endsection

@section('content')
<h1>About</h1>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio magnam ipsam est eum provident nostrum ullam nesciunt labore, delectus saepe consequatur omnis ducimus! In velit soluta vitae hic quaerat assumenda!</p>
@endsection

@section('sidebar')
  @parent
  <p>This is appended to the sidebar from About.</p>
@endsection