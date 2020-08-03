
<div class="reg__back">
  <img class="main-background" src="https://combo.staticflickr.com/ap/build/images/sohp/2019-top-25/Claire%20Gentile_USSJohnFKennedy.jpg">

@extends('layouts.app')


@section('title-block')
@endsection

  @section('content')
    <h1 class="reg__header">Регистрация персонала</h1>

<form action="{{ route('staff-form') }}" method="post">
  @csrf

  <div class="form-group">
    <label class="description__input" for="name">Фамилия, Имя, Отчество сотрудника</label>
    <input type="text" name="name" placeholder="Введите ФИО" id="name" class="form-control">
  </div>

  <form action="/staff/submit" method="post">
    <div class="form-group">
      <label class="description__input" for="position">Должность сотрудника</label>
      <input type="text" name="position" placeholder="Введите должность" id="position" class="form-control">
    </div>

    <form action="/staff/submit" method="post">
      <div class="form-group">
        <label class="description__input" for="date">Дата приема на работу</label>
        <input type="text" name="date" placeholder="Введите дату" id="date" class="form-control">
      </div>

      <form action="/staff/submit" method="post">
        <div class="form-group">
          <label class="description__input" for="salary">Размер заработной платы сотрудника</label>
          <input type="text" name="salary" placeholder="Введите размер заработной платы" id="salary" class="form-control">
        </div>

        <form action="/staff/submit" method="post">
          <div class="form-group">
            <label class="description__input" for="chief">ФИО начальника</label>
            <input type="text" name="chief" placeholder="Введите ФИО начальника" id="chief" class="form-control">
          </div>

          <form action="/staff/submit" method="post">
            <div class="form-group">
              <label class="description__input" for="subject">Тема сообщения</label>
              <input type="text" name="subject" placeholder="Введите тему сообщения" id="subject" class="form-control">
            </div>

            <form action="/staff/submit" method="post">
              <div class="form-group">
                <label class="description__input" for="message">Сообщение</label>
                <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
              </div>

              <button type="submit" class="btn btn-success">Отправить</button>
</form>

  @endsection
</div>
