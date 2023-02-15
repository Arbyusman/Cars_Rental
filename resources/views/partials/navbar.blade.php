  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg d-flex justify-content-center container-fluid sticky-top"
      style="font-size: 14px; background-color: #f1f3ff">
      <div id="navbar-logo" class="container-fluid" style="width: 90%">
          <a class="navbar-brand" href="{{ url('/') }}">
              {{-- {{ config('app.name', 'Cars') }} --}}
              <img src="img/logo.png" alt="img-logo" />
          </a>

          <button id="navbar-button" class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
              aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                  <h5 class="offcanvas-title fw-bold pt-4" id="offcanvasNavbarLabel">
                      BCR
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div id="sidebar" class="d-flex align-items-center justify-content-end">
                  <a class="nav-item nav-link px-3 py-2" href="#service">Our Services</a>
                  <a class="nav-item nav-link px-3 py-2" href="#whyus">Why Us</a>
                  <a class="nav-item nav-link px-3 py-2" href="#testimony">Testimonial</a>
                  <a class="nav-item nav-link px-3 py-2" href="#faq">FAQ</a>
                  <a class="nav-item nav-link px-3 py-2" href="#">
                      {{-- <button type="button" class="btn btn-success fw-bold border-0 px-3"
              style="background: #5cb85f">
              Register
          </button> --}}
                  </a>

                  @guest
                      @if (Route::has('login'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                      @endif

                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                      <div class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </div>
                  @endguest
              </div>
          </div>
      </div>
  </nav>
  <!-- End Navbar -->
