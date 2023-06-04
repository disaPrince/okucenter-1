@extends('layouts.main')
@section('content')
    <section class="heading-link">
        <h3>contact us</h3>
        <p> <a href="{{ route('new-home') }}">home</a> / contact</p>
    </section>

    {{-- contact section starts --}}


    <section class="contact">

        <h1 class="heading"> get in touch </h1>

        <div class="icons-container">

            <div class="icons">
                <i class="fas fa-clock"></i>
                <h3>opening hours :</h3>
                <p>00:07am to 00:06pm</p>
            </div>

            <div class="icons">
                <i class="fas fa-phone"></i>
                <h3>phone :</h3>
                <p>+7(747)-650-87-50</p>
                <p>+7(777)-626-45-18</p>
            </div>

            <div class="icons">
                <i class="fas fa-envelope"></i>
                <h3> email : </h3>
                <p>struq2@gmail.com</p>
                <p>drakon@gmail.com</p>
            </div>

            <div class="icons">
                <i class="fas fa-map"></i>
                <h3>address :</h3>
                <p>almaty, kazakhstan - 050000</p>
            </div>

        </div>

        <div class="row">

            <div class="image">
                <img src="{{ asset('img/main/contact-img.png') }}" alt="">
            </div>

            <form action="">

                <h3>send us a message</h3>
                <input type="text" placeholder="name" class="box">
                <input type="email" placeholder="email" class="box">
                <input type="number" placeholder="phone" class="box">
                <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" class="btn">

            </form>

        </div>

    </section>

    {{-- contact section ends --}}

    {{-- faq section starts --}}

    <section class="faq">

        <h1 class="heading">frequently asked questions</h1>

        <div class="accordion-container">

            <div class="accordion active">
                <div class="accordion-heading">
                    <h3>how to contact for help?</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    You can use phone number or email to contact to us. Please, don't be shame, and ask question!
                </p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>what is the best career in 2022?</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore minus et reprehenderit repudiandae repellat quibusdam quisquam, aperiam accusamus harum quis rem obcaecati voluptates! Accusamus nemo obcaecati labore delectus voluptates! Beatae.
                </p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>how much fees for web development?</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore minus et reprehenderit repudiandae repellat quibusdam quisquam, aperiam accusamus harum quis rem obcaecati voluptates! Accusamus nemo obcaecati labore delectus voluptates! Beatae.
                </p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>can I choose my own tutor?</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore minus et reprehenderit repudiandae repellat quibusdam quisquam, aperiam accusamus harum quis rem obcaecati voluptates! Accusamus nemo obcaecati labore delectus voluptates! Beatae.
                </p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>what payment methods are availabe?</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore minus et reprehenderit repudiandae repellat quibusdam quisquam, aperiam accusamus harum quis rem obcaecati voluptates! Accusamus nemo obcaecati labore delectus voluptates! Beatae.
                </p>
            </div>

            <div class="accordion">
                <div class="accordion-heading">
                    <h3>can I have free trial for a month?</h3>
                    <i class="fas fa-angle-down"></i>
                </div>
                <p class="accordion-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore minus et reprehenderit repudiandae repellat quibusdam quisquam, aperiam accusamus harum quis rem obcaecati voluptates! Accusamus nemo obcaecati labore delectus voluptates! Beatae.
                </p>
            </div>

        </div>



    </section>

    {{-- faq section ends --}}

    {{-- logo slider starts --}}


    {{-- logo slider ends --}}
@endsection