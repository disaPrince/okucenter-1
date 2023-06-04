@extends('layouts.main')
@section('content')
    <section class="heading-link">
        <h3>our courses</h3>
        <p> <a href="{{ route('new-home') }}">home</a> / courses</p>
    </section>

    <section class="courses">

        <h1 class="heading"> our famous courses </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="{{ asset('img/main/biology.jpg') }}" alt="">
                    <h3>Biography of the authors</h3>
                </div>
                <div class="content">
                    <h3>Forward to success</h3>
                    <p>The most affordable computer science courses, having mastered which you can consider yourself ready for testing in computer science</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-book"></i> 12 modules </span>
                        <span> <i class="fas fa-clock"></i> 6 hours </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('img/main/chemstry.jpg') }}" alt="">
                    <h3>chemstry</h3>
                </div>
                <div class="content">
                    <h3>Forward to success</h3>
                    <p>The most affordable computer science courses, having mastered which you can consider yourself ready for testing in computer science</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-book"></i> 12 modules </span>
                        <span> <i class="fas fa-clock"></i> 6 hours </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('img/main/fizika.jpg') }}" alt="">
                    <h3>fizika</h3>
                </div>
                <div class="content">
                    <h3>Forward to success</h3>
                    <p>The most affordable computer science courses, having mastered which you can consider yourself ready for testing in computer science</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-book"></i> 12 modules </span>
                        <span> <i class="fas fa-clock"></i> 6 hours </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('img/main/history.jpg') }}" alt="">
                    <h3>history</h3>
                </div>
                <div class="content">
                    <h3>Forward to success</h3>
                    <p>The most affordable computer science courses, having mastered which you can consider yourself ready for testing in computer science</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-book"></i> 12 modules </span>
                        <span> <i class="fas fa-clock"></i> 6 hours </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('img/main/math-9.jpg') }}" alt="">
                    <h3>mathemetics-9</h3>
                </div>
                <div class="content">
                    <h3>Forward to success</h3>
                    <p>The most affordable computer science courses, having mastered which you can consider yourself ready for testing in computer science</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-book"></i> 12 modules </span>
                        <span> <i class="fas fa-clock"></i> 6 hours </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('img/main/math.jpg') }}" alt="">
                    <h3>mathemetics</h3>
                </div>
                <div class="content">
                    <h3>Forward to success</h3>
                    <p>The most affordable computer science courses, having mastered which you can consider yourself ready for testing in computer science</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-book"></i> 12 modules </span>
                        <span> <i class="fas fa-clock"></i> 6 hours </span>
                    </div>
                </div>
            </div>

            <div class="box hide">
                <div class="image">
                    <img src="{{ asset('img/main/course-2-7.jpg') }}" alt="">
                    <h3>doctor</h3>
                </div>
                <div class="content">
                    <h3>Forward to success</h3>
                    <p>The most affordable computer science courses, having mastered which you can consider yourself ready for testing in computer science</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-book"></i> 12 modules </span>
                        <span> <i class="fas fa-clock"></i> 6 hours </span>
                    </div>
                </div>
            </div>

            <div class="box hide">
                <div class="image">
                    <img src="{{ asset('img/main/course-2-8.jpg') }}" alt="">
                    <h3>science</h3>
                </div>
                <div class="content">
                    <h3>Forward to success</h3>
                    <p>The most affordable computer science courses, having mastered which you can consider yourself ready for testing in computer science</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-book"></i> 12 modules </span>
                        <span> <i class="fas fa-clock"></i> 6 hours </span>
                    </div>
                </div>
            </div>

            <div class="box hide">
                <div class="image">
                    <img src="{{ asset('img/main/course-2-9.jpg') }}" alt="">
                    <h3>dancing</h3>
                </div>
                <div class="content">
                    <h3>Forward to success</h3>
                    <p>The most affordable computer science courses, having mastered which you can consider yourself ready for testing in computer science</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <span> <i class="fas fa-book"></i> 12 modules </span>
                        <span> <i class="fas fa-clock"></i> 6 hours </span>
                    </div>
                </div>
            </div>

        </div>

        <div class="load-more"> <div class="btn">load more</div> </div>

    </section>

@endsection