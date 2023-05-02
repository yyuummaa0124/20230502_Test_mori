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
.contact-item {
    text-align: left;
    font-size: 18px;
    margin-right: 40px;
    width: 160px;
    font-weight: bold;
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
.contact-sex{
    display: flex;
    margin-bottom: 15px;
    text-align: center;
}
.contact-email{
    display: flex;
}
.contact-post
{
    display: flex;
}
.contact-address{
    display: flex;
}

.contact-build{
    display: flex;
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
    display: none;
}
.form-post{
    width: 475px;
    height: 40px;
    margin-left: 10px;
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



</style>
<body>
<div class="contact">
    <h1 class="contact-ttl">お問い合わせ</h1>



    <form action="{{ route('inquiry.create') }}" class="contact-form" method="POST">
        @csrf
            <div class="contact-name" >
                <p class="contact-item">名前</p>
                <div class="contact-body">
                  {{ $inputs['fullname'] }}<input type="hidden" name="fullname" class="form-name" value=" {{ $inputs['fullname'] }} "/>
                </div>
            </div>

            <div class="contact-sex">
                <p class="contact-item">性別</p>
                <p class="contact-body">
                    {{ $inputs['gender'] }}<input type="hidden" name="gender" class="sex-radio" value=" {{ $inputs['gender'] }} "/>
                </p>
            </div>

            <div class="contact-email">
                <p class="contact-item">メールアドレス</p>
                <p class="contact-body">
                        {{ $inputs['email'] }}<input type="hidden" name="build" class="form-email" value=" {{ $inputs['email'] }} "/>
                </p>
            </div>


            <div class="contact-post">
                <p class="contact-item">郵便番号</p>
                <p class="contact-body">
                  {{ $inputs['postcode'] }}<input type="hidden" name="postcode" class="form-post" value=" {{ $inputs['postcode'] }} "/>
                </p>
            </div>


            <div class="contact-address">
                <p class="contact-item">住所</p>
                <p class="contact-body">
                    {{ $inputs['address'] }}<input type="hidden" name="address" class="form-text" value=" {{ $inputs['address'] }} "/>
                </p>
            </div>


            <div class="contact-build">
                <p class="contact-item">建物名</p>
                    <p class="contact-body">
                        {{ $inputs['build'] }}<input type="hidden" name="build" class="form-build" value=" {{ $inputs['build'] }} "/>
                    </p>
            </div>


            <div class="contact-inquiry">
                <p class="contact-item">ご意見</p>
                <p class="contact-body">
                    {{ $inputs['opinion'] }}<textarea type="hidden" name="opinion" class="form-textarea" value=" {{ $inputs['opinion'] }} "></textarea>
                </p>
            </div>

        </table>
        <div class="contact-btn">
        <input class="contact-submit" type="submit" value="送信" />
        </div>
    </form>
</div>
</body>
</html>