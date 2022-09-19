@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h2>New Truck</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('t_store')}}" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="titleText" class="form-label">Maker</label>
                            <input value="{{old('maker')}}" name="maker" type="text" class="form-control" id="titleText">
                        </div>
                        <div class="mb-3">
                            <label for="titleText" class="form-label">Plate</label>
                            <input value="{{old('plate')}}" name="plate" type="text" class="form-control" id="titleText">
                        </div>
                        <div class="mb-3">
                            <label for="titleText" class="form-label">Make Year</label>
                            <input value="{{old('make_year')}}" name="make_year" type="text" class="form-control" id="titleText">
                        </div>
                        <div class="mb-3">
                            <label for="titleText" class="form-label">Upload Photo</label>
                            <input value="" name="photo" type="file" class="form-control" id="titleText">
                        </div>
                        <div class="mb-3">
                            <label for="titleText" class="form-label">Mechanic Notes</label>
                            <textarea rows="5" name="mechanic_notices" type="text" class="form-control">{{old('mechanic_notices')}}</textarea>
                        </div>
                        <select name="mechanic_id" class="form-select mb-3">
                            <option value="0">Choose mechanic</option>
                            @foreach($mechanics as $mechanic)
                                <option value="{{ $mechanic->id }}"@if($mechanic->id == old('mechanic_id')) selected @endif > {{ $mechanic->name }} {{ $mechanic->surname }}</option>
                            @endforeach
                        </select>
                        @csrf
                        <button type="submit" class="btn btn-warning">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
