@extends('layouts.app')

@section('title', 'categorys')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <x-card-index page="Category" routeCreate="{{ route('category.create') }}">
        <div class="card">
            <div class="card-header">
                <h4>All Category</h4>
            </div>
            <div class="card-body">
                {{-- <div class="float-left">
                    <select class="form-control selectric">
                        <option>Action For Selected</option>
                        <option>Move to Draft</option>
                        <option>Move to Pending</option>
                        <option>Delete Pemanently</option>
                    </select>
                </div> --}}
                <div class="float-right">
                    <form method="GET" action="{{ route('category.index') }}">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="name">
                            <div class="input-group-append">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="clearfix mb-3"></div>

                <div class="table-responsive">
                    <table class="table-striped table">
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}
                                </td>
                                <td>
                                    {{ $category->description }}
                                </td>
                                <td>{{ $category->created_at }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href='{{ route('category.edit', $category->id) }}'
                                            class="btn btn-sm btn-info btn-icon">
                                            <i class="fas fa-edit"></i>
                                            Edit
                                        </a>

                                        <form action="{{ route('category.destroy', $category->id) }}"
                                            method="POST" class="ml-2">
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <input type="hidden" name="_token"
                                                value="{{ csrf_token() }}" />
                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                <i class="fas fa-times"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="float-right">
                    {{ $categories->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </x-card-index>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
