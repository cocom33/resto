@extends('layouts.app')

@section('title', 'Product Create')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New Product Forms</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Product</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Product</h2>

                <div class="card">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name Product</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror"
                                    name="price">
                                @error('price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Stock</label>
                                <input type="number" class="form-control @error('stock') is-invalid @enderror"
                                    name="stock">
                                @error('stock')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Photo Product</label>
                                <div class="">
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        accept="image/png, image/gif, image/jpeg" name="image" >
                                </div>
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Pilih Kategory Product</label>
                                <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                                    <option class="d-none"></option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>

                                @error('category_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label">Jadikan Menu Favorit</label>
                                <div class="selectgroup selectgroup-pills">
                                    <label class="selectgroup-item">
                                        <input type="radio"
                                            name="is_favorite"
                                            value="1"
                                            class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button px-3">Iya</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio"
                                            name="is_favorite"
                                            value="0"
                                            class="selectgroup-input">
                                        <span class="selectgroup-button px-3">Tidak</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Status Menu</label>
                                <div class="selectgroup selectgroup-pills">
                                    <label class="selectgroup-item">
                                        <input type="radio"
                                            name="status"
                                            value="1"
                                            class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button px-3">Aktif</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio"
                                            name="status"
                                            value="0"
                                            class="selectgroup-input">
                                        <span class="selectgroup-button px-3">Tidak Aktif</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                    data-height="150" name="description" required></textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush
