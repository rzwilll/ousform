<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href=" {{ URL::asset('css/sidebar.css') }}">
    <title>Document</title>
</head>
<body>

    <div class="sidebar-wrapper close">
        <div class="sidebar-container">
            <div class="logo">
                <span> My.IIT</span>
            </div>
            <ul class="sidelink-container">
                <li>
                    <a href="{{ route('advisee.index')}}">
                        <i class='bx bx-certification'></i>
                            Class Advisees
                    </a>
                </li>
                <li>
                    <a href="{{ route('ous.index')}}">
                        <i class='bx bxs-report' ></i>
                        OUS Form
                    </a>
                </li>
                <!-- <li class="mt-3">
                    <a href="">
                        <i class='bx bx-log-out-circle' ></i>
                        Logout
                    </a>
                </li> -->
            </ul>

        </div> 
    </div>

    <div class="main-container">
         <div class="top-nav">
            <div class="top-container">
                <div class="toggle-btn">
                    <i class='bx bx-menu' class="togglebtn" ></i>
                </div>

                <div class="dropdown-container">

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
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                       <b style="color:white;"> {{ Auth::user()->name }}</b>
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
                                </li>
                        @endguest
                    <!-- <button class="dropbtn">
                        <span> RIZAHTIN CAMAMA</span>   
                   </button>
                    <div class="dropdown-content">
                        <i class='bx bx-log-out-circle'></i>
                        Logout
                    </div> -->
                </div>
            </div> 
        </div>
        
        <div class="main-content">

            
        <div class="advisee-container">
                @yield('content')
            
        </div>

        </div>



    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>
        
        const body = document.querySelector('body');
        sidebar= body.querySelector(".sidebar-wrapper"),
        togglebtn = body.querySelector(".toggle-btn"),
        main = body.querySelector(".main-container"),
        nav = body.querySelector(".nav-link");

        
        togglebtn.addEventListener("click" , () =>{
            sidebar.classList.toggle("close");
            main.classList.toggle("open");
            nav.classList.toggle("open-nav");
            
    
      });   
    
    </script>
</body>
</html>