<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Boxicons CDN Link --}}
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/course.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">Okucenter</span>
        </div>
        <ul class="nav-links">  
            <li>
                <a href="{{ route('home') }}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Мои курсы</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Мои курсы</a></li>
                </ul>
            </li>
            @foreach ($menu as $men)
                    <li>
                        <div class="icon-link">
                            <a href="{{ route('user.course',[$men->course_id, $men->id])}}">
                                <i class='bx bx-label'></i>
                                <span class="link_name">{{$men->name}}</span>
                            </a>
                        </div>
                        <ul class="sub-menu">
                            <li><a class="link_name" href="{{ route('user.course',[$men->course_id, $men->id])}}">{{$men->name}}</a></li>
                        </ul>
                    </li>
            @endforeach
            <li>
                <div class="profile-details">
                    <div class="profile-content"> 
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="name-job">
                        <div class="profile_name">
                            {{ Auth::user()->name }}
                        </div>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                        @csrf
                    </form>
                    <i class='bx bx-log-out' id="log_out" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></i>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">{{ $topic->name }}</span>
        </div>
        <div class="card">
            <div class="video">
                        <video class="video" width="900" height="600" controls controlsList="nodownload">
                            
                            <source src="{{URL::asset($topic->video)}}" type="video/mp4">
                            </video>
                            
            </div>
        </div>
    </section>

    <script>
        let sidebar = document.querySelector('.sidebar');
        let sidebarBtn = document.querySelector('.bx-menu');
        sidebarBtn.addEventListener('click', () => {
            sidebar.classList.toggle('close');
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
        const element = document.createElement('div');
        element.classList.add('video');
        
    </script>
</body>
</html>