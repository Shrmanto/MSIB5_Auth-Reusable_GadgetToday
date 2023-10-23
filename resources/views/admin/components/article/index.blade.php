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
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Choose
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropView{{ $at->id }}">Preview</a></li>
                                            <li>
                                                <form method="POST" action="{{ route('latest-news.add', ['id' => $at->id]) }}">
                                                    @csrf
                                                    <button class="dropdown-item" type="submit">Latest News</button>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="{{ route('recommend-news.add', ['id' => $at->id]) }}" method="POST">
                                                    @csrf
                                                    <button class="dropdown-item" type="submit">Recommend News</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- {{ $categories->Links() }} --}}


        <!-- </div> -->
    <!-- </div> -->
    @include('admin.components.article.modal.preview')

</div>
@endsection
