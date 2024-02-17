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
                    <th class="d-none d-xl-table-cell">Created Date</th>
                    <th class="d-none d-md-table-cell">Content</th>
                    <th class="d-xl-table-cell">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{$article->title}}</td>
                        <td class="d-none d-xl-table-cell">{{$article->content}}</td>
                        <td class="d-none d-xl-table-cell">{{$article->category->title}}</td>
                        <td>
                            <div class="flex-row">
                                <a class="badge btn bg-info" href="{{route('articles.show' , $article->id)}}">View</a>
                                <a class="badge btn bg-success" href="{{route('articles.edit' , $article->id)}}">Update</a>
                                <form style="display: inline-block" method="post" action="{{route('articles.destroy',$article->id)}}">
                                    @csrf
                                    @method('delete')
                                    <button class="badge btn bg-danger" onclick="confirmDelete(this.form)">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

<script>
    function confirmDelete(form) {
        if (confirm("Are you sure you want to delete?")) {
            // User clicked OK, proceed with delete action
            form.submit();
        } else {
            // User clicked Cancel, do nothing
            return false;
        }
    }
</script>
