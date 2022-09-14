@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h2>Change Mechanic</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('m_edit', $mechanic)}}" method="post">
                        <div class="mb-3">
                            <label for="titleText" class="form-label">Name</label>
                            <input value="{{old('name', $mechanic->name)}}" name="name" type="text" class="form-control" id="titleText">
                        </div>
                        <div class="mb-3">
                            <label for="titleText" class="form-label">Surname</label>
                            <input value="{{old('surname', $mechanic->surname)}}" name="surname" type="text" class="form-control" id="titleText">
                        </div>
                        @csrf
                        @method('put')
                        <button type="submit" class="btn btn-warning">Change</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection