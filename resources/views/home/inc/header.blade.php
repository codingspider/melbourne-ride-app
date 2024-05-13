<header class="header my-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{ route('home') }}"><img
                                src="{{ asset('assets/images/setting/'.$general->logo) }}" alt="" width="50px"
                                height="auto"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                                  </li>
                                @each('submenu', $menulist, 'menu', 'empty')
                                <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('home.blog') }}">Blog</a>
                                </li>

                                <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('home.contact') }}">Contact Us</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a type="submit" class="nav-link btn bg-warning text-light"
                                        href="{{ route('book-now') }}">Book Now</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-warning" type="submit">Search</button>
                            </form>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                

                            </ul>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
					      	<li class="nav-item dropdown">
					        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					            <i class="bi bi-person-circle"></i>
					          	</a>
					          	<ul class="dropdown-menu">
                                  @if(!Auth::check())
					            	<li><a class="dropdown-item" href="{{ route('user-login') }}">Log In</a></li>
					            	<li><hr class="dropdown-divider"></li>
					            	<li><a class="dropdown-item" href="{{ route('user-register') }}">Register</a></li>
                                    @else
					            	<li><hr class="dropdown-divider"></li>
					            	<li><a class="dropdown-item" href="{{ route('dashboard') }}">Profile</a></li>
					            	<li><a class="dropdown-item" href="{{ route('logout-user') }}">Logout</a></li>
                                    @endif
					          	</ul>
					        </li>
					      </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>