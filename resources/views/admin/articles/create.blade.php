@extends('layout.admin.app')
@section('title') Create Article @endsection

@section('content')
    <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Create Article</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="article-title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="article-title" name="title" value="{{ old('title') }}" placeholder="Enter title">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="article-content" class="form-label">Content</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" id="article-content" name="content" rows="5" placeholder="Enter content">{{ old('content') }}</textarea>
                            @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="article-author" class="form-label">Author</label>
                            <select class="form-select @error('author') is-invalid @enderror" id="article-author" name="author_id">
                                <option value="" selected disabled>Select author</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            @error('article_author')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="article-category" class="form-label">Category</label>
                            <select class="form-select @error('category') is-invalid @enderror" id="article-category" name="category">
                                <option value="" selected disabled>Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                            @error('article_category')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="article_image" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="article_image" name="image">
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

@endsection
