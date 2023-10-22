<!-- Modal -->
@foreach ( $article as $item )
<div class="modal fade" id="staticBackdropView{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Preview Article Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h1>{{ $item->article_name }}</h1>
                <div class="categories d-flex">
                    <h5 class="badge text-bg-danger">{{ $item->categories->name_categories }}</h5>
                    <h5 class="badge text-bg-warning mx-3">{{ $item->user->name }}</h5>
                    <h5 class="badge text-bg-success">{{ $item->created_at }}</h5>
                </div>
                <img src="{{ asset('images/article/'. $at->image) }}" alt="image" class="img-thumbnail">
                <p>{{ $item->description }}</p>
            </div>
        </div>
    </div>
</div>
@endforeach

