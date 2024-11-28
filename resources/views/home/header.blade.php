  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>

  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="{{url('/')}}" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <ul class="nav">
                        <li><a href="{{url('/')}}" class="active">AnaSayfa</a></li>
                        <li><a href="{{url('explore')}}">Kitapları Keşfet</a></li>
                        


                        @if (Route::has('login'))
                
                    @auth 


                    <li>
                        <a href="{{url('book_history')}}">Geçmişim</a>
                    </li>

                    
                        
                        <x-app-layout>
                        </x-app-layout>

                   
                    	 
                   
                       
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth

                
            @endif




                        
                        
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
  </header>