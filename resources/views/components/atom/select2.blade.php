<style>
    .select2-dropdown {
        z-index: 1055 !important;
    }

    .is-invalid>.select2-container {
        border: 1px red solid !important
    }
</style>

<label for="{{ $name }}" class="form-label pt-3">{{ $label }}</label>
<select id="{{ str_replace('[]', '', $name ?? '') }}" class="js-example-basic-multiple form-select" multiple="multiple"
    name={{ @$name }}>

    @isset($data)
        @foreach ($data as $item)
            <option
                @isset($value)
            @if (in_array($item->id, $value)) selected @endif
            @endisset
                value="{{ $item->id }}">{{ $item->name }}
            </option>
        @endforeach
    @endisset
</select>
<label id="{{ str_replace('[]', '', $name ?? '') }}-error" class="error invalid-feedback" for="name"></label>
