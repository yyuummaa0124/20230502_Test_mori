<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
body {
    margin: 0px;
    padding: 0px;
    height: 920px;
}
input,textarea{
    border-radius: 5px;
    border-color: rgb(211, 216, 219);
}
.asterisk{
    color: red;
    margin-left: 5px;
    font-size: 20px
}
.contact-item {
    text-align: left;
    font-size: 18px;
    margin-right: 40px;
    width: 160px;
}
.contact{
    width: 60%;
    margin: 0px auto;
    height: 100%;
}
.contact-name{
    display: flex;
}
.form-name{
    width:260px;
    height: 40px;
    margin-left: 20px;
    text-align: center;
}
.exa-name{
    margin: 0px;
    margin-bottom: 15px;
    color: rgb(195, 198, 198);
}
.exa-name-1{
    margin-left: 240px;
}
.exa-name-2{
    margin-left: 220px;
}
.contact-sex{
    display: flex;
    margin-bottom: 15px;
    text-align: center;
}
.contact-email{
    display: flex;
}
.exa-email{
    margin: 0px;
    margin-left: 240px;
    margin-bottom: 15px;
    color: rgb(195, 198, 198);
}
.contact-post
{
    display: flex;
}
.exa-post{
    margin: 0px;
    margin-left: 270px;
    margin-bottom: 15px;
    color: rgb(195, 198, 198);
}
.contact-address{
    display: flex;
}
.exa-address{
    margin: 0px;
    margin-left: 240px;
    margin-bottom: 15px;
    color: rgb(195, 198, 198);
}
.contact-build{
    display: flex;
}
.exa-build{
    margin: 0px;
    margin-left: 240px;
    margin-bottom: 15px;
    color: rgb(195, 198, 198);
}

.contact-inquiry{
    display: flex;
    margin-bottom: 15px;
}
.contact-ttl{
    text-align: center;
    font-size: 24px
}
.contact-form{
    width: 90%;
    margin: 0px auto;
    height: 100%;
}
.contact-body{
    display: flex;
    align-items: center;
}
.form-text{
    width: 510px;
    height: 40px;
    margin-left: 20px;
}
.form-build{
    width: 510px;
    height: 40px;
    margin-left: 20px;
}
.form-textarea{
    width: 510px;
    height: 130px;
    margin-left: 20px;
    resize: none;
}
.postlogo{
    margin-left: 30px;
}
.form-post{
    width: 475px;
    height: 40px;
    margin-left: 10px
}
.sex-radio{
    margin-left: 30px;
    transform:scale(3.0);
}
.contact-sex-txt{
    margin-left: 20px;
}
.contact-submit{
    color: aliceblue;
    background-color: black;
    border-radius: 5px;
    width: 160px;
    height: 42px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
}
.contact-btn{
    text-align: center;
}
.contact-ex{
    display: flex;
}
.error-text{
    margin-left: 250px;
    color: rgb(255, 0, 0);
}

</style>
<body>
<div class="contact">
    <h1 class="contact-ttl">お問い合わせ</h1>



    <form action="{{ route('inquiry.confirm') }}" class="contact-form" method="POST">
        @csrf
            @if (count($errors) > 0)

            @endif
            <div class="contact-name" >
                <p class="contact-item">名前<span class="asterisk">※</span></p>
                <div class="contact-body">
                    <input type="text" name="fullname" class="form-name" value="{{ old('fullname') }}"/>
                    <input type="text" name="fullname" class="form-name" />
                </div>
            </div>
                <p class="exa-name">
                    <span class="exa-name-1"> 例) 山田</span>
                    <span class="exa-name-2"> 例) 太郎</span>
                </p>
                @if ($errors->has('fullname'))
                    <p class="error-text"><span class="asterisk">※</span>{{$errors->first('fullname')}}</p>
                @endif

            <div class="contact-sex">
                <p class="contact-item">性別<span class="asterisk">※</span></p>
                <p class="contact-body">
                    <label class="contact-sex">
                        <input type="radio" name="gender" class="sex-radio" value="1"/>
                        <span class="contact-sex-txt">男性</span>
                    </label>
                    <label class="contact-sex">
                        <input type="radio" name="gender" class="sex-radio" value="2"/>
                        <span class="contact-sex-txt">女性</span>
                    </label>
                </p>
            </div>

            <div class="contact-email">
                <p class="contact-item">メールアドレス<span class="asterisk">※</span></p>
                <p class="contact-body">
                    <input type="email" name="email" class="form-text" value="{{ old('email') }}"/>
                </p>
            </div>
            <p class="exa-email"><span>例) test@example.com</span></p>
                @if ($errors->has('email'))
                    <p class="error-text"><span class="asterisk">※</span>{{$errors->first('email')}}</p>
                @endif

            <div class="contact-post">
                <p class="contact-item">郵便番号<span class="asterisk">※</span></p>
                <p class="contact-body">
                    <span class="postlogo">〒</span>
                    <input type="post" name="postcode" class="form-post" value="{{ old('postcode') }}" />
                </p>
            </div>
                <p class="exa-post"><span>例) 123-4567</span></p>
                @if ($errors->has('postcode'))
                    <p class="error-text"><span class="asterisk">※</span>{{$errors->first('postcode')}}</p>
                @endif

            <div class="contact-address">
                <p class="contact-item">住所<span class="asterisk">※</span></p>
                <p class="contact-body">
                    <input type="address" name="address" class="form-text" value="{{ old('address') }}"/>
                </p>
            </div>
            <div class="contact-exa">
                <p class="exa-address"> <span>例) 東京都渋谷区千駄ヶ谷1-2-3</span> </p>
            </div>
                @if ($errors->has('address'))
                    <p class="error-text"><span class="asterisk">※</span>{{$errors->first('address')}}</p>
                @endif

            <div class="contact-build">
                <p class="contact-item">建物名</p>
                    <p class="contact-body">
                        <input type="Building" name="build" class="form-build" value="{{ old('build') }}"/>
                    </p>
            </div>
            <div class="contact-exa">
                <p class="exa-build"> <span>例) 千駄ヶ谷マンション101</span> </p>
            </div>

            <div class="contact-inquiry">
                <p class="contact-item">ご意見<span class="asterisk">※</span></p>
                <p class="contact-body">
                    <textarea name="opinion" class="form-textarea" value="{{ old('opinion') }}"></textarea>
                </p>
            </div>
                @if ($errors->has('opinion'))
                    <p class="error-text"><span class="asterisk">※</span>{{$errors->first('opinion')}}</p>
                @endif
        </table>
        <div class="contact-btn">
        <input class="contact-submit" type="submit" value="確認" />
        </div>
    </form>
</div>
</body>
</html>