<div class="stuff__blade">
  <img class="main-background" src="https://combo.staticflickr.com/ap/build/images/sohp/2019-top-25/Jesse_Moran_Resurrect.jpg">
@extends('layouts.app')


@section('title-block'){{ $data->name }}
@endsection

  @section('content')
    <h1 class="disc__name">{{ $data->name }}</h1>
    <div class="alert alert-info">
      <p>{{ $data->position }}</p>
      <p>{{ $data->date }}</p>
      <p>{{ $data->salary }}</p>
      <p>{{ $data->chief }}</p>
      <p>{{ $data->subject }}</p>
      <p>{{ $data->message }}</p>
      <p><small>{{ $data->created_at }}</small></p>
      <a href="{{ route('staff-update', $data->id) }}"><button class="btn btn-primary">Редактировать</button></a>
      <a href="{{ route('staff-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
    </div>
  @endsection
</div>
