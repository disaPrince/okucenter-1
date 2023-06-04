@extends('layouts.main')
@section('content')

    <section class="heading-link">
        <h3>about us</h3>
        <p> <a href="{{ route('new-home') }}">home</a> / about</p>

    </section>

    {{-- about section starts --}}

    <section class="about">
        
        <div class="image">
            <img src="{{ asset('img/main/about-img.jpg') }}" alt="">
        </div>

        <div class="content">
            <h3 class="about-title">The best platform for preparing for the UNT in computer science</h3>
            <p>Here you can fully prepare for the UNT in a short time.</p>
            <div class="icons-container">
                <div class="icons">
                    <img src="{{ asset('img/main/about-icon-1.png') }}" alt="">
                    <h3>350+</h3>
                    <span>courses</span>
                </div>
                <div class="icons">
                    <img src="{{ asset('img/main/about-icon-2.png') }}" alt="">
                    <h3>1200+</h3>
                    <span>students</span>
                </div>
                <div class="icons">
                    <img src="{{ asset('img/main/about-icon-3.png') }}" alt="">
                    <h3>10+</h3>
                    <span>awards</span>
                </div>
            </div>
        </div>

    </section>

    {{-- about section ends --}}

    {{-- teachers section starts --}}

    <section class="teachers">

        <h1 class="heading">expert teachers</h1>

        <div class="swiper teachers-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="{{ asset('img/main/k1.jpg') }}" alt="">
                            <div class="share">
                                <a href="#" class="fab fa-facebook-f"></a>
                                <a href="#" class="fab fa-twitter"></a>
                                <a href="#" class="fab fa-instagram"></a>
                                <a href="#" class="fab fa-linkedin"></a>
                            </div>
                        </div>
                        <div class="content">
                            <h3>Kamila Abayeva</h3>
                            <span>Techer of Computer</span>
                        </div>
                    </div>
                

                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="{{ asset('img/main/k3.jpg') }}" alt="">
                            <div class="share">
                                <a href="#" class="fab fa-facebook-f"></a>
                                <a href="#" class="fab fa-twitter"></a>
                                <a href="#" class="fab fa-instagram"></a>
                                <a href="#" class="fab fa-linkedin"></a>
                            </div>
                        </div>
                        <div class="content">
                            <h3>Zhandos Saimanov</h3>
                            <span>Mathematics</span>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="{{ asset('img/main/k2.jpg') }}" alt="">
                            <div class="share">
                                <a href="#" class="fab fa-facebook-f"></a>
                                <a href="#" class="fab fa-twitter"></a>
                                <a href="#" class="fab fa-instagram"></a>
                                <a href="#" class="fab fa-linkedin"></a>
                            </div>
                        </div>
                        <div class="content">
                            <h3>Sabina Kalmakova</h3>
                            <span>Designer</span>
                        </div>
                    </div>
 

                </div>

        </div>

    </section>

    {{-- teachers section ends --}}

    {{-- students reviews section starts --}}

    <section class="reviews">

        <h1 class="heading"> our students review </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <p>Очень крутая платформа. Рад тому, что приобрел курс здесь. Узнал очень много новых вещей в сфере прогарммировании.</p>
                    <img src="{{ asset('img/main/pic-1.png') }}" alt="">
                    <h3>Асылжан</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>Абсолютно все было понятно. Спасибо всем спикерам данных курсов.</p>
                    <img src="{{ asset('img/main/pic-2.png') }}" alt="">
                    <h3>Аружан</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>Столько интересных и очень нужных вещей за такое короткое время.Просто вау. Респект всем тичерам.</p>
                    <img src="{{ asset('img/main/pic-3.png') }}" alt="">
                    <h3>Кали</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates accusantium voluptatum quae enim architecto obcaecati ducimus voluptate minima vel suscipit! Expedita at mollitia exercitationem nulla autem molestias praesentium adipisci veniam.</p>
                    <img src="{{ asset('img/main/pic-4.png') }}" alt="">
                    <h3>Алишер</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates accusantium voluptatum quae enim architecto obcaecati ducimus voluptate minima vel suscipit! Expedita at mollitia exercitationem nulla autem molestias praesentium adipisci veniam.</p>
                    <img src="{{ asset('img/main/pic-5.png') }}" alt="">
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates accusantium voluptatum quae enim architecto obcaecati ducimus voluptate minima vel suscipit! Expedita at mollitia exercitationem nulla autem molestias praesentium adipisci veniam.</p>
                    <img src="{{ asset('img/main/pic-6.png') }}" alt="">
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>

        </div>

    </section>
    {{-- students reviews section ends --}}

@endsection