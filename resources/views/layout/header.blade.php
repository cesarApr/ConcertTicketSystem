<header id="header" class="top-head">
    <!-- Static navbar -->
    <nav class="navbar navbar-default">
       <div class="container-fluid">
          <div class="row">
             <div class="col-md-4 col-sm-12 left-rs">
                <div class="navbar-header">
                   <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   </button>
                   <a href="/" class="navbar-brand"><img src="{{asset('master/images/logo.png')}}" alt="logo" /></a>
                </div>
                {{-- <form class="navbar-form navbar-left web-sh">
                   <div class="form">
                      <input type="text" class="form-control" placeholder="Search for products or companies">
                   </div>
                </form> --}}
             </div>
             <div class="col-md-8 col-sm-12">
                <div class="right-nav">
                   <div class="login-sr">
                      <div class="login-signup">
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                              <!-- Authentication Links -->
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
                            <li class="nav-item">
                                <a class="nav-item" href="{{ route('profile') }}" role="button">
                                    <img src="{{ asset('storage/'.auth()->user()->image) }}" style="width:30px; height:30px; float:left; border-radius:50%; margin-right:5px;">    
                                    {{ Auth::user()->username }}
                                </a>

                              </li>
                              <li class="nav-item">
                                 <div class="nav-item">
                                     <a class="nav-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                                     </a>
   
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                     </form>
                                 </div>
                            </li>
                        @endguest
                        </ul>
                     </div>
                      </div>
                   </div>
                   {{-- <div class="help-r hidden-xs">
                      <div class="help-box">
                         <ul>
                            <li> <a data-toggle="modal" data-target="#myModal" href="#"> <span>Change</span> <img src="{{asset('master/images/flag.png')}}" alt="" /> </a> </li>
                            <li> <a href="#"><img class="h-i" src="{{asset('master/images/help-icon.png')}}" alt="" /> Help </a> </li>
                         </ul>
                      </div>
                   </div> --}}
                   <div class="nav-b hidden-xs">
                      <div class="nav-box">
                         <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/ticket">Ticket</a></li>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/contact">Contact</a></li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!--/.container-fluid -->
    </nav>
 </header>
 <!-- Modal -->
 {{-- <div class="modal fade lug" id="myModal" role="dialog">
    <div class="modal-dialog">
       <!-- Modal content-->
       <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">Change</h4>
          </div>
          <div class="modal-body">
             <ul>
                <li><a href="#"><img src="{{asset('master/images/flag-up-1.png')}}" alt="" /> United States</a></li>
                <li><a href="#"><img src="{{asset('master/images/flag-up-2.png')}}" alt="" /> France </a></li>
             </ul>
          </div>
       </div>
    </div>
 </div> --}}
 {{-- <div id="sidebar" class="top-nav">
    <ul id="sidebar-nav" class="sidebar-nav">
       <li><a href="#">Help</a></li>
       <li><a href="howitworks.html">How it works</a></li>
       <li><a href="#">chamb for Business</a></li>
    </ul>
 </div> --}}
