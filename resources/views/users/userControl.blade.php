@extends('layouts.app')
@section('content')
@if (Auth::user()->role_id === 1)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border">
                <div class="card-header">Пользователь: {{$user->name}} @if($user->role_id == 1) <span class="badge badge-danger">Администратор</span> @endif</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                      </div><br />
                    @endif
                    <form action="{{ route('user.save') }}" method="POST">
                      @csrf
                      <div class="row">
                        <div class="col-md-10">
                          <div class="form-group">
                            <label for="cargo_type">Имя</label>
                            <input class="form-control" id="name" name="name" value="{{$user->name}}">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <label for="id">ID</label>
                          <input name="id" class="form-control"  readonly value="{{$user->id}}">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="cargo_type">Почта</label>
                            <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}">
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <a href="#" id="changePassword" class="btn btn-info btn-block">Сменить пароль</a>
                          </div>
                        </div>
                      </div>
                      <div id="newPassDiv" class="form-group  input-group-sm hide">
                        <label for="exampleInputEmail1" class="">Новый пароль</label>
                        <input readonly type="text" class="form-control form-control-lg " id="newPass" name="newPass" placeholder="Тут буден новый пароль">
                        <small id="newPassHelp" class="form-text text-muted">Скопируйте этот пароль и передайте пользователю</small>
                      </div>
                      <div class="form-group">
                        <div class="form-group">
                          <label for="roleId">Роль</label>
                          <select class="form-control" id="roleId" name="roleId">
                            @foreach($roles as $role)
                            <option
                              @if($role->id == $user->role_id) selected @endif
                            value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <br />
                      <hr>
                      <h4>Курсы</h4>
                      <div class="row">
                        <div class="col-md-6">
                          @foreach($courses as $course)
                          <div class="form-check">
                            <input type="checkbox"
                            @if(in_array($course->id, $courseArray))
                                checked
                            @endif
                            name ="catalogCourseId[]" id='catalogCourseId' value="{{$course->id}}" class="form-check-input">
                            <label class="form-check-label" for="catalogCourseId">{{$course->name}}</label>
                          </div>
                          @endforeach
                        </div>
                      </div>
                      <hr>
                      <br />
                    <div class="row">
                      <div class="col-md-6">
                          <a href="{{ route('user.delete', [$user->id]) }}" class="btn btn-danger"><i class="fas fa-trash"></i></span></a>
                      </div>
                      <div class="col-md-6 text-right ">
                        <button type="submit" class="btn btn-primary me-3 position-absolute bottom-1 end-0">OK</button>
                      </div>
                    </div>
                  </div><!-- card-body -->
                </div>

              </form>
            </div><!-- card -->
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $( function() {
    
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    
          function generateNewPass(){
        $.ajax({
          method: "POST",
          url: "{{ route('user.change.password') }}",
          data: { userId: {{$user->id}} }
        }).done(function( data ) {
              $("#newPass").val(data.newPass);
              $("#newPassDiv").show();
          });
      }
    
      $('#changePassword').click(function(){
        generateNewPass();
      });
    } );
    </script>
@endif
@endsection