@extends('layouts.main')
@section('content')
{{-- home section starts --}}
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <section class="swiper-slide slide" style="background: url({{asset('/img/main/home-slide-1.jpg')}})">
                <div class="content">
                    <h3>The best platform for preparing for the UNT in computer science</h3>
                    <p>Here you can fully prepare for the UNT in a short time.</p>
                    <a href="#" class="btn">get started</a>
                </div>
            </section>

            <section class="swiper-slide slide" style="background: url({{asset('/img/main/home-slide-2.jpg')}})">
                <div class="content">
                <h3>The best platform for preparing for the UNT in computer science</h3>
                    <p>Here you can fully prepare for the UNT in a short time.</p>
                    <a href="#" class="btn">get started</a>
                </div>
            </section>

            <section class="swiper-slide slide" style="background: url({{asset('/img/main/home-slide-3.jpg')}})">
                <div class="content">
                    <h3>The best platform for preparing for the UNT in computer science</h3>
                    <p>Here you can fully prepare for the UNT in a short time.</p>
                    <a href="#" class="btn">get started</a>
                </div>
            </section>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

    {{-- home section ends --}}

    {{-- subjects section starts --}}

    <section class="subjects">
         <h1 class="heading">our popular subjects</h1>
         <div class="box-container">

            <div class="box">
                <img src="{{ asset('img/main/subject-icon-1.png') }}" alt="">
                <h3>Computer Science</h3>
                <p>12 modules</p>
            </div>

            <div class="box">
                <img src="{{ asset('img/main/subject-icon-2.png') }}" alt="">
                <h3>mathemetics</h3>
                <p>12 modules</p>
            </div>

            <div class="box">
                <img src="{{ asset('img/main/subject-icon-3.png') }}" alt="">
                <h3>Informatic</h3>
                <p>12 modules</p>
            </div>

            <div class="box">
                <img src="{{ asset('img/main/subject-icon-4.png') }}" alt="">
                <h3>development</h3>
                <p>12 modules</p>
            </div>

            <div class="box">
                <img src="{{ asset('img/main/subject-icon-5.png') }}" alt="">
                <h3>science</h3>
                <p>12 modules</p>
            </div>

            <div class="box">
                <img src="{{ asset('img/main/subject-icon-6.png') }}" alt="">
                <h3>Base of computer</h3>
                <p>12 modules</p>
            </div>

         </div>
    </section>

    {{-- subjects section ends --}}


    {{-- home courses slider section starts --}}

    <section class="home-courses">

        <h1 class="heading"> our popular courses</h1>

        <div class="swiper home-courses-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="{{ asset('img/main/course-1-1.png') }}" alt="">
                        <h3>web development</h3>
                    </div>
                    <div class="content">
                        <h3>web development</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi, quas.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="{{ asset('img/main/course-1-2.png') }}" alt="">
                        <h3>web development</h3>
                    </div>
                    <div class="content">
                        <h3>web development</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi, quas.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="{{ asset('img/main/course-1-3.png') }}" alt="">
                        <h3>web development</h3>
                    </div>
                    <div class="content">
                        <h3>web development</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi, quas.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="{{ asset('img/main/course-1-4.png') }}" alt="">
                        <h3>web development</h3>
                    </div>
                    <div class="content">
                        <h3>web development</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi, quas.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="{{ asset('img/main/course-1-5.png') }}" alt="">
                        <h3>web development</h3>
                    </div>
                    <div class="content">
                        <h3>web development</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi, quas.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="{{ asset('img/main/course-1-6.png') }}" alt="">
                        <h3>web development</h3>
                    </div>
                    <div class="content">
                        <h3>web development</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi, quas.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

            </div>

        </div>

    </section>

    {{-- home courses slider section endss --}}
    @endsection