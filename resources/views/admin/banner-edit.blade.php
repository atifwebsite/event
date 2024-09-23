@extends('admin.layouts.app')
@section('content')
    <div class="container p-4 bg-dark">
        <a href="/admin/banner" class="bg-danger btn btn-sm m-1">Add Banner</a>
        <a href="/admin/banner-list" class="bg-danger btn btn-sm">Banner List</a>
        <div class="card bg-primary text-center mb-0 w-75" style="margin-left: 7rem;">
            <h3>Edit Banner</h3>
        </div>
        <div class="card p-4 pt-0 w-75 text-dark" style="margin-left: 7rem;">
            <form action="{{ route('admin.banner.update', $banner->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image">
                    <img src="{{ asset('/' . $banner->image) }}" width="50" alt="Banner Image">
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title', $banner->title) }}" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" placeholder="Enter description">{{ old('description', $banner->description) }}</textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
            </form>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ url('plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <!-- adminLTE App -->
    <script src="{{ url('dist/js/adminlte.min.js') }}"></script>
    <!-- adminLTE for demo purposes -->
    <script src="{{ url('dist/js/demo.js') }}"></script>
@endsection
