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
        ])

        @include('components.atom.selectInput', [
            'name' => 'type_id',
            'data' => $types,
            'label' => 'Type',
            'value' => $category->type->id,
        ]) --}}

        <div class="mb-3 mx-1">
            @include('components.atom.input', [
                'name' => 'title',
                'label' => 'Title',
                'value' => $post->title,
            ])
        </div>

        <div class="mb-3 mx-1">
            @include('components.atom.text-area', [
                'name' => 'description',
                'label' => 'Description',
                'value' => $post->description,

            ])
        </div>


        <div class="mb-3 mx-1">
            @include('components.atom.select2', [
                'name' => 'category_id[]',
                'data' => $categories,
                'label' => 'Category',
                'value' => $post->categories->pluck('id')->toArray(),

            ])
        </div>



        <div class="mb-3 mx-1">
            @include('components.atom.select2', [
                'name' => 'tag_id[]',
                'data' => $tags,
                'label' => 'Tag',
                'value' => $post->tags->pluck('id')->toArray(),

            ])
        </div>

        <div class="mb-3 mx-1">
            @include('components.text-editor.custom-text-editor',[
                'name' => 'doc',
                'label' => 'Document'
            ])
        </div>

    </div>


    <div class="modal-footer" id="edit-model-footer">
        @include('components.atom.submitBtnModal', [
            'label' => 'Update',
        ])
    </div>
</form>

@once

<script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.js') }}"></script>

<script>
    $(document).ready(function() {

        $('#edit-form').on('submit', function(e) {
            e.preventDefault();
            toggleBtnLoading('#crudModalSubmit', true)
            $.ajax({
                type: "PUT",
                url: "{{ route('posts.update', $post->id) }}",
                data: $(this).serialize(),
                success: function(response) {
                    successCrudAction(
                        '.btn-close', 'Post updated succussfully', '#edit-form',
                        '#crudModalSubmit', "{{ route('posts.index') }}",
                        '.table-responsive'
                    )
                },
                error: function(errors) {
                    parseError(errors, '#crudModalSubmit');
                    toggleBtnLoading('#crudModalSubmit', false)
                    // $('#tag_id').siblings("span").addClass('is-invalid');
                }
            });

        });
    });
</script>

@endonce

