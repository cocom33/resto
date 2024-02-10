@props(['name', 'label', 'value' => [], 'default' => '', 'class' => ''])

<div class="form-group">
    <label class="form-label">Select Role</label>
    <div class="selectgroup w-100">
        @foreach ($value as $item)
            <label class="selectgroup-item">
                <input type="radio" name="{{ $name }}"
                    value="{{ $item['value'] }}" class="selectgroup-input"
                    {{ $default == $item['value'] ? 'checked' : '' }}>
                <span class="selectgroup-button">{{ $item['name'] }}</span>
            </label>
        @endforeach
    </div>
</div>
