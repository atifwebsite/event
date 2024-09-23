@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <form action="{{ route('admin/master-setting') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card m-4">
            <legend class="bg-secondary  p-1" style="text-align: center">
                <h3>Master Setting</h3>
            </legend>
            <div class="container bg- p-2">
                <div class="row m-3">
                    <div class="col">
                        <label for="logo">Logo</label>
                        <input type="file" class="form-control @error('logo') is-invalid @enderror " name="logo"
                            id="logo">
                        <p class="text-denger">old image
                            <span><img src="{{ asset('logo/' . $details->logo) }}", width="20rem" alt=""></span>
                        </p>
                        @error('logo')
                            <p class="invalid-feedback"> {{ $message }} </p>
                        @enderror
                    </div>
                    <input type="hidden" name="id" value="{{ $details ? $details->id : '' }}">
                    <div class="col">
                        <label for="fav_icon">Fav Icon</label>
                        <input type="file" class="form-control @error('fav_icon') is-invalid @enderror" name="fav_icon"
                            id="fav_icon">
                        <p class="text-denger">old fav_icon
                            <span><img src="{{ asset('fav_icon/' . $details->fav_icon) }}", width="20rem"
                                    alt=""></span>
                        </p>
                        @error('fav_icon')
                            <p class="invalid-feedback"> {{ $message }} </p>
                        @enderror
                    </div>
                </div>
                <div class="row m-3 ">
                    <div class="col">
                        <label for="company_title">Company Title</label>
                        <input type="text" class="form-control @error('company_title') is-invalid @enderror"
                            name="company_title" id="company_title" value="{{ $details ? $details->company_title : '' }}">
                        @error('company_title')
                            <p class="invalid-feedback"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="phone">phone</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                            onkeypress="return isNumberKey(event)" maxlength="10"
                            value="{{ $details ? $details->phone : '' }}">
                        @error('phone')
                            <p class="invalid-feedback"> {{ $message }} </p>
                        @enderror
                    </div>
                </div>
                <div class="row  m-3">
                    <div class="col">
                        <label for="email">email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ $details ? $details->email : '' }}" id="email">
                        @error('email')
                            <p class="invalid-feedback"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                            id="exampleInputPassword1" value="{{ $details ? $details->address : '' }}">
                        @error('address')
                            <p class="invalid-feedback"> {{ $message }} </p>
                        @enderror
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col">
                        <label for="description">Descriptoin</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror"
                            name="description" id="description" value="{{ $details ? $details->description : '' }}">
                        @error('description')
                            <p class="invalid-feedback"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook"
                            id="facebook" value="{{ $details ? $details->facebook : '' }}">
                        @error('facebook')
                            <p class="invalid-feedback"> {{ $message }} </p>
                        @enderror
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col">
                        <label for="twitter">Twitter</label>
                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter"
                            id="twitter" value="{{ $details ? $details->twitter : '' }}">
                        @error('twitter')
                            <p class="invalid-feedback"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="instagram">Instagram</label>
                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram"
                            id="instagram" value="{{ $details ? $details->instagram : '' }}">
                        @error('instagram')
                            <p class="invalid-feedback"> {{ $message }} </p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="text-center m-2">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>

    <script>
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
    </body>
@endsection
