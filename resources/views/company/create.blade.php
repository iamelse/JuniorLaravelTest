@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">{{ __('New Company') }}</div>
                    <form action="/company/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="m-4">
                            <div class="mb-3">
                                <label class="form-label">Company Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Tech. Inc">
                                @error('name')
                                    <div class="text text-danger fs-6 mx-2 mt-2">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Company Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="companyname@example.com">
                                @error('email')
                                    <div class="text text-danger fs-6 mx-2 mt-2">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Company Logo</label>
                                <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" id="formFile">
                                @error('image')
                                    <div class="text text-danger fs-6 mx-2 mt-2">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Company Website</label>
                                <input type="text" name="website" class="form-control @error('website') is-invalid @enderror" placeholder="www.companyname.com">
                                @error('website')
                                    <div class="text text-danger fs-6 mx-2 mt-2">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="text-end mx-4">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
