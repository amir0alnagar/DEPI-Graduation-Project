<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark @if (Route::is('login') || Route::is('register')) d-none @endif" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active"><a class="nav-link" href="{{route("home")}}">{{ __('website/navbar.home')}}</a></li>
						<li><a class="nav-link" href="{{route("shop")}}" >{{ __('website/navbar.shop')}}</a></li>
						<li><a class="nav-link" href="{{route("about")}}">{{ __('website/navbar.about')}}</a></li>
						<li><a class="nav-link" href="{{route("services")}}">{{ __('website/navbar.home')}}</a></li>
						<li><a class="nav-link" href="{{route("blog")}}">{{ __('website/navbar.blog')}}</a></li>
						<li><a class="nav-link" href="{{route("contact_us")}}">{{ __('website/navbar.contact')}}</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5 align-items-center">
						<!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
            <li class="nav-item dropdown d-flex align-items-center">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    @auth  <img src="{{asset("assets/images/user.svg")}}"> {{ Auth::user()->name }}@endauth
                    @guest <img src="{{asset("assets/images/user.svg")}}"> {{"guest" .uniqid() }}@endguest
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    @guest
                    @if (Route::has('login'))
                            <a class="dropdown-item" href="{{ route('login') }}">{{ __('website/navbar.login')}}</a>
                            @endif
                            @endguest
                            @guest
                    @if (Route::has('register'))
                            <a class="dropdown-item" href="{{ route('register') }}">{{ __('website/navbar.register')}}</a>
                            @endif
                            @endguest
                        @auth
                            <a class="dropdown-item" href="#">
                                    Settings
                            </a>
                            @if (auth()->user()->user_type == 'moderator' || auth()->user()->user_type == 'admin' )
                                <a class="dropdown-item " href="{{route("dashboard")}}">
                                    Dashboard
                                </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('website/navbar.logout')}}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endauth
                </div>
            </li>








                        @auth
                        @if (auth()->user()->user_type == 'customer')
						<li><a class="nav-link fs-5" href="{{route("cart")}}">
                            <i class="fa-solid fa-cart-shopping"></i>
                            </a></li>
                        @endif
                        @endauth

                    </ul>
				</div>
			</div>


		</nav>
		<!-- End Header/Navigation -->
