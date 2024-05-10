@extends('layout')
@section('title', 'NEW Article')
@section('content')
    <h2 class="text text-center py-2"> เขียนบทความใหม่</h2>
    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="title"> ชื่อบทความ !</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="title"> เนื้อหาบทความ</label>
            <textarea name="content" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <input type="submit" value="บันทึก" class="btn btn-primary my-3">
        <a href="/blog" class="btn btn-success">ALL Article</a>
    </form>


@endsection
