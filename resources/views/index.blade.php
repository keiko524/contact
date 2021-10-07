<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/reset.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <title>お問い合わせ</title>
</head>
<body>
    <h1>お問い合わせ</h1>

    <form action="{{route('confirm')}}" method="POST">
        @csrf
        <div class="form">
        <table>
            <tr>
                <th>お名前<span>＊</span></th>
                <td class="c-tbl__data" colspan="3">
                    <div class="input_name">
                        {{-- <div>
                            <input type="text" name="family_name" value="{{old('family-name')}}">
                            <p class="r-label">例）山田　</p>
                            @error('fullname')
                            <div class="error">{{$message}}</div>
                            @enderror
                        </div>
                        <div>
                            <input style="margin-left: 20px;" type="text" name="given_name"   value="{{old('given-name')}}">
                            <p class="r-label" style="margin-left: 20px;">例）太郎</p>
                            @error('fullname')
                            <div class="error">{{$message}}</div>
                            @enderror
                        </div> --}}

                        <input type="text" name="fullname" value="{{old('fullname')}}">
                    </div>
                </td>
            </tr>
            <tr>
                <th>性別<span>＊</span></th>
                <td class="input_gender">
            　      <label><input style="transform:scale(2.5);" type="radio" name="gender" value="0" checked> 男性</label>
                    <label><input style="transform:scale(2.5); margin-left:20px;" type="radio" name="gender" value="1"> 女性</label>
                </td>

            <tr>
                <th>メールアドレス<span>＊</span></th>
                <td>
                    <div>
                        <input style="width:100%;" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" type="email" name="email"  value="{{old('email')}}">
                        <p>例）test@example.com</p>
                    </div>
                    @error('email')
                        <div class="error">{{$message}}</div>
                    @enderror
                </td>
            </tr>

            <tr>
                <th>郵便番号<span>＊</span></th>
                <td class="input_postcode">
                    <div class="addpt">〒</div>
                    <div style="width:100%;">
                        <input style="width:100%;" pattern="\d{3}-?\d{4}" type="text" name="postcode" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');" autocomplete="postal-code" value="{{old('postcode')}}">
                        <p>例）123-4567</p>
                        @error('postcode')
                            <div class="error">{{$message}}</div>
                        @enderror
                    </div>

                </td>
            </tr>

            <tr>
                <th>住所<span>＊</span></th>
                <td>
                    <div>
                        <input style="width:100%;" type="text" name="address"  value="{{old('address')}}">
                        <p>例）東京都渋谷区千駄ヶ谷1-2-3</p>
                    </div>
                    @error('address')
                        <div class="error">{{$message}}</div>
                    @enderror
                </td>
            </tr>

            <tr>
                <th><label>建物名</label></th>
                <td>
                    <div>
                        <input style="width:100%;" type="text" name="building_name"  value="{{old('building_name')}}">
                        <p>例）千駄ヶ谷マンション101</p>
                    </div>
                </td>
            </tr>

            <tr>
                <th style="vertical-align: middle;"><label>ご意見<span>＊</span></label></th>
                <td>
                    <textarea style="width:100%;" rows="5" name="opinion" maxlength="120">{{old('opinion')}}</textarea>
                    @error('opinion')
                        <div class="error">{{$message}}</div>
                    @enderror
                </td>
            </tr>
        </table>
        </div>
        <div class="submit_btn">
            <button type="submit" class="btn">確認</button>
        </div>


    </form>


</body>
</html>
