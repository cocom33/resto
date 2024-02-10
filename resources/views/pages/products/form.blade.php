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
    <x-card-form page="Product">
        <h2 class="section-title">Product</h2>

        <div class="card">
            <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($model)
                    @method('PUT')
                @endif
                <div class="card-body">
                    <x-form.input
                        label="Name Product"
                        name="name"
                        placeholder="Insert Name Product"
                        value="{{ $model->name ?? '' }}"
                    />

                    <x-form.input
                        label="Price"
                        name="price"
                        type="number"
                        placeholder="Insert Price Product"
                        value="{{ $model->price ?? '' }}"
                    />

                    <x-form.input
                        label="Stock"
                        name="stock"
                        type="number"
                        placeholder="Insert Stock Product"
                        value="{{ $model->stock ?? '' }}"
                    />

                    <x-form.input
                        label="Image Product"
                        name="image"
                        type="file"
                        accept="image/png, image/gif, image/jpeg"
                    />

                    <x-form.select
                        label="Category Product"
                        name="category_id"
                        :default="[
                            'name' => $model->category->name ?? 'Select Category Product',
                            'value' => $model->category_id ?? '',
                        ]"
                        :colection="true"
                        :value="$categories"
                    />
@dump($model->is_favorite, $model->status)
                    <x-form.radio-button
                        label="Jadikan Menu Favorite"
                        name="is_favorite"
                        default="{{ $model->is_favorite ?? '0' }}"
                        :value="[
                            [
                                'value' => '1',
                                'name' => 'Iya',
                            ],
                            [
                                'value' => '0',
                                'name' => 'Tidak',
                            ],
                        ]"
                    />

                    <x-form.radio-button
                        label="Status Menu"
                        name="status"
                        default="{{ $model->status ?? '1' }}"
                        :value="[
                            [
                                'value' => '1',
                                'name' => 'Aktif',
                            ],
                            [
                                'value' => '0',
                                'name' => 'Tidak Aktif',
                            ],
                        ]"
                    />

                    <x-form.textarea
                        label="Description Product"
                        name="description"
                        placeholder="Description Product"
                        value="{{ $model->description ?? '' }}"
                    />
                </div>

                <div class="card-footer text-right">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </x-card-form>
@endsection

@push('scripts')
@endpush
