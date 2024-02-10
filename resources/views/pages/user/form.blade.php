@extends('layouts.app')

@section('title', 'User Create')

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
<x-card-form page="User">
    <h2 class="section-title">User</h2>

    <div class="card">
        <form action="{{ $route }}" method="POST">
            @csrf
            @if ($model)
                @method('PUT')
            @endif
            <div class="card-body">
                <x-form.input
                    label="Name User"
                    name="name"
                    placeholder="Insert Name User"
                    value="{{ $model->name ?? '' }}"
                />

                <x-form.input
                    label="Email"
                    name="email"
                    placeholder="mail"
                    value="{{ $model->email ?? '' }}"
                />

                <x-form.input
                    label="Password"
                    name="password"
                    type="password"
                    placeholder=""
                />

                <x-form.input
                    label="Password Confirmation"
                    name="password_confirmation"
                    type="password"
                    placeholder=""
                />

                <x-form.radio
                    label="Select Role"
                    name="role"
                    default="{{ $model->role ?? 'user' }}"
                    :value="[
                        [
                            'value' => 'user',
                            'name' => 'User',
                        ],
                        [
                            'value' => 'staff',
                            'name' => 'Staff',
                        ],
                        [
                            'value' => 'admin',
                            'name' => 'Admin',
                        ],
                    ]"
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
