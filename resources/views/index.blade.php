@extends('layouts.layout')

@section('content')

<h1>Todo List</h1>

@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif

<form action="/todo/create" method="post">
@csrf
  <div class="create">
    <input type="text" name="content" class="create_input">
    <input type="hidden" name="create" value="追加">
    <button class="btn btn_create">追加</button>
  </div>
</form>

<table>
<tr>
  <th>作成日</th>
  <th>タスク名</th>
  <th>更新</th>
  <th>削除</th>
</tr>
  @foreach ($items as $item)
  <tr>
    <td>
      <p>{{$item->created_at}}</p>
    </td>
    <form action="/todo/update" method="post">
    @csrf
    <td>
      <input type="text" name="content" value="{{$item->content}}" class="content_input">
    </td>
    <td class="list_btn">
      <input type="hidden" name="id" value="{{$item->id}}">
      <button class="btn btn_update">更新</button>
    </td>
    </form>
    <form action="/todo/delete" method="post">
      @csrf
    <td>
      <input type="hidden" name="id" value="{{$item->id}}">
      <button class="btn btn_delete">削除</button>
    </td>
    </form>
  </tr>
  @endforeach
</table>
@endsection