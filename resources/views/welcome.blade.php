@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            @forelse($comics as $comic)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>{{$comic->title}}</h4>
                            <p>{{$comic->series}}</p>
                            <p>{{$comic->price}}</p>
                            <p>{{$comic->type}}</p>
                            <p>{{$comic->sale_date}}</p>
                            <p>{{$comic->description}}</p>
                            <p>{{$comic->artists}}</p>
                            <p>{{$comic->writers}}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="12">
                    <p>Sorry no comics found</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
