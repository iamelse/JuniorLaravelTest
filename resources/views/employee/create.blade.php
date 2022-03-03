@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">{{ __('New Employee') }}</div>
                    <form action="/employee/store" method="POST">
                        @csrf
                        <div class="m-4">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="Employee first name">
                                @error('first_name')
                                    <div class="text text-danger fs-6 mx-2 mt-2">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="Employee last name">
                                @error('last_name')
                                    <div class="text text-danger fs-6 mx-2 mt-2">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Company Name</label>
                                <select class="form-select" name="company_id">
                                    <option selected>Select company name</option>
                                    @foreach ($employees as $employee)
                                        <option value="{{ $employee->has_one_company->id }}">{{ $employee->has_one_company->name }}</option>
                                    @endforeach
                                </select>
                                @error('company_id')
                                    <div class="text text-danger fs-6 mx-2 mt-2">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@email.com">
                                @error('email')
                                    <div class="text text-danger fs-6 mx-2 mt-2">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone number">
                                @error('phone')
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
