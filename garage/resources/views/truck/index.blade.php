@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Trucks</h2>

                    <form action="{{ route('m_index') }}" method="get">
                        <div class="container">
                            <div class="row">
                                <div class="col-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6">
                                                <select name="mech" class=" form-select mt-1" id="">
                                                    @foreach($mechanics as $mechanic)
                                                    <option value="{{ $mechanic->id }}">{{ $mechanic->name }} {{ $mechanic->surname }}</option>

                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="col-6">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-3">
                                                <select name="per_page" class="form-select mt-1" id=""></select>
                                            </div>
                                            <div class="col-6">
                                                <a href="{{ route('t_index') }}" class="btn btn-secondary m-1">Reset</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($trucks as $truck)
                        <li class="list-group-item">
                            <div class="trucks-list">
                                <div class="content">
                                    <h2><span>Plate: </span>{{$truck->plate}}</h2>
                                    <h4><span>Maker: </span>{{$truck->maker}}</h4>
                                    <h5>
                                        <span>Mechanic: </span>
                                        <a href="{{ route('m_show', $truck->getMechanic->id) }}">{{$truck->getMechanic->name}} {{$truck->getMechanic->surname}}</a>
                                    </h5>
                                    @if($truck->photo)
                                    <h5>Click on &nbsp;>><a style="color:crimson" href="{{ $truck->photo }}" target="_BLANK"> Photo </a>
                                        <<&nbsp; to see Photo</h5>
                                            @endif
                                </div>
                                <div class="buttons">
                                    <a href="{{route('t_show', $truck)}}" class="btn btn-info">Show</a>
                                    <a href="{{route('t_edit', $truck)}}" class="btn btn-success">Edit</a>
                                    <form action="{{route('t_delete', $truck)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">No Truck Found</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
