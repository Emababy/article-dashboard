@extends('layout.admin.app')
@section('title') Create Article @endsection

@section('content')

    <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Create Article</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="article-title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('article-title') is-invalid @enderror" id="article-title" name="article-title" value="{{ old('article-title') }}" placeholder="Enter title">
                            @error('article-title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="article-content" class="form-label">Content</label>
                            <textarea class="form-control @error('article-content') is-invalid @enderror" id="article-content" name="article-content" rows="5" placeholder="Enter content">{{ old('article-content') }}</textarea>
                            @error('article-content')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="article-author" class="form-label">Author</label>
                            <select class="form-select @error('article-author') is-invalid @enderror" id="article-author" name="article-author">
                                <option value="" selected disabled>Select author</option>
                                <option value="1">Author One</option>
                                <option value="2">Author Two</option>
                                <option value="3">Author Three</option>
                            </select>
                            @error('article-author')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="article-category" class="form-label">Category</label>
                            <select class="form-select @error('article-category') is-invalid @enderror" id="article-category" name="article-category">
                                <option value="" selected disabled>Select Category</option>
                                <option value="1">Category One</option>
                                <option value="2">Category Two</option>
                                <option value="3">Category Three</option>
                            </select>
                            @error('article-category')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="article-image" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="article-image" name="article-image">
                            @error('article-image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

@endsection
