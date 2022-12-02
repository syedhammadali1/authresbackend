<form method="POST" class="form-create" id="store-form">
    @csrf

    <div class="mb-3 mx-1">

        @include('components.atom.input', [
            'name' => 'name',
            'label' => 'Name',
        ])


        @include('components.atom.selectInput', [
            'name' => 'type_id',
            'data' => $types,
            'label' => 'Type',
            'value' => '',
        ])
    </div>

    <div class="modal-footer" id="model-footer">
        @include('components.atom.submitBtnModal',[
            'label' => 'Submit'
        ])
    </div>
</form>

<script>
    $(document).ready(function() {
        $('#store-form').on('submit', function(e) {
            e.preventDefault();
            toggleBtnLoading('#crudModalSubmit', true)
            $.ajax({
                type: "POST",
                url: "{{ route('categories.store') }}",
                data: $(this).serialize(),
                success: function(response) {
                    successCrudAction(
                        '.btn-close', 'Category created succussfully', '#store-form',
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
