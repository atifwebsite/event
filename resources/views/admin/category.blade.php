@extends('admin.layouts.app')
@section('content')
    <div class="container p-4 bg-dark">
        <div class="card bg-primary mb-0 text-center w-75" style="margin-left: 7rem;">
            <h3>Add Category</h3>
        </div>
        <div class="card p-3 w-75 text-dark" style="margin-left: 7rem;">
            <form action="{{ url('/admin/category/list') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="short_desc">Description</label>
                    <input type="text" class="form-control" name="short_desc" id="short_desc" placeholder="Enter description">
                </div>

                <input type="hidden" name="created_by" value="{{ Auth::guard('admin')->user()->id }}">

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- jquery-validation -->
    <script src="{{ url('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ url('plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('dist/js/demo.js') }}"></script>
@endsection
