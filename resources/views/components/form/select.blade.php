@props(['label', 'name', 'value' => [], 'default' => [], 'colection' => true])

<div class="form-group">
    <label for="{{ $label }}">{{ $label }}</label>
    <select class="form-control @error($name) is-invalid @enderror" name="{{ $name }}">
        <option class="d-none" value="{{ $default['value'] }}">{{ $default['name'] }}</option>
        @if ($colection)
            @foreach ($value as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        @else
            @foreach ($value as $item)
                <option value="{{ $item['value'] }}">{{ $item['name'] }}</option>
            @endforeach
        @endif
    </select>

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
