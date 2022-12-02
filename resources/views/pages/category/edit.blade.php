<form method="POST" class="form-edit" id="edit-form">
    @csrf

    <div class="mb-3">
        {{-- @include('components.atom.input', [
            'label' => [
                'for' => 'name',
                'text' => 'Name',
            ],
            'input' => [
                'id' => 'name',
                'class' => '',
                'name' => 'name',
                'type' => 'text',
                'value' => $category->name,
            ],
            'error' => [
                'id' => 'name',
            ],
        ]) --}}

        @include('components.atom.input', [
            'name' => 'name',
            'label' => 'Name',
            'value' => $category->name,
        ])

        @include('components.atom.selectInput', [
            'name' => 'type_id',
            'data' => $types,
            'label' => 'Type',
            'value' => $category->type->id,
        ])
    </div>


    <div class="modal-footer" id="edit-model-footer">
        @include('components.atom.submitBtnModal', [
            'label' => 'Update',
        ])
    </div>
</form>



<script>
    $(document).ready(function() {

        $('#edit-form').on('submit', function(e) {
            e.preventDefault();
            toggleBtnLoading('#crudModalSubmit', true)
            $.ajax({
                type: "PUT",
                url: "{{ route('categories.update', $category->id) }}",
                data: $(this).serialize(),
                success: function(response) {
                    successCrudAction(
                        '.btn-close', 'Category updated succussfully', '#edit-form',
                        '#crudModalSubmit', "{{ route('categories.index') }}",
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
