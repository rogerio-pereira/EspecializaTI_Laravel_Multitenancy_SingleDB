@extends('layouts.app')

@section('content')
    <h1>Cadastrar Posts</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <form action='{{route('posts.store')}}' method='post'>
        {{ csrf_field() }}

        <div class="form-group">
            <input class='form-control' type='text' name='title' id='title' placeholder='Title'>
        </div>
    
        <div class="form-group">
            <textarea class='form-control' name="body" id="body" cols="30" rows="5" placeholder="Body"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class='btn btn-success'>Save</button>
        </div>
    </form>
@endsection