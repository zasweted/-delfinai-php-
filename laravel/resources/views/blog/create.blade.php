@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h2>New Post</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('store')}}" method="post">
                        <div class="mb-3">
                            <label for="titleText" class="form-label">Title</label>
                            <input type="text" class="form-control" id="titleText" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="postText" class="form-label">Post</label>
                            <input type="text" class="form-control" id="postText">
                        </div>
                        @csrf
                        <button type="submit" class="btn btn-warning">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
