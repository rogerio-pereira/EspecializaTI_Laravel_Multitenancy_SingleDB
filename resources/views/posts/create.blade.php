@extends('layouts.app')

@section('content')
    <h1>New Posts</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            <ul>
                {{ session('success') }}
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="post">
        @csrf

        <div class="form-group">
            <input type="text" name="title" id="title" class='form-control' placeholder="Title">
        </div>

        <div class="form-group">
            <textarea name="body" id="body" class='form-control' cols="30" rows="5" placeholder="Body"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class='btn btn-success form-control'>Send</button>
        </div>
    </form>
@endsection
