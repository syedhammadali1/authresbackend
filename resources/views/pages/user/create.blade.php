<form method="POST" class="form-create" id="store-form">
    @csrf

    <div class="mb-3">

        @include('components.atom.input', [
            'name' => 'email',
            'label' => 'Email',
        ])


        @include('components.atom.input', [
            'name' => 'password',
            'label' => 'Password',
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
                url: "{{ route('users.store') }}",
                data: $(this).serialize(),
                success: function(response) {
                    successCrudAction(
                        '.btn-close', 'User created succussfully', '#store-form',
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
