@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h2>Mechanic</h2>
                </div>
                <div class="card-body">
                    <div class="mechanic">
                        <h5>{{$mechanic->name}}</h5>
                        <h5>{{$mechanic->surname}}</h5>
                    </div>
                    <ul class="list-group">
                        @forelse($mechanic->getTrucks as $truck)
                        <li class="list-group-item">
                            <div class="trucks-list">
                                <div class="content">
                                    <h2><span>Plate: </span>{{$truck->plate}}</h2>
                                    <h4><span>Maker: </span>{{$truck->maker}}</h4>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">No Trucks Assigned</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
