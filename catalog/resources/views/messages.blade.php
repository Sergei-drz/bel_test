<div class="stuff__blade">
  <img class="main-background" src="https://combo.staticflickr.com/ap/build/images/sohp/2019-top-25/Jesse_Moran_Resurrect.jpg">
@extends('layouts.app')


@section('title-block')
Все сотрудники компании
@endsection

  @section('content')
  <h1 class="reg__allstaff">Все сотрудники компании</h1>
    @foreach($data as $el)
    <div class="alert alert-info">
      <h3>{{ $el->name }}</h3>
      <p>{{ $el->position }}</p>
      <p><small>{{ $el->created_at }}</small></p>
      <a href="{{ route('staff-data-one', $el->id) }}"><button class="btn btn-warning">Детальнее</button></a>
    </div>
    @endforeach
  @endsection
</div>
