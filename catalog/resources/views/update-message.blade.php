<div class="stuff__blade">
  <img class="main-background" src="https://combo.staticflickr.com/ap/build/images/sohp/2019-top-25/Jesse_Moran_Resurrect.jpg">
@extends('layouts.app')


@section('title-block')
Обновление записи
@endsection

  @section('content')
    <h1 class="reg__reload">Обновление записи</h1>

<form action="{{ route('staff-update-submit', $data->id) }}" method="post">
  @csrf

  <div class="form-group">
    <label class="desc_inp" for="name">Фамилия, Имя, Отчество сотрудника</label>
    <input type="text" name="name" value="{{ $data->name }}" placeholder="Введите ФИО" id="name" class="form-control">
  </div>

  <form action="/staff/submit" method="post">
    <div class="form-group">
      <label class="desc_inp" for="position">Должность сотрудника</label>
      <input type="text" name="position" value="{{ $data->position }}" placeholder="Введите должность" id="position" class="form-control">
    </div>

    <form action="/staff/submit" method="post">
      <div class="form-group">
        <label class="desc_inp" for="date">Дата приема на работу</label>
        <input type="text" name="date" value="{{ $data->date }}" placeholder="Введите дату" id="date" class="form-control">
      </div>

      <form action="/staff/submit" method="post">
        <div class="form-group">
          <label class="desc_inp" for="salary">Размер заработной платы сотрудника</label>
          <input type="text" name="salary" value="{{ $data->salary }}" placeholder="Введите размер заработной платы" id="salary" class="form-control">
        </div>

        <form action="/staff/submit" method="post">
          <div class="form-group">
            <label class="desc_inp" for="chief">ФИО начальника</label>
            <input type="text" name="chief" value="{{ $data->chief }}" placeholder="Введите ФИО начальника" id="chief" class="form-control">
          </div>

          <form action="/staff/submit" method="post">
            <div class="form-group">
              <label class="desc_inp" for="subject">Тема сообщения</label>
              <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Введите тему сообщения" id="subject" class="form-control">
            </div>

            <form action="/staff/submit" method="post">
              <div class="form-group">
                <label class="desc_inp" for="message">Сообщение</label>
                <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение">{{ $data->message }}</textarea>
              </div>

              <button type="submit" class="btn btn-success">Обновить</button>
</form>

  @endsection
</div>
