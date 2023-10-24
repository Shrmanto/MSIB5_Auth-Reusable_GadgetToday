@extends('admin.dashboard')

@section('content')
<div id="main">

    <!-- <div class="card"> -->
        <h2 class="mb-3" style="font-weight: 800; font-size: 3rem">Recommend News List</h2>
        <!-- <div class="card-body"> -->

            <div class="card shadow-sm">
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr class="h5">
                            <th>No.</th>
                            <th>Article Name</th>
                            <th>Article Image</th>
                            <th>Categories</th>
                            <th>Description</th>
                            <th>Published</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recommend as $index => $rn)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                @if ( $rn->article)
                                    <td>{{ Str::limit($rn->article->article_name, 10) }}</td>
                                    <td>
                                        <img src="{{ asset('images/article/'. $rn->article->image) }}" alt="image" class="img-thumbnail" width="60">
                                    </td>
                                    <td>{{ $rn->article->categories->name_categories }}</td>
                                    <td>{{ Str::limit($rn->article->description, 30) }}</td>
                                    <td>{{ $rn->article->user ? $rn->article->user->name : 'N/A' }}</td>
                                @else
                                    <td>N/A</td>
                                    <td></td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                @endif
                                <td>
                                    <a href="#" class="btn btn-sm btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropDelete{{ $rn->id }}">
                                        <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- {{ $categories->Links() }} --}}
            @include('admin.components.recommend-news.modal.delete')


        <!-- </div> -->
    <!-- </div> -->

</div>
@endsection
