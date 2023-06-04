@extends('layouts.app')
@section('content')
@if (Auth::user()->role_id === 1)
<div class="container">
    <div class="container-fluid">
        <div class="card mb-3 border">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Новый пользователь
            </div>
            <div class="card-body">
                <form action="{{ route('user.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form1Example1" class="form-control" required name="name"/>
                      <label class="form-label" for="form1Example1">Имя</label>
                    </div>
                      <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form1Example2" class="form-control" required name="email"/>
                        <label class="form-label" for="form1Example2">Почта</label>
                    </div>
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="form1Example3" class="form-control" required name="password"/>
                        <label class="form-label" for="form1Example3">Пароль</label>
                    </div>
                    <!-- Role -->
                    <div class="form-group mb-2">
                        <label for="exampleFormControlSelect1">Роль</label>
                        <select class="form-control select" id="exampleFormControlSelect1" required name="roleId">
                          @foreach($roles as $role)
                            <option
                            value="{{$role->id}}">{{$role->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary mb-4">Сохранить</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endif
@endsection