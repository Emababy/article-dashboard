@extends('layout.admin.app')
@section('title') Profile @endsection

@section('content')


    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Profile Details</h5>
                </div>
                <div class="card-body text-center">
                    <img src="{{asset('dashboard/img/avatars/avatar-4.jpg')}}" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128" />
                    <h5 class="card-title mb-0">Christina Mason</h5>
                    <div class="text-muted mb-2">Lead Developer</div>

                    <div>
                        <a class="btn btn-primary btn-sm" href="#">Follow</a>
                        <a class="btn btn-primary btn-sm" href="#"><span data-feather="message-square"></span> Message</a>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <h5 class="h6 card-title">Skills</h5>
                    <a href="#" class="badge bg-primary me-1 my-1">HTML</a>
                    <a href="#" class="badge bg-primary me-1 my-1">JavaScript</a>
                    <a href="#" class="badge bg-primary me-1 my-1">Sass</a>
                    <a href="#" class="badge bg-primary me-1 my-1">Angular</a>
                    <a href="#" class="badge bg-primary me-1 my-1">Vue</a>
                    <a href="#" class="badge bg-primary me-1 my-1">React</a>
                    <a href="#" class="badge bg-primary me-1 my-1">Redux</a>
                    <a href="#" class="badge bg-primary me-1 my-1">UI</a>
                    <a href="#" class="badge bg-primary me-1 my-1">UX</a>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <h5 class="h6 card-title">About</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <a href="#">San Francisco, SA</a></li>

                        <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Works at <a href="#">GitHub</a></li>
                        <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> From <a href="#">Boston</a></li>
                    </ul>
                </div>
                <hr class="my-0" />
            </div>
        </div>

        <div class="col-md-8 col-xl-9">
            <div class="card">

                <div class="card-header">
                    <h5 class="card-title mb-0">Articles</h5>
                </div>

                <div class="card-body h-100">

                    <div class="d-flex align-items-start">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('dashboard/img/photos/unsplash-1.jpg')}}" alt="Unsplash">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Card with image and links</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid">
                        <a href="#" class="btn btn-primary">Load more</a>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
