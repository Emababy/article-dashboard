@extends('layout.admin.app')
@section('title') Create Article @endsection

@section('content')

    <form action="" method="">
        @csrf
        <div class="card-header">
            <h5 class="card-title mb-0">Input</h5>
        </div>
        <div class="card-body">
            <label>
                <input type="text" class="form-control" placeholder="Input">
            </label>
        </div>
    </form>


@endsection
