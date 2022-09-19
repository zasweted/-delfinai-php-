@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Truck</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('t_update', $truck)}}" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="titleText" class="form-label">Maker</label>
                            <input value="{{old('maker', $truck->maker)}}" name="maker" type="text" class="form-control" id="titleText">
                        </div>
                        <div class="mb-3">
                            <label for="titleText" class="form-label">Plate</label>
                            <input value="{{old('plate', $truck->plate)}}" name="plate" type="text" class="form-control" id="titleText">
                        </div>
                        <div class="mb-3">
                            <label for="titleText" class="form-label">Make Year</label>
                            <input value="{{old('make_year', $truck->make_year)}}" name="make_year" type="text" class="form-control" id="titleText">
                        </div>
                        <div class="img mb-2">
                        @if($truck->photo)
                        <img class="w-50" src="{{ $truck->photo }}" alt="img">
                        
                        <input class="form-check-input" type="checkbox" value="" id="del-photo" name="delete_photo">
                        <label class="form-label" for="del-photo">Delete photo</label>
                        @endif
                    </div>
                        <div class="mb-3">
                            <label for="titleText" class="form-label">Upload Photo</label>
                            <input value="" name="photo" type="file" class="form-control" id="titleText">
                        </div>
                        <div class="mb-3">
                            <label for="titleText" class="form-label">Mechanic Notes</label>
                            <textarea rows="8" name="mechanic_notices" type="text" class="form-control">{{old('mechanic_notices', $truck->mechanic_notices)}}</textarea>
                        </div>
                        <select name="mechanic_id" class="form-select mb-3">
                            <option value="0">Choose mechanic</option>
                            @foreach($mechanics as $mechanic)
                                <option value="{{ $mechanic->id }}"@if($mechanic->id == old('mechanic_id', $truck->mechanic_id)) selected @endif> {{ $mechanic->name }} {{ $mechanic->surname }}</option>
                            @endforeach
                        </select>
                        @csrf
                        @method('put')
                        <button type="submit" class="btn btn-warning">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
