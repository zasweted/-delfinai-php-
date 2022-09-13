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
                    <form action="{{route('edit', $blog)}}" method="post">
                        <div class="mb-3">
                            <label for="titleText" class="form-label">Title</label>
                            <input value="{{old('title', $blog->title)}}" name="title" type="text" class="form-control" id="titleText">
                        </div>
                        <div class="mb-3">
                            <label for="postText" class="form-label">Post</label>
                            <textarea rows="5" name="post" type="text" class="form-control">{{old('post', $blog->post)}}</textarea>
                        </div>
                        @csrf
                        @method('put')
                        <button type="submit" class="btn btn-warning">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection