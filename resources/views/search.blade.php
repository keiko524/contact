<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>管理システム</h1>
    <form action="find" method="POST">
    @csrf
    <div>
        お名前<input type="text" name="input" value="">
        性別<label><input type="radio">全て</label>
        <label><input style="transform:scale(2.5);" type="radio" name="gender" value="0" checked> 男性</label>
    <label><input style="transform:scale(2.5); margin-left:20px;" type="radio" name="gender" value="1"> 女性</label>
    </div>
    <div>
        登録日<input type="text">
    </div>
    <div>
        メールアドレス<input type="email">
    </div>

    <input type="submit" value="見つける">
    </form>

    @if (@isset($item))
<table>
  <tr>
    <th>ID</th>
    <th>お名前</th>
    <th>性別</th>
    <th>メールアドレス</th>
    <th>ご意見</th>
  </tr>
  <tr>
    <td>
      {{-- {{$item->getDetail()}} --}}
    </td>
  </tr>
</table>
@endif

</body>
</html>
