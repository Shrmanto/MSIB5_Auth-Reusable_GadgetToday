<!-- Modal -->
@foreach ( $article as $item )
<div class="modal fade" id="staticBackdropUpdate{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Article Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('article.update', ['id' => $item->id] ) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="modal-body">

                    <div class="form-group mb-3">
                        <label for="article_name">Article Name</label>
                        <input type="text" name="article_name" id="article_name" class="form-control" value="{{ old('article_name', $item->article_name) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                        @if ( $item->image )
                            <input type="hidden" name="image" id="image" class="form-control" value="{{ 'image' ,$item->image }}">
                            <p>Current image : {{ $item->image }}</p>
                        @endif
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

                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" required>{{ old('description', $item->description) }}</textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endforeach

