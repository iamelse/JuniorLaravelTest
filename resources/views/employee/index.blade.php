@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Employee List') }}</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr class="text-center">
                              <th scope="col">No.</th>
                              <th scope="col">First Name</th>
                              <th scope="col">Last Name</th>
                              <th scope="col">Company</th>
                              <th scope="col">Email</th>
                              <th scope="col">Phone</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($employees as $employee)
                            <tr class="text-center">
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $employee->first_name }}</td>
                                <td>{{ $employee->last_name }}</td>
                                <td>{{ $employee->has_one_company->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->phone }}</td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <!-- Pagination -->
                        <div class="d-flex justify-content-end mb-4">
                            {{ $employees->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
