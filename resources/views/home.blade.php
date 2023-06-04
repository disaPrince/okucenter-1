@extends('layouts.app')
@section('content')
@if (Auth::user()->role_id === 1)
<div class="container">
    <div class="container-fluid">
        <div class="card mb-3 border">
            <div class="card-header ">
                <i class="fas fa-table"></i> Курсы
                </div>
            <div class="card-body">
                <a href="{{ route('course.add.view') }}" class="btn btn-primary">+ Добавить</a>
                <div class="table-responsive ">
                    <table class="table table-striped " id="dataTable" width="100%" cellspacing="0">
                        <thead >
                        <tr>
                            <th scope="col"><h5>Название</h5></th>
                            <th scope="col"><h5>Действия</h5></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td scope="col"> <h6>{{$course->name}}</h6></td>
                                <td>
                                    <div class="d-flex flex-row">
                                        <a title="Темы" href="{{ route('topic.list', [$course->id]) }}" >
                                            <button class="btn btn-success">Темы</button>
                                        </a>
                                        <a title="Редактировать" href="{{ route('course.update',[$course->id]) }}" class="mx-1 btn btn-primary btn-xs">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a title="Удалить" href="{{ route('course.delete',[$course->id]) }}" class="mx-1 btn btn-danger btn-xs">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if (Auth::user()->role_id === 3)
    <div class="d-flex container row">
        @foreach (Auth::user()->course as $course)
        <div class="menu__item ms-5 mt-5 col-4 ">
                <img src={{ asset($course->photo) }}>
                <h3 class="menu__item-subtitle">{{ $course->name }}</h3>
                <div class="menu__item-descr">{{ $course->description }}</div>
                <div class="menu__item-divider"></div>
                <div class="menu__item-price">
                <div><form action="{{ route('user.course',[$course->id, 0])}}" method="GET">
                    <!-- <input type="text" hidden name="id" value="{{ $course->id }}">
                    <input type="text" hidden name="topicId" value="{{ $course->id }}"> -->
                    <button class="btn btn-danger"> Начать курс</button>
                </form>
                </div>
                </div>
        </div>
        @endforeach
    </div>
@endif
@endsection