@extends('layouts.app')

@section('content')
<div class="container --content">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Trucks</h2>

                    <form action="{{ route('t_index') }}" method="get">
                        <div class="container">
                            <div class="row">
                                <div class="col-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6">
                                                <select name="mech" class=" form-select mt-1">
                                                    <option value="0">All</option>
                                                    @foreach($mechanics as $mechanic)
                                                    <option value="{{ $mechanic->id }}" @if($mech==$mechanic->id) selected @endif>{{ $mechanic->name }} {{ $mechanic->surname }}</option>

                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="col-6">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="container mb-4">
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="input-group">
                                                    <input type="text" name="s" class="form-control" value="{{ $s }}">
                                                    <button class="btn input-group-text btn-secondary" type="submit">Search</button>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <a href="{{ route('t_index') }}" class="btn btn-danger">Reset</a>
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
                                    <h4><span>Year: </span>{{$truck->make_year}}</h4>
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
            <div class="me-4 mx-4">
                {{ $trucks->links() }}
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
