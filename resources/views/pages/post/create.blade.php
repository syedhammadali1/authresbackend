<form method="POST" class="form-create" id="store-form">
    @csrf

    <div class="mb-3 mx-1">
        @include('components.atom.input', [
            'name' => 'title',
            'label' => 'Title',
        ])
    </div>

    <div class="mb-3 mx-1">
        @include('components.atom.text-area', [
            'name' => 'description',
            'label' => 'Description',
        ])
    </div>

    <div class="mb-3 mx-1">
        @include('components.atom.select2', [
            'name' => 'category_id[]',
            'data' => $categories,
            'label' => 'Category',
        ])
    </div>

    <div class="mb-3 mx-1">
        @include('components.atom.select2', [
            'name' => 'tag_id[]',
            'data' => $tags,
            'label' => 'Tag',
        ])
    </div>

    <div class="mb-3">
        @include('components.atom.file', [
            'label' => 'Upload File',
            'name' => 'file',
        ])
    </div>

    <div class="modal-footer" id="model-footer">
        @include('components.atom.submitBtnModal', [
            'label' => 'Submit',
        ])
    </div>
</form>




@once
    <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#store-form').on('submit', function(e) {
                e.preventDefault();
                toggleBtnLoading('#crudModalSubmit', true)
                let formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ route('posts.store') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        successCrudAction(
                            '.btn-close', 'Post created succussfully', '#store-form',
                            '#crudModalSubmit', "{{ route('posts.index') }}",
                            '.table-responsive'
                        )
                    },
                    error: function(errors) {

                        parseError(errors, '#crudModalSubmit');
                        toggleBtnLoading('#crudModalSubmit', false)
                    }
                });

            });
        });
    </script>

@endonce
