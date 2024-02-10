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
    <x-card-form page="Category">
        <h2 class="section-title">Category</h2>

        <div class="card">
            <form action="{{ $route }}" method="POST">
                @csrf
                @if ($model)
                    @method('PUT')
                @endif
                <div class="card-body">
                    <x-form.input
                        label="Name Category"
                        name="name"
                        placeholder="Insert Category"
                        value="{{ $model->name ?? '' }}"
                    />

                    <x-form.textarea
                        label="Description Category"
                        name="description"
                        placeholder="Description Category"
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
