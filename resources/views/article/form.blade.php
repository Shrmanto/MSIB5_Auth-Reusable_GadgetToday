@extends('dashboard')

@section('content')

<div id="main">
    <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            {{-- <div class="modal-body"> --}}
                <div class="form-group">
                    <label for="nameArticle" class="form-label">{{ __('Article Name') }}</label>
                    <input id="nameArticle" type="text" class="form-control @error('nameArticle') is-invalid @enderror" name="nameArticle" value="{{ old('article_name') }}" required autocomplete="nameArticle" autofocus>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label for="categories_id" class="form-label">{{ __('Category') }}</label>
                            <select name="categories_id" id="categories_id" class="form-control">
                                <option value="" class="text-center">-- Select Category --</option>
                                @foreach ($categories as $cg)
                                    <option value="{{ $cg->id }}">{{ $cg->name_categories }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label for="image" class="form-label">{{ __('Image') }}</label>
                            <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="form-label">{{__('Description')}}</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            {{-- </div> --}}
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div> --}}
            <button type="button" class="btn btn-primary">Understood</button>
        </form>
</div>

@endsection
