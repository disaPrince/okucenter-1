<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Oku Center</title>
        <link rel="shortcut icon" href="{{ asset('img/logo/favicon.ico') }}" type="image/png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="antialiased">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('img/logo/logo.png')}}" alt="IMG" style="width: 40px;">
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">О нас</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#courses">Курсы</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" data-modal href="#">Связаться с нами</a>
                  </li>
                </ul>
                <div class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
                  <button>
                      <a class="btn btn-primary btn-block" href="{{ route('login') }}">Войти</a>
                    </button>
                </div>
              </div>
            </div>
          </nav>
        
          
        <div class="sidepanel">
            <div class="sidepanel__text"><span>Социальные сети</span></div>
            <div class="sidepanel__divider"></div>
            <a href="#" class="sidepanel__icon">
                <img src="icons/instagram.svg" alt="instagram">
            </a>
            <a href="#" class="sidepanel__icon">
                <img src="icons/facebook.svg" alt="facebook">
            </a>
        </div>
            <div class="preview">
    <div class="bgc_blue"></div>
        <div class="container">
            <div class="tabcontainer">
                <div class="tabcontent">
                    <img src="img/tabs/vegy.jpg" alt="vegy">
                    <div class="tabcontent__descr">
                        Меню "Фитнес" - это новый подход к приготовлению блюд: больше свежих овощей и фруктов. Для людей, которые интересуются спортом; активных и здоровых. Это абсолютно новый продукт с оптимальной ценой и высоким качеством!
                    </div>
                </div>
                <div class="tabcontent">
                    <img src="img/tabs/elite.jpg" alt="elite">
                    <div class="tabcontent__descr">
                        Меню “Премиум” - мы используем не только красивый дизайн упаковки, но и качественное исполнение блюд. Красная рыба, морепродукты, фрукты - ресторанное меню без похода в ресторан!                                     
                    </div>
                </div>
                <div class="tabcontent">
                    <img src="img/tabs/post.jpg" alt="post">
                    <div class="tabcontent__descr">
                        Наше специальное “Постное меню” - это тщательный подбор ингредиентов: полное отсутствие продуктов животного происхождения. Полная гармония с собой и природой в каждом элементе! Все будет Ом!                                     
                    </div>
                </div>
                <div class="tabcontent">
                    <img src="img/tabs/vegy.jpg" alt="vegy">
                    <div class="tabcontent__descr">
                        Меню "Сбалансированное" - это соответствие вашего рациона всем научным рекомендациям. Мы тщательно просчитываем вашу потребность в к/б/ж/у и создаем лучшие блюда для вас.
                    </div>
                </div>
                <div class="tabheader">
                    <h3>Выберите стиль питания</h3>
                    <div class="tabheader__items">
                        <div class="tabheader__item tabheader__item_active">Фитнес</div>
                        <div class="tabheader__item">Премиум</div>
                        <div class="tabheader__item">Постное</div>
                        <div class="tabheader__item">Сбалансированное</div>
                    </div>
                </div>
            </div>
            <div class="preview__life">Живи полной жизнью!</div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="offer">
        <div class="bgc_y"></div>
        <div class="container">
            <div class="offer__text">
                <h2 class="title">Что мы можем вам предложить?</h2>
                <div class="offer__descr">
                    Наша основная идея - это правильное питание. Оно может быть простым и вкусным. Мы не просто доставка, мы сервис! Мы взяли на себя все расчеты БЖУ, калорийности, объемов порций и прочие важные, но скучные аспекты. Вам остается только полезная, сытная и правильная еда, которую мы привозим прямо под дверь.
                </div>
            </div>
            <div class="offer__action">
                <button class="btnn btn_dark" data-modal>Связаться с нами</button>
            </div>
        </div>
        <div class="container">
            <div class="offer__advantages">
                <h2>Быстро и полезно</h2>
                <div class="offer__advantages-text">
                    Готовка дома занимает много сил, времени и нервов. Мы привозим еду сразу на целый день, и ты можешь действовать так, как тебе удобно, не подстраиваясь ни под кого и будучи уверенным в качестве продукта!
                </div>
                <h2>Правильный рацион</h2>
                <div class="offer__advantages-text">
                    Мы разработали специальное меню, где учтены все нюансы правильного питания, от баланса БЖУ до их приготовления и дробления рациона.
                </div>
            </div>
            <div class="offer__slider">
                <div class="offer__slider-counter">
                    <div class="offer__slider-prev">
                        <img src="icons/left.svg" alt="prev">
                    </div>
                    <span id="current">03</span>
                    /
                    <span id="total">04</span>
                    <div class="offer__slider-next">
                        <img src="icons/right.svg" alt="next">
                    </div>
                </div>
                <div class="offer__slider-wrapper">
                    <div class="offer__slider-inner">
                        <div class="offer__slide">
                            <img src="img/slider/pepper.jpg" alt="pepper">
                        </div>
                        <div class="offer__slide">
                            <img src="img/slider/food-12.jpg" alt="food">
                        </div>
                        <div class="offer__slide">
                            <img src="img/slider/olive-oil.jpg" alt="oil">
                        </div>
                        <div class="offer__slide">
                            <img src="img/slider/paprika.jpg" alt="paprika">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <div class="menu">
        <h2 class="title">Наше меню на день</h2>

        <div id="courses" class="menu__field">
            <div class="container">

            </div>
        </div>
    </div>
    <div class="order">
        <div class="container">
            <div class="title">Заказывай пробный день прямо сейчас!</div>
            <form action="#" class="order__form">
                <input required placeholder="Ваше имя" name="name" type="text" class="order__input">
                <input required placeholder="Ваш номер телефона" name="phone" type="phone" class="order__input">
                <img src="icons/right.svg" alt="right">
                <button class="btnn btn_dark btn_min">Перезвонить мне</button>
            </form>
        </div>
    </div>

    <div class="divider"></div>

    <div class="promotion">
        <div class="bgc_y"></div>
        <div class="container">
            <div class="promotion__text">
                <div class="title">Акция для новых клиентов!</div>
                <div class="promotion__descr">
                    Мы ценим каждого клиента и предлагаем вам стать одним из них на очень выгодных условиях. 
                    Каждому, кто закажет доставку питание на неделю, будет предоставлена скидка в размере <span>20%!</span>
                    <br><br>
                    Акция закончится 20 мая в 00:00
                </div>
            </div>
            <div class="promotion__timer">
                <div class="title">Осталось до конца акции:</div>
                <div class="timer">
                    <div class="timer__block">
                        <span id="days">12</span>
                        дней
                    </div>
                    <div class="timer__block">
                        <span id="hours">20</span>
                        часов
                    </div>
                    <div class="timer__block">
                        <span id="minutes">56</span>
                        минут
                    </div>
                    <div class="timer__block">
                        <span id="seconds">20</span>
                        секунд
                    </div>
                </div>
            </div>
        </div>
    </div>

          <footer class="footer">
            <div class="container">
                <div class="social">
                    <div class="subtitle">Мы в социальных сетях:</div>
                    <a href="#" class="link">instagram</a>
                    <a href="#" class="link">facebook</a>
                </div>
                <div class="pepper">
                    <img src="img/logo/favicon.ico" alt="pepper">
                </div>
                <div class="call">
                    <div class="subtitle">Или позвоните нам</div>
                    <a href="#" class="link">+380678341034</a>
                    <a href="#" class="link">+380500941356</a>
                </div>
            </div>
        </footer>

        <div class="modal">
          <div class="modal__dialog">
              <div class="modal__content">
                  <form action="#">
                      <div class="modal__close" data-close>&times;</div>
                      <div class="modal__title">Мы свяжемся с вами как можно быстрее!</div>
                      <input required placeholder="Ваше имя" name="name" type="text" class="modal__input">
                      <input required placeholder="Ваш номер телефона" name="phone" type="phone" class="modal__input">
                      <button class="btn btn-dark btn-block container fs-5">Перезвонить мне</button>
                  </form>
              </div>
          </div>
        </div>

    </body>
</html>

<script src="{{ asset('/js/app.js') }}"></script>