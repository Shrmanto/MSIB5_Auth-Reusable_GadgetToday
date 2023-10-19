<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Article Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="form-group mb-3">
                        <label for="article_name">Article Name</label>
                        <input type="text" name="article_name" id="article_name" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" required></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="categories_id">Category</label>
                        <select name="categories_id" id="categories_id" class="form-control" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name_categories }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">save</button>
                </div>
                </form>
        </div>
    </div>
</div>
