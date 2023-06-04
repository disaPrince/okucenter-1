@extends('layouts.app')
@section('content')
@if (Auth::user()->role_id === 1)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border">
                <div class="card-header">Пользователи
                    <a href="{{ route('user.create.view') }}" class=" mt-2 position-absolute top-0 end-0 btn btn-sm btn-primary btn-rounded mx-1 mb-3">+ Добавить</a>   
                </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Имя</th>
                            <th>Регистрация</th>
                            <th>Роль</th>
                            <th></th>   
                        </tr>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->created_at}}</td>

                            @empty($user->role_id)
                                <td>
                                    <span class="badge badge-light">Нет</span>
                                </td>
                            @else
                                <td>
                                    <span class="badge bg-info">{{$user->role->name}}</span>
                                </td>
                            @endempty

                            <td>
                                <a class="btn btn-info" href="
                                {{route('user.control',[$user->id])}}
                                ">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection