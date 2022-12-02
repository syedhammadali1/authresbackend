<form method="POST" class="form-edit" id="edit-form">
    @csrf

    <div class="mb-3">

        @include('components.atom.input', [
            'name' => 'email',
            'label' => 'Email',
            'value' => $user->email,
        ])

        @include('components.atom.selectInput', [
            'name' => 'role_id',
            'data' => $roles,
            'label' => 'Role',
            'value' => $user->role_id,
        ])

    </div>

    <div class="modal-footer" id="edit-model-footer">
        <button type="submit" class="btn btn-primary" id="crudModalSubmit">Update</button>
    </div>
</form>



<script>
    $(document).ready(function() {
        $('#edit-form').on('submit', function(e) {
            e.preventDefault();
            toggleBtnLoading('#crudModalSubmit', true)
            $.ajax({
                type: "PUT",
                url: "{{ route('users.update', $user->id) }}",
                data: $(this).serialize(),
                success: function(response) {
                    successCrudAction(
                        '.btn-close', 'User updated succussfully', '#edit-form',
                        '#crudModalSubmit', "{{ route('users.index') }}",
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
