@extends('layouts.app')
@section('content')

@auth
    <div class="alert alert-success alert-dismissible fade show container" role="alert">
        <strong>You are logged in!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endauth

<a href="{{route('admin.posts.create')}}"><button>crea nuovo post</button></a>

@endsection