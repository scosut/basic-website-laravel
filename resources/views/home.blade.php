@extends('layouts.app')

@section('title')
  Home
@endsection

@section('content')
<h1>Home</h1>

<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab velit repellendus, aliquam, amet atque expedita ea esse suscipit iure hic voluptate, quis cum porro consequatur accusamus nostrum quo. Magnam, eligendi.</p>
@endsection

@section('sidebar')
  @parent
  <p>This is appended to the sidebar from Home.</p>
@endsection