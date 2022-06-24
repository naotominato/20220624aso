<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  @yield('resetcss')
  <style>
    body {
      background: #00008B;
    }
    .content {
      background: #fff;
      width: 50%;
      margin: 25% auto;
      transform: translateY(-50%);
      padding: 30px;
      border-radius: 15px;
    }
    table {
    margin: 0 auto;
    }
    input, button {
      border-radius: 5px;
      border: 1px solid #DCDCDC;
    }
    input {
      outline: none;
    }
    .create {
      display: flex;
      justify-content: space-between;
    }
    .create_input {
      padding: 10px 0;
      width: 85%;
    }
    .btn {
      background: #fff;
      padding: 8px 15px;
      font-weight: bold;
      transition: .5s;
    }
    .btn_create {
      border-color: #FF00FF;
      color: #FF00FF;
    }
    .btn_create:hover {
      background: #FF00FF;
      color: #fff;
    }
    .btn_update {
      border-color: #FFA500;
      color: #FFA500;
    }
    .btn_update:hover {
      background: #FFA500;
      color: #fff;
    }
    .btn_delete {
      border-color: #7FFFD4;
      color: #7FFFD4;
    }
    .btn_delete:hover {
      background: #7FFFD4;
      color: #fff;
    }
    table {
      border-collapse: collapse;
      width: 100%;
    }
    table tr th:nth-of-type(1),
    table tr td:nth-of-type(1) {
      width: 30px
    }
    table tr th:nth-of-type(2),
    table tr td:nth-of-type(2) {
      width: 50%;
    }
    table tr th:nth-of-type(n+3),
    table tr td:nth-of-type(n+3) {
      width: 10%;
    }
    table tr th, table tr td {
      text-align: center;
    }
    table tr th {
      height: 60px;
    }
    table tr td {
      height: 45px;
    }
    .content_input {
      width: 85%;
      padding: 5px 0;
    }
  </style>
</head>
<body>

  <div class="content">
    @yield('content')
  </div>

  
  
</body>
</html>