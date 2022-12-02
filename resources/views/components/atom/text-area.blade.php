<label for={{ @$name }} class="form-label">{{ @$label }}</label>
<textarea id="{{ $name }}" class="form-control {{ @$class }}" name="{{ $name }}" cols="30"
    rows="3">{{ @$value }}</textarea>
<label id="{{ $name }}-error" class="error invalid-feedback" for="{{ $name }}"></label>
