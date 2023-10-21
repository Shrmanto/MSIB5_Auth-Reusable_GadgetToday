@extends('Userdashboard')

@section('content')
<div id="main">

    <!-- <div class="card"> -->
        <h2 class="mb-3" style="font-weight: 800; font-size: 3rem">Category List</h2>
        <!-- <div class="card-body"> -->

            <div class="card shadow-sm">
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr class="h5">
                            <th>No.</th>
                            <th>Category Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $index => $cg)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $cg->name_categories }}</td>
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
