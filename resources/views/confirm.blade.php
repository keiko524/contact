<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/reset.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>確認</title>
</head>
<body>

    <h1>内容確認</h1>

    <form action="{{route('thanks')}}" method="POST">
        @csrf
        <div class="form">



        <table>
            <tr>
                <th>お名前</th>
                <td>
                    <div class="input_name">
                        <div>
                            {{ $inputs['fullname'] }}
                            {{-- {{txt}} --}}

                            {{-- {{$form->familyname}}{{$form->givenname}} --}}
                            {{-- <input name="fullname" value="{{ $form->familyname $form->givenname }}" type="hidden"> --}}
                            <input name="fullname" value="{{ $inputs['fullname'] }}" type="hidden">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th>性別</th>
                <td class="input_gender">
                    {{ $gender[$inputs['gender']] }}
                    <input name="gender" value="{{ $inputs['gender'] }}" type="hidden">
                </td>
            <tr>
                <th>メールアドレス</th>
                <td>
                    <div>
                        {{ $inputs['email'] }}
                        <input name="email" value="{{ $inputs['email'] }}" type="hidden">
                    </div>
                </td>
            </tr>

            <tr>
                <th>郵便番号</th>
                <td class="input_postcode">
                    <div style="width:100%;">
                        {{ $inputs['postcode'] }}
                        <input name="postcode" value="{{ $inputs['postcode'] }}" type="hidden">
                        {{-- <input style="width:100%;" pattern="\d{3}-?\d{4}" type="text" name="postcode" autocomplete="postal-code" value="{{old('postcode')}}"> --}}
                    </div>

                </td>
            </tr>

            <tr>
                <th>住所</th>
                <td>
                    <div>
                        {{ $inputs['address'] }}
                        <input name="address" value="{{ $inputs['address'] }}" type="hidden">
                        {{-- <input style="width:100%;" type="text" name="address"  value="{{old('address')}}"> --}}
                    </div>
                </td>
            </tr>

            <tr>
                <th><label>建物名</label></th>
                <td>
                    <div>
                        {{ $inputs['building_name'] }}
                        <input name="building_name" value="{{ $inputs['building_name'] }}" type="hidden">
                        {{-- <input style="width:100%;" type="text" name="building_name"  value="{{old('building_name')}}"> --}}
                    </div>
                </td>
            </tr>

            <tr>
                <th style="vertical-align: middle;"><label>ご意見</label></th>
                <td>
                    {{ $inputs['opinion'] }}
                    <input name="opinion" value="{{ $inputs['opinion'] }}" type="hidden">
                    {{-- <textarea style="width:100%;" rows="5" name="opinion" maxlength="120">{{old('opinion')}}</textarea> --}}
                </td>
            </tr>
        </table>

        </div>
        <div class="submit_btn">
            {{-- <button type="submit" class="btn">送信する</button> --}}
            <div>
                <button name="action" type="submit" value="submit" class="btn btn-primary">送信する</button>

            </div>
            <div>

                <button name="action" type="submit" value="return" class="btn-return">修正する</button>
            </div>
        </div>


    </form>
</body>
</html>
