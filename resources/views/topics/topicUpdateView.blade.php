@extends('layouts.app')
@section('content')
@if (Auth::user()->role_id === 1)
<div class="container">
    <div class="container-fluid">
        <div class="card mb-3 border">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Редактировать тему:
            </div>
            <div class="card-body">
                <form action="{{ route('topic.update',[$topic->id, $courseId]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form4Example1" class="form-control" name="name" value="{{ $topic->name }}"/>
                      <label class="form-label" for="form4Example1">Название</label>
                    </div>
                    <!-- Photo -->
                    <div class="mb-4">
                    <label class="form-label" for="homework">Домашнее задание</label>
                    <input type="file" class="form-control" id="homework" name="homework"/>
                    </div>
                    <!-- Video -->
                    <div class="mb-4">
                        <label class="form-label" for="video">Видео</label>
                        <input type="file" class="form-control" id="video" name="video"/>
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