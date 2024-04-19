<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>{{$data["name"]}}</p>
  <p>{{$data["mail"]}}</p>
  <form method="POST" action="/hello">
    @csrf
    <input type="text" name="msg">
    <input type="submit">
  </form>
  <table>
    <tr>
      <td>行1、セル1</td>
      <td>行1、セル2</td>
    </tr>
    <tr>
      <td>行2、セル1</td>
      <td>行2、セル2</td>
    </tr>
  </table>
  <table>
  @foreach ($items as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->mail}}</td>
      <td>{{$item->age}}</td>
    </tr>
  @endforeach
  </table>
</body>
</html>