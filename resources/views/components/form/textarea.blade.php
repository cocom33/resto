@props(['name', 'label', 'value' => '', 'placeholder' => '', 'class' => '', 'required' => '', 'readonly' => ''])

<div class="form-group {{ $class }}">
    <label for="{{ $label }}">{{ $label }}</label>
    <textarea id="{{ $label }}" class="form-control @error($name) is-invalid @enderror"
        placeholder="{{ $placeholder }}" {{ $readonly }} {{ $required }}
        data-height="150" name="{{ $name }}">{{ $value }}</textarea>
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
