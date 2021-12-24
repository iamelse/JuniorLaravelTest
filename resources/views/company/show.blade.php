@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">{{ __('Show Company') }}</div>
                    <div class="m-4 text-center">
                        <div class="mb-2 d-flex justify-content-center">
                            <img src="{{ asset('storage/' . $company->image) }}" class="img-fluid img-preview mb-2 d-block rounded-circle img-thumbnail" width="200">
                        </div>
                        <div class="mb-2">
                            <div class="text">{{ $company->name }}</div>
                        </div>
                        <div class="mb-2">
                            <div class="text">{{ $company->email }}</div>
                        </div>
                        <div class="mb-2">
                            <div class="text">{{ $company->website }}</div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
