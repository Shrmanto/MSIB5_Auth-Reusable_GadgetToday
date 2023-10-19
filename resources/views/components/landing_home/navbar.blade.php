<nav class="navbar navbar-expand-lg d-flex">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/logo.png') }}" alt="" width="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            <i class="fa-solid fa-ellipsis"></i>
        </button>
        <div class="collapse navbar-collapse d-xl-flex align-items-xl-center justify-content-xl-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-xl-3" href="#">News</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $cg)
                            <li><a class="dropdown-item" href="#">{{ $cg->name_categories }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-xl-3" href="#">Contact</a>
                </li>
                @auth
                <li class="nav-item dropdown ms-xl-4 d-xl-block d-none">
                    <a class="nav-link nav-icon-hover" href="#" id="drop2" data-bs-toggle="dropdown"aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                        <div class="message-body">
                            <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                                <i class="ti ti-user fs-6"></i>
                                <p class="mb-0 fs-3">My Profile</p>
                            </a>
                            <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                                <i class="ti ti-mail fs-6"></i>
                                <p class="mb-0 fs-3">My Account</p>
                            </a>
                            <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                                <i class="ti ti-list-check fs-6"></i>
                                <p class="mb-0 fs-3">My Task</p>
                            </a>
                            <a href="{{route('logout')}}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                        </div>
                    </div>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
