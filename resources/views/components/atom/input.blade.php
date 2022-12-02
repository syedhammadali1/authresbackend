{{-- <label for={{ @$label['for'] }} class="form-label">{{ @$label['text'] }}</label>
<input id="{{ @$input['id'] }}" class="form-control "{{ @$input['class'] }} name="{{ @$input['name'] }}"
    type="{{ @$input['type'] }}" aria-invalid="true" value="{{ @$input['value'] ? @$input['value'] : '' }}">
<label id="{{ @$error['id'] }}-error" class="error invalid-feedback" for="name"></label> --}}


<label for={{ @$name }} class="form-label">{{ @$label }}</label>
<input id="{{ $name }}" class="form-control {{ @$class }}" name="{{ $name }}"
    type="{{ @$type ?? 'text' }}" aria-invalid="true" value="{{ @$value }}">
<label id="{{ $name }}-error" class="error invalid-feedback" for="{{ $name }}"></label>
