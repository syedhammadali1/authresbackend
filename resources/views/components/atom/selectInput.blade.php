<label for="{{ $name }}" class="form-label pt-3">{{ $label }}</label>
<select id="{{ $name }}" class="form-select" name="{{ $name }}">
    <option value="">Select {{ $label }}</option>
    @foreach ($data as $item)
        <option value="{{ $item->id }}" {{ $value == $item->id ? 'selected' : '' }}>
            {{ $item->name }}
        </option>
    @endforeach
</select>
<label id="{{ $name }}-error" class="error invalid-feedback" for="name"></label>
