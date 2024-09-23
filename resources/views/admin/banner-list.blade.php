@extends('admin.layouts.app')
@section('content')
    <style>
        .notify {
            z-index: 9999 !important;
        }
    </style>
    {{-- for category listing  --}}
    <div class="container bg-secondary p-4">
        <a href="/admin/banner" class="bg-danger btn btn-sm m-1">Add Banner</a>
        <div class="card-header bg-primary">
            <h3 class="text-center">Banner List</h3>
        </div>
        <div class="card">
            <div class="card-header">
                {{-- <a href="/admin/banner" class="bg-danger btn btn-sm m-1">Add Banner</a> --}}
                <div class="card-tools">
                    <form action="{{ route('admin.banner-list') }}" method="get">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="search" value="{{ request('search') }}"
                                class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- <a href="/admin/banner" class="bg-danger btn btn-sm m-1">Add Banner</a> --}}
            <div class="card text-dark">
                {{-- <div class="card-header bg-primary">
                <h3 class="text-center">Banner List</h3>
            </div> --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $key => $banner)
                            <tr>
                                <th>{{ ++$key }}</th>
                                {{-- <th>{{ $banner->id }}</th> --}}
                                <td><img width="40" src="{{ asset($banner->image) }}" alt="Banner Image"></td>
                                <td>{{ $banner->title }}</td>
                                <td>{{ $banner->description }}</td>
                                @if ($banner->status == 1)
                                    <td>
                                        <a onclick="getData({{ $banner->id }});" href="#"
                                            class="text-success">Active</a>

                                    </td>
                                @endif
                                @if ($banner->status == 0)
                                    <td>
                                        <a onclick="getData({{ $banner->id }});"href="#" class="text-danger">Deactive</a>

                                    </td>
                                @endif


                                <td>
                                    <a href="{{ url('admin/banner-edit', $banner->id) }}"
                                        class="bg-success btn btn-sm">Edit</a>
                                    <form action="{{ route('admin.delete', $banner->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-danger btn btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            {{ $banners->links() }}
        </div>
        <script>
            function getData(id) {
                if (confirm('Are you sure to status update')) {
                    $.ajax({
                        url: '{{ route('admin.status_active_deactive') }}',
                        type: 'get',
                        data: {
                            id: id
                        },
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function(data) {
                            window.location.href = '{{ route('admin.banner-list') }}';

                        }
                    });

                }


            }
        </script>
    @endsection
