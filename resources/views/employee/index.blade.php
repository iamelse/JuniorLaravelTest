@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Employee List') }}</div>

                <div class="card-body">
                    <div class="table-responsive">

                      @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {!! session('success') !!}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      @endif

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
                                <td>
                                  <div class="col">
                                    <a class="btn btn-sm" href="{{ route('employee.show', $employee->id) }}"><i class='bx bxs-zoom-in text-primary bx-xs'></i></a>
                                    <a class="btn btn-sm" href="{{ route('employee.edit', $employee->id) }}"><i class='bx bxs-pencil text-warning bx-xs'></i></a>
                                    <form action="{{ route('employee.delete', $employee->id) }}" class="d-inline" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm" type="submit" onclick="return confirm('Are you sure want to delete this?')"><i class='bx bxs-trash text-danger bx-xs'></i></button>
                                    </form>
                                  </div>
                                </td>
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
