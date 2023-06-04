<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oku</title>
    {{-- font awesome cdn link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    
    {{-- swiper css link --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    {{-- custom css file link --}}
    <link rel="stylesheet" href="{{asset('css/style/style.css')}}">
</head>
<body>
        {{-- header section starts --}}
        <header class="header">
            <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> oku </a>
            <nav class="navbar">
                <div id="close-navbar" class="fas fa-times"></div>
                <a href="{{ route('new-home') }}">home</a>
                <a href="{{ route('about') }}">about</a>
                <a href="{{ route('courses') }}">courses</a>
                <a href="{{ route('contact') }}">contact</a>
                <a href="https://t.me/fastKomekBot" target=”_blank”>Telegram</a>
            </nav>
    
            <div class="icons">
                <div id="account-btn" class="fas fa-user"></div>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
    
        </header>
    
        {{-- account form section starts --}}
    
        <div class="account-form">
            
            <div id="close-form" class="fas fa-times"></div>
    
            {{-- <div class="buttons">
                <span class="btn active login-btn">login</span>
                <span class="btn register-btn">register</span>
            </div> --}}
            <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> oku </a>
    
            <form class="login-form active" action="{{ route('login') }}" method="POST">
                @csrf
                <h3>login now</h3>
                <input type="email" name='email' placeholder="enter your email" class="box">
                <input type="password" name='password' placeholder="enter your password" class="box">
                <div class="flex">
                    <input type="checkbox" name="remember" id="remember-me">
                    <label for="remember-me">remember me</label>
                    <a href="#">forgot password?</a>
                </div>
                <input type="submit" value="login now" class="btn">
            </form>    
        </div>
        {{-- account form section ends --}}
        {{-- header section ends --}}

        @yield('content')

         {{-- footer section starts --}}

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3><i class="fas fa-lightbulb"></i> oku</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="{{ route('new-home') }}" class="link">home</a>
                <a href="{{ route('about') }}" class="link">about</a>
                <a href="{{ route('courses') }}" class="link">courses</a>
                <a href="{{ route('contact') }}" class="link">contact</a>
            </div>

            <div class="box">
                <h3>useful links</h3>
                <a href="#" class="link">help center</a>
                <a href="#" class="link">ask questions</a>
                <a href="#" class="link">send feedback</a>
                <a href="#" class="link">private policy</a>
                <a href="#" class="link">terms of use</a>
            </div>
            
            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <form action="">
                    <input type="email" name="" placeholder="enter your email" id="" class="email">
                    <br><input type="submit" value="subscribe" class="btn">
                </form>
            </div>

        </div>

        <div class="credit">created by <span>mr. web designer</span> | all rights reserved!</div>

    </section>

    {{-- footer section ends --}}

    {{-- swiper js link --}}
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  {{-- custom js file link   --}}
  <script src="js/script.js"></script>

    
</body>
</html>