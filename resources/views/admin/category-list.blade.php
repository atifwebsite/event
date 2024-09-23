@extends('admin.layouts.app')
@section('content')
<?php
use Carbon\Carbon;
?>
<style>
  .row{
   display: d-flex;
   justify-content: center;
  }
</style>
    <div class="row m-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="/admin/category" class="bg-primary btn btn-sm m-1">Add category</a>

                    <div class="card-tools">
                        <form action="{{route('admin.category-list')}}" method="get">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search"  value="{{ request('search') }}" class="form-control float-right"
                                 placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Category Name</th>
                                <th>Description</th>
                                <th>Created By</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($categories as $key => $category)

                            <tr>
                                <th>{{ ++$key }}</th>
                                <td><img width="40px" height="40px" src="{{ asset('category_image/'. $category->image) }}"
                                        alt="Category Image"></td> <!-- Adjusted image height -->
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->short_desc }}</td>

                                <td>{{ $category->created_by }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>
                                    <a href="{{ url('admin/category_edit/' . $category->id) }}"
                                        class="btn btn-success btn-sm">Edit</a>

                                    {{-- Delete form --}}
                                    <form action="{{ route('category.delete', $category->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this category?');">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
