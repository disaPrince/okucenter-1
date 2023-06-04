@extends('layouts.app')
@section('content')
@if (Auth::user()->role_id === 1)
<div class="container">
    <div class="container-fluid">
        <div class="card mb-3 border">
            <div class="card-header">
                <i class="fas fa-table"></i> Курс: {{ $course->name }} 
                <p><h5>Teмы:</h5></p>
                </div>
            <div class="card-body">
                <a href="{{ route('topic.add.view', $course->id) }}" class="btn btn-primary mx-1 mb-3">+ Добавить</a>
                <div class="table-responsive">
                    <table class="table table-striped " id="dataTable" width="100%" cellspacing="0">
                        <thead >
                        <tr>
                            <th scope="col"><h5>Название</h5></th>
                            <th scope="col"><h5>Действия</h5></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($course->topic as $topic)
                            <tr>
                                <td scope="col"> <h6>{{$topic->name}}</h6></td>
                                <td>
                                    <div class="d-flex flex-row">
                                        <a title="Редактировать" href="{{ route('topic.update.view', [$topic->id, $course->id ]) }}" class="mx-1 btn btn-primary btn-xs">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a title="Удалить" href="{{route('topic.delete', [$topic->id, $course->id])}}" class="mx-1 btn btn-danger btn-xs">
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
@endif
@endsection