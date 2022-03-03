@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">{{ __('Show Employee') }}</div>
                    <table class="table table-borderless ml-3 mr-3 my-4">
                        <thead>
                          <tr class="text-center">
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Company</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="text-center">
                              <td>{{ $employee->first_name }}</td>
                              <td>{{ $employee->last_name }}</td>
                              <td>{{ $employee->has_one_company->name }}</td>
                              <td>{{ $employee->email }}</td>
                              <td>{{ $employee->phone }}</td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection
