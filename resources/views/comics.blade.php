@extends('layouts.app')

@section('comics-list')
    <div class="container list-container">
        <h5 class="list-title">COMICS LIST</h5>

        <div class="row row-cols-4">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card ms-card">
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <div class="card-body">
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection