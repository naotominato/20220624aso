@extends('lessons.layouts')
<style>
  .la {
    display: block;
  }
</style>  
@section('title', 'トップページ')



@section('content')

@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif

<form action="/get" method="POST">
@csrf
  <label class="la" for="name">氏名</label>
  <input type="text" name="name" id="name">

  <label class="la" for="email">メールアドレス</label>
  <input type="email" name="email" id="email">

  <button class="la">送信する</button>

</form>
@endsection