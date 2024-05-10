@extends('layout')
@section('title', 'Blog')
@section('content')

    <H1>Blog</H1>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">ชื่อบทความ</th>
                <th scope="col">เนื้อหา</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $item)
                <tr>
                    <td>{{$item["title"]}}</td> 
                    <td>{{$item["content"]}}</td>
                    <td>
                        @if ($item["status"]==true)
                        <a href="#" class="btn btn-success"> Published </a>
                        
                            
                        @else
                        <a href="#" class="btn btn-warning">Draft</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/">Home</a>
    <a href="/about">about me</a>

@endsection
