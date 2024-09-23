@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <form action="{{Route('admin/social-media-links')}}" method="POST">
        @csrf
        <div class="card bg-secondary m-2">
            <legend class="bg-primary" style="text-align: center">Add-Social-Links</legend>
            <div class="container">
                <div class="row m-2">
                    <div class="col">
                        <input type="text" name="facebook" class="form-control" placeholder="Facebook">
                    </div>
                    <div class="col">
                        <input type="text" name="instagram" class="form-control" placeholder="Instagram">
                    </div>
                    <div class="col">
                        <input type="text" name="twitter" class="form-control" placeholder="Twitter">
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
        </div>
    </form>
    <!-- jQuery -->
    <script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- jquery-validation -->
    <script src="{{ url('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ url('plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <!-- adminLTE App -->
    <script src="{{ url('dist/js/adminlte.min.js') }}"></script>
    <!-- adminLTE for demo purposes -->
    <script src="{{ url('dist/js/demo.js') }}"></script>
    <!-- Page specific script -->
    </body>
@endsection
