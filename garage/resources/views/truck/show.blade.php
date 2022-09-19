@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h2>Truck</h2>
                </div>
                <div class="card-body">
                    <div class="truck-show">
                        <div class="line"><small>Plate: </small></div>
                        <h5>{{$truck->plate}}</h5>
                    </div>
                    <div class="line"><small>Maker: </small>
                        <h5>{{$truck->maker}}</h5>
                    </div>
                    <div class="line"><small>Mechanic: </small>
                        <h5>{{$truck->getMechanic->name}} {{$truck->getMechanic->surname}}</h5>
                    </div>
                    <p>
                        {{ $truck->mechanic_notices }}
                    </p>
                    <div class="img">
                        @if($truck->photo)
                        <img class="w-100" src="{{ $truck->photo }}" alt="img">
                        
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
