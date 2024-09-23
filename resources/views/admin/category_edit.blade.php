@extends('admin.layouts.app')
@section('content')
    <div class="container p-4 bg-dark">
        <a href="/admin/category" class="bg-danger btn btn-sm m-1">Category</a>
        <a href="/admin/category-list" class="bg-danger btn btn-sm">List</a>
        <div class="card bg-primary text-center mb-0  w-75" style="margin-left: 7rem;">
            <h3>Edit Category</h3>
        </div>
        <div class="card p-4 pt-0 w-75 text-dark" style="margin-left: 7rem">
            <form action="{{ route('admin.update', $category->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image">
                    @if($category->image)
                        <img src="{{ asset('category_image/' . $category->image) }}"  width="50" height="30"alt="Category Image">
                    @endif
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $category->name) }}" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="short_desc">Description</label>
                    <input type="text" class="form-control" name="short_desc" value="{{ old('short_desc', $category->short_desc) }}" placeholder="Enter description">
                </div>
                <div class="form-group">
                    <label for="created_by">Created By</label>
                    <input type="number" class="form-control" name="created_by" value="{{ Auth::guard('admin')->user()->id }}">
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
    <!-- AdminLTE App -->
    <script src="{{ url('dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('dist/js/demo.js') }}"></script>
@endsection
