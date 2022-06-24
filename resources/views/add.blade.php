@extends('layouts.layout')
<style>
  table {
    margin: 0 auto;
  }

</style>
@section('content')

<h1>Todo List</h1>

@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif

<form action="/" method="post">
  @csrf
  <input type="text" name="content">
  <button>追加</button>
</form>

<form action="/todo/create" method="post">
  <table>
  @csrf
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
    <td>
      <input type="text" name="content" value="{{$item->content}}">
    </td>
    <td><button>更新</button></td>
    <td><button>削除</button></td>
  </tr>
  @endforeach
  </table>
</form>
@endsection