@extends('layouts/app')

@section('title', 'Home')
@section('content')
<h2>Home page</h2>
<ul>
@foreach($tasks as $task)
<li><?= $task; ?></li>
@endforeach
</ul>
@endsection

