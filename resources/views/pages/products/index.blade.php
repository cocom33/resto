@extends('layouts.app')

@section('title', 'Products')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <x-card-index page="Product" routeCreate="{{ route('product.create') }}">
        <div class="card">
            <div class="card-header">
                <h4>All Products</h4>
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
                    <form method="GET" action="{{ route('product.index') }}">
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
                            <th>Category</th>
                            <th>Price</th>
                            <th>Photo</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}
                                </td>
                                <td>
                                    {{ $product->category->name }}
                                </td>
                                <td>
                                    {{ $product->price }}
                                </td>
                                <td>
                                    @if ($product->image)
                                        <img src="{{ asset($product->image) }}" alt=""
                                            width="100px" class="img-thumbnail">
                                            @else
                                            <span class="badge badge-danger">No Image</span>

                                    @endif

                                </td>
                                <td>{{ $product->created_at }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href='{{ route('product.edit', $product->id) }}'
                                            class="btn btn-sm btn-info btn-icon">
                                            <i class="fas fa-edit"></i>
                                            Edit
                                        </a>

                                        <form action="{{ route('product.destroy', $product->id) }}"
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
                    {{ $products->withQueryString()->links() }}
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
