@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Company List') }}</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr class="text-center">
                              <th scope="col">No.</th>
                              <th scope="col">Company Name</th>
                              <th scope="col">Company Email</th>
                              <th scope="col">Logo</th>
                              <th scope="col">Company Website</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($companies as $company)
                            <tr class="text-center">
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->email }}</td>
                                <td>
                                    <img src="{{ $company->logo }}" class="img img-fluid" alt="Company Logo" style="height: 30px; width:30px;">
                                </td>
                                <td>{{ $company->website }}</td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <!-- Pagination -->
                        <div class="d-flex justify-content-end mb-4">
                            {{ $companies->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
