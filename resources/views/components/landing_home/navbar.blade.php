<nav class="navbar navbar-expand-lg d-flex">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/logo.png') }}" alt="" width="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            <i class="fa-solid fa-ellipsis"></i>
        </button>
        <div class="collapse navbar-collapse d-xl-flex justify-content-xl-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-xl-3" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
        <div class="link-media">
            <div class="content">
                <a href="">
                    <i class="fa-brands fa-instagram fa-2xl"></i>
                </a>
                <a href="" class="mx-xl-1">
                    <i class="fa-brands fa-youtube fa-2xl"></i>
                </a>
                <a href="">
                    <i class="fa-regular fa-envelope fa-2xl"></i>
                </a>
            </div>
        </div>
        <a href="{{route('logout')}}" type="button" class="btn btn-primary">logout</a>
    </div>
</nav>
