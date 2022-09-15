@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h2>Mechanics</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($mechanics as $mechanic)
                        <li class="list-group-item">
                            <div class="mechanics-list">
                                <div class="content">
                                    <h2>{{$mechanic->name}}</h2>
                                    <h2>{{$mechanic->surname}}</h2>
                                    <span>[{{ $mechanic->getTrucks()->count() }}]</span>
                                </div>
                                <div class="buttons">
                                    <a href="{{route('m_show', $mechanic)}}" class="btn btn-info">Show</a>
                                    <a href="{{route('m_edit', $mechanic)}}" class="btn btn-success">Edit</a>
                                    <form action="{{route('m_delete', $mechanic)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">No Mechanics</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
