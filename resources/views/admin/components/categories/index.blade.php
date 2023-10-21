@extends('admin.dashboard')

@section('content')
<div id="main">

    <!-- <div class="card"> -->
        <h2 class="mb-3" style="font-weight: 800; font-size: 3rem">Category List</h2>
        <!-- <div class="card-body"> -->
            <a href="{{ route('categories.admin') }}" class="btn btn btn-outline-primary mb-3 shadow-sm" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="fa-sharp fa-solid fa-plus"></i>
            </a>

            <div class="card shadow-sm">
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr class="h5">
                            <th>No.</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $index => $cg)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $cg->name_categories }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropUpdate{{ $cg->id }}">
                                    <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropDelete{{ $cg->id }}">
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
    @include('admin.components.categories.modal.create')
    @include('admin.components.categories.modal.update')
    @include('admin.components.categories.modal.delete')


</div>
@endsection
