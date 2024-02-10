@props(['name', 'label', 'value', 'type' => 'text', 'placeholder' => '', 'class' => '', 'required' => '', 'readonly' => ''])

<div class="form-group {{ $class }}">
    <label for="{{ $label }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $label }}" value="{{ $value ?? '' }}"
        placeholder="{{ $placeholder }}" {{ $readonly }} {{ $required }}
        class="form-control @error($name) is-invalid @enderror"
        {{ $attributes }}>
    <div class="mb-3">
        {{ $slot }}
    </div>
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
