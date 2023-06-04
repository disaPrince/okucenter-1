@extends('layouts.app')
@section('content')
@if (Auth::user()->role_id === 1)
<div class="container">
    <div class="container-fluid">
        <div class="card mb-3 border">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Добавить новый курс
            </div>
            <div class="card-body">
                <form action="{{ route('course.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form4Example1" class="form-control" name="name"/>
                      <label class="form-label" for="form4Example1">Название</label>
                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-4">
                      <textarea class="form-control" id="form4Example2" rows="4" name="description"></textarea>
                      <label class="form-label" for="form4Example2">Описание</label>
                    </div>
                    <!-- Price before the promotion -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form4Example3" class="form-control" name="oldPrice"/>
                        <label class="form-label" for="form4Example3">Цена до акции</label>
                    </div>
                    <!--Price -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form4Exampl4" class="form-control" name="price"/>
                        <label class="form-label" for="form4Example4">Цена</label>
                    </div>
                    <!-- Photo -->
                    <div class="mb-4">
                    <label class="form-label" for="photo">Фото</label>
                    <input type="file" class="form-control" id="photo" name="photo"/>
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