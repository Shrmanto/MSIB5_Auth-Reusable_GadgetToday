@extends('admin.dashboard')

@section('content')
<div id="main">

    <!-- <div class="card"> -->
        <h2 class="mb-3" style="font-weight: 800; font-size: 3rem">Article List</h2>
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
                        @foreach ($article as $index => $at)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ Str::limit($at->article_name, 10) }}</td>
                                <td>
                                    <img src="{{ asset('images/article/'. $at->image) }}" alt="image" class="img-thumbnail" width="60">
                                </td>
                                <td>{{ $at->categories->name_categories }}</td>
                                <td>{{ Str::limit($at->description, 30) }}</td>
                                <td>{{ $at->user ? $at->user->name : 'N/A' }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropUpdate{{ $at->id }}">
                                        <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropDelete{{ $at->id }}">
                                        <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- {{ $categories->Links() }} --}}


        <!-- </div> -->
    <!-- </div> -->
    @include('article.modal.create')
    @include('article.modal.update')
    @include('article.modal.delete')

</div>
@endsection
