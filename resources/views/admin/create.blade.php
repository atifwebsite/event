@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <form>
        <div class="card m-2">
            <legend class="bg-secondary  p-1" style="text-align: center"><h3>Create Event</h3></legend>
            <div class="container bg- p-3">
                <div class="row ">
                    <div class="col">
                        <label for="exampleInputEmail1">Category</label>
                        {{-- <input type="text" class="form-control" id="banner" name="banner" placeholder=""> --}}
                        <select class="custom-select" required>
                            <option value="">Category</option>
                            <option value="1">School Event</option>
                            <option value="2">Sport Event</option>
                            <option value="3">Olympic Event</option>
                        </select>

                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                    </div>
                    <div class="col">
                        <label for="banner">Banner</label>
                        <input type="file" class="form-control" id="banner" name="banner">
                    </div>
                </div>
                <div class="row  ">
                    <div class="col">
                        <label for="exampleInputPassword1">Title</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="row  ">
                    <div class="col">
                        <label for="exampleInputPassword1">Place</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="col">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                </div>
                <div class="row ">
                    <div class="col">
                        <label for="time">Starting Time</label>
                        <input type="time" class="form-control" id="time">
                    </div>
                    <div class="col">
                        <label for="time">Ending Time</label>
                        <input type="time" class="form-control" id="time">
                    </div>
                </div>
            </div>
            <div class="text-center m-2">
              <button type="button" class="btn btn-success">Submit</button>
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
