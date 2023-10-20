@extends('admin.dashboard')

@section('content')
<div id="main">

    <!-- <div class="card"> -->
        <h2 class="mb-3" style="font-weight: 800; font-size: 3rem">Writer List</h2>
        <!-- <div class="card-body"> -->

            <div class="card shadow-sm">
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr class="h5">
                            <th>No.</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $index => $users)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $users->image }}</td>
                                <td>{{ $users->name }}</td>
                                <td>{{ $users->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- {{ $categories->Links() }} --}}


        <!-- </div> -->
    <!-- </div> -->


</div>
@endsection
