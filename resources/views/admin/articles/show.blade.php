@extends('layout.admin.app')
@section('title')  @endsection

@section('content')

    <div class="card-body h-100">
        <div class="d-flex justify-content-center align-items-start">
            <div class="card">
                <img class="card-img-top" src="{{asset('dashboard/img/photos/unsplash-1.jpg')}}" alt="Unsplash">
                <div class="card-header">
                    <h5 class="card-title mb-0">{{$article->title}}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{$article->content}}</p>
                    <p class="card-text">{{$article->category->title}}</p>
                </div>
            </div>
        </div>
    </div>




@endsection
