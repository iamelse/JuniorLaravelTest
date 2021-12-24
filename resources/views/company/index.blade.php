@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Company List') }}</div>

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
                              <th scope="col">Company Name</th>
                              <th scope="col">Company Email</th>
                              <th scope="col">Logo</th>
                              <th scope="col">Company Website</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($companies as $company)
                            <tr class="text-center">
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->email }}</td>
                                <td>
                                  @if ($company->image == NULL)
                                    <img src="https://getbootstrap.com//docs/5.0/assets/brand/bootstrap-logo.svg" class="img img-fluid" alt="Company Logo" style="width:30px;">
                                  @else
                                    <img src="http://127.0.0.1:8000/storage/{{ $company->image }}" class="img img-fluid" alt="Company Logo" style="height: 30px; width:30px;">
                                  @endif
                                </td>
                                <td>{{ $company->website }}</td>
                                <td>
                                  <div class="col">
                                    <a class="btn btn-sm" href="/dashboard/posts/"><i class='bx bxs-zoom-in text-primary bx-xs'></i></a>
                                    <a class="btn btn-sm" href="/dashboard/posts//edit"><i class='bx bxs-pencil text-warning bx-xs'></i></a>
                                    <form action="{{ route('company.delete', $company->id) }}" class="d-inline" method="POST">
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
                            {{ $companies->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
