@extends('layout.admin.app')
@section('title') Articles @endsection

@section('content')

    <div class="d-flex">
        <div class="card flex-fill">
            <div class="card-header">

                <h5 class="card-title mb-0">Articles</h5>
            </div>
            <table class="table table-hover my-0">
                <thead>
                <tr>
                    <th>Name</th>
                    <th class="d-none d-md-table-cell">Author</th>
                    <th class="d-none d-xl-table-cell">Created Date</th>
                    <th class="d-none d-md-table-cell">Content</th>
                    <th class="d-xl-table-cell">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Project Apollo</td>
                    <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                    <td class="d-none d-xl-table-cell">01/01/2023</td>
                    <td class="d-none d-xl-table-cell">31/06/2023</td>
                    <td>
                        <div>
                            <a class="badge btn bg-info" href="">View</a>
                            <a class="badge btn bg-success" href="">Update</a>
                            <a class="badge btn bg-danger" href="">Delete</a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
