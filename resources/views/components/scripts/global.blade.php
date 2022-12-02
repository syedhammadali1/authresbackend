<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    function toggleBtnLoading(btnSelector, status) {
        if (status) {
            $(btnSelector).attr('disabled', true);
            $(btnSelector).children('span').eq(0).show();
            $(btnSelector).children('span').eq(1).hide();
        } else {
            $(btnSelector).children('span').eq(0).hide();
            $(btnSelector).children('span').eq(1).show();
            $(btnSelector).attr('disabled', false);
        }
    }

    function validationError(errors) {
        $.each(JSON.parse(errors.responseText).errors, function(indexInArray,
            valueOfElement) {
            // console.log(indexInArray);
            $('#' + indexInArray + '-error').show();
            $('#' + indexInArray).addClass('is-invalid');
            $('#' + indexInArray + '-error').html(valueOfElement)

            setTimeout(function() {
                $('#' + indexInArray + '-error').hide();
                $('#' + indexInArray).removeClass('is-invalid');
            }, 3000);
        });
    }

    function parseError(errors) {
        if (errors.status == 500) {
            // alert('something went wrong')
            show500Error(errors.responseJSON)
        }
        if (errors.status == 422) {
            validationError(errors)
        }
    }

    function customSkeleton(type, count) {
        if (type == 'input') {
            //     const skeleton =
            //         `<div class="p-4">
            //   ${(function loop() {
            //     let innerSkeleton  = '';
            //     for ($i = 0; $i < count; $i++) {
            //         innerSkeleton += ` `
            //     }
            //     return innerSkeleton;

            // }
            //     )()
            //   }
            //   </div>`
            //     return skeleton

            return `@include('components.skeletons.form')`;

        }

        if (type == 'table') {
            const skeleton =
                `<a class="card" id="card-link" target="_blank">
                    <table class="table">
                    <tbody>
          ${(function loop() {
            let innerSkeleton  = '';
            for ($i = 0; $i < count; $i++) {
                innerSkeleton += `                 <tr>
                    <td class="w-4">
                        <div class="skeleton skeleton-index"></div>
                    </td>
                    <td>
                        <div class="skeleton skeleton-text"></div>
                    </td>
                    <td>
                        <div class="skeleton skeleton-text"></div>
                    </td>
                    <td>
                        <div class="skeleton skeleton-text"></div>
                    </td>
                    <td class="">
                        <div class="skeleton skeleton-button ms-auto"></div>
                    </td>
                </tr>
                     `
            }
            return innerSkeleton;
                           }
            )()
          }
                 </tbody>
               </table>
                     </a>`
            return skeleton

        }
    }

    function renderDataTable(route, responseDestination) {
        $.ajax({
            url: route,
            type: "GET",
            data: {
                renderDataTable: true
            },
            dataType: 'html',
            success: function(response) {
                setTimeout(() => {
                    $(responseDestination).html(response);
                }, 1000);
            },
            error: function(errors) {
                parseError(errors, '#crudModalSubmit');
            }
        });
    }

    function successCrudAction(modalbtn, toastrMsgFor, formSelector, toggleLoadingSelector, datatableRoute,
        datatableClass) {
        $(modalbtn).trigger('click');
        showToastr('success', toastrMsgFor)
        $(formSelector).trigger("reset");
        toggleBtnLoading(toggleLoadingSelector, false)
        $(datatableClass).html(customSkeleton("table", '5'));
        renderDataTable(datatableRoute, datatableClass)
    }

    $(document).on('click', '.crud-modal', function() {
        // showSwal('mixin');
        crud = $(this)
        $('#crudModalBody').html(customSkeleton("input", '1'));

        $('#crudModalTitle').text(crud.data('crud-title'))
        $.ajax({
            type: "GET",
            url: crud.data('crud-url'),
            dataType: "html",
            success: function(response) {
                setTimeout(() => {
                    $('#crudModalBody').html(response)
                }, 1000)
            }
        });

    });

    $(document).on('click', '.delete-crud', function(e) {
        showConfirmationToastrForCrudDelete($(this).data('deleteRoute'), $(this).data('indexRoute'),
            '.table-responsive');
    });
</script>

@include('components.toastr.toastr')
