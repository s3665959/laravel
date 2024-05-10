@extends('layout')
@section('title', 'about')
@section('content')

    <H1>About</H1>
    <br>
    <p>Dev : {{ $name }}</p>
    <p>Project Date : {{ $date }}</p>
    <p>Country: {{ $country }}</p>
    <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate porro dicta voluptates rem quidem dolores esse,
        distinctio architecto quo sit culpa, cum ut repellat corporis impedit, debitis qui eligendi commodi.</p>

    <a href="/">Home</a>
    <a href="/about">about me</a>

@endsection
