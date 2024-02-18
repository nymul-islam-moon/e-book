<div class="modal-content border-0">
    <div class="modal-header p-3 bg-soft-info">
        <h5 class="modal-title" id="exampleModalLabel">Add Book Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
    </div>
    <form class="tablelist-form" autocomplete="off" id="add_category_form" action="{{ route('book.category.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="modal-body">
            <div class="row g-3">
                <div class="col-lg-12">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input type="text" id="category_name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Category name">
                    <span class="error error_name text-danger"></span>
                </div>

            </div>
        </div>
        <div class="modal-footer" style="display: block;">
            <div class="hstack gap-2 justify-content-end">
                <button type="button" class="btn btn-light" id="close-modal" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success submit_button">Add Category</button>
            </div>
        </div>
    </form>
</div>

<script>
    /**
     * Add Product Category
     * @author Nymul Islam Moon < towkir1997islam@gmail.com >
     * */
    $(document).on('submit', '#add_category_form', function(e) {
        e.preventDefault();
        // $('.loading_button').show();
        var url = $(this).attr('action');
        $('.submit_button').prop('type', 'button');

        $.ajax({
            url: url,
            type: 'post',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                $('#add_category_form')[0].reset();

                $('#addCategoryModal').modal('hide');

                $('.submit_button').prop('type', 'submit');

                $('.category_table').DataTable().ajax.reload();

                toastr.success(data)

            },
            error: function(err) {
                let error = err.responseJSON;

                $('.submit_button').prop('type', 'submit');

                $.each(error.errors, function (key, error){

                    // $('.submit_button').prop('type', 'submit');
                    $('.error_' + key + '').html(error[0]);
                });
            }
        });
    });
</script>
