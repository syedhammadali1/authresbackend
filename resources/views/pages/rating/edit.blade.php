<form method="POST" class="form-edit" id="edit-form">
    @csrf

    <div class="mb-3">

        @include('components.atom.input', [
            'name' => 'name',
            'label' => 'Name',
            'value' => $rating->name,
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
                url: "{{ route('rating.update', $rating->id) }}",
                data: $(this).serialize(),
                success: function(response) {
                    successCrudAction(
                        '.btn-close', 'Rating updated succussfully', '#edit-form',
                        '#crudModalSubmit', "{{ route('rating.index') }}",
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
