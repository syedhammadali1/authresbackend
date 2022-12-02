<link href="{{ asset('assets/plugins/simplemde/simplemde.min.css') }}" rel="stylesheet" />

<div class="row">
    <label for="{{ $name }}" class="form-label pt-3">{{ $label }}</label>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <textarea class="form-control" name="{{ $name }}" id="tinymceExample" rows="10"></textarea>
        </div>
    </div>
</div>





<script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/plugins/simplemde/simplemde.min.js') }}"></script>
<script src="{{ asset('assets/plugins/ace-builds/ace.js') }}"></script>
<script src="{{ asset('assets/plugins/ace-builds/theme-chaos.js') }}"></script>


<script src="{{ asset('assets/js/tinymce.js') }}"></script>
<script src="{{ asset('assets/js/simplemde.js') }}"></script>
<script src="{{ asset('assets/js/ace.js') }}"></script>
