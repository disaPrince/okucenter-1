<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/logo/favicon.ico') }}" type="image/png">

    <title>Oku Center</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="css/app.css">
</head>
<body style="background-image: url('img/background/background.jpg'); background-size:100% auto;">
    <div class="card container" style="width: 30rem; margin-top: 10%; border-color: red; height: 25rem">

        <img src="img/logo/logo.png" alt="IMG" style="width: 120px;" class="container mt-2">
        <h1 style="font-family: Monotype Corsiva; margin-left:35%">Okucenter</h1>
        {{-- <p style="font-family: Monotype Corsiva; font-size: 50px" class="container">Okucenter</p> --}}
        <div class="card-body">
            <form action="{{ route('login') }}" method="POST">
              @csrf
                <!-- Email input -->
              <div class="form-group">
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form1Example1" class="form-control {{ $errors->has('email') ? 'is-invalid': '' }}" />
                  <label class="form-label" for="form1Example1">Логин</label>
                </div>
                @if ($errors->has('email'))
                  <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span> 
                @endif
              </div>
              
              <div class="form-group">
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form1Example2" class="form-control {{ $errors->has('password') ? ' is-invalid': '' }}" />
                  <label class="form-label" for="form1Example2">Пароль</label>
                </div>
                
                @if ($errors->has('password'))
                  <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span> 
                @endif
              </div>
              <div class="form-group">
                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value="{{ old('remember') ? 'checked': '' }}"
                        id="form1Example3"
                        name="remember"
                        checked
                      />
                      <label class="form-check-label" for="form1Example3">Запомнить</label>
                    </div>
                  </div>
                  <div class="col">
                    <!-- Simple link -->
                    <a data-modal href="#!">Забыли пароль?</a>
                  </div>
                </div>
              </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block fs-6">Войти</button>
              </form>   
        </div>
    </div>
    
    <div class="modal">
      <div class="modal__dialog">
          <div class="modal__content">
              <form data-form action="#">
                  <div class="modal__close" data-close>&times;</div>
                  <div class="modal__title">Мы свяжемся с вами как можно быстрее!</div>
                  <input required placeholder="Ваше имя" name="name" type="text" class="modal__input">
                  <input required placeholder="Ваш номер телефона" name="phone" type="phone" class="modal__input">
                  <input hidden name="problem" value="Забыл пароль">
                  <button class="btn btn-dark btn-block container fs-6">Перезвонить мне</button>
              </form>
          </div>
      </div>
    </div>

        <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"
></script>
<script src="js/password.js"></script>
</body>
</html>