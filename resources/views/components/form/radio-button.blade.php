@props(['name', 'label', 'value' => [], 'default' => '', 'class' => ''])

<div class="form-group {{ $class }}">
    <label class="form-label" for="{{ $label }}">{{ $label }}</label>
    <div class="selectgroup selectgroup-pills">
        @foreach ($value as $item)
            <label class="selectgroup-item">
                <input type="radio" name="{{ $name }}"
                    value="{{ $item['value'] }}" class="selectgroup-input"
                    {{ $default == $item['value'] ? 'checked' : '' }}>
                <span class="selectgroup-button px-3">{{ $item['name'] }}</span>
            </label>
        @endforeach
    </div>
</div>
