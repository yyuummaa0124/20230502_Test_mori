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
body{
    margin: 0px;
    padding: 0px;
    height: 920px;
    font-size: 16px;
}
a{
    text-decoration: none;
    color: black;
    font-size: 14px;
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
.wavyline{
    align-items: center;
    margin-left: 20px;
    margin-top: 10px;
}
.contact-item {
    text-align: left;
    margin-right: 20px;
    width: 160px;
}
.contact{
    width: 100%;
    margin: 0px auto;
    height: 100%;
}
.contact-main{
    display: flex;
    margin-bottom: 15px;
    margin-top: 30px;
}
.contact-name{
    display: flex;
    align-items: center;
    margin-left: 50px;
    font-weight: bold;
}
.form-name{
    width:260px;
    height: 40px;
    margin-left: 20px;
    text-align: center;

}
.contact-sex{
    display: flex;
    margin-bottom: 10px;
    text-align: center;
    align-items: center;
}
.contact-email{
    display: flex;
    align-items: center;
    margin-left: 50px;
    font-weight: bold;
}
.contact-item-name{
    width: 80px;
    margin-left: 30px;
    font-weight: bold;
}
.contact-build{
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    margin-left: 50px;
    font-weight: bold;
}
.contact-ttl{
    text-align: center;
    font-size: 24px;
    margin-bottom: 30px;
}
.contact-form{
    width: 85%;
    margin: 0px auto;
    height: 360px;
    border: solid;
    margin-bottom: 70px;
}
.contact-body{
    display: flex;
    align-items: center;
}
.contact-sex-btn{
    display: flex;
    align-items: center;
    margin-left: 20px;
}
.form-text{
    width: 260px;
    height: 40px;
    margin-left: 20px;
}
.form-created{
    width: 260px;
    height: 40px;
    margin-left: 20px;
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
.content-find{
    width: 100%;
}
.content-find-view{
    width: 85%;
    margin: 0 auto;
}
.find-header{
    text-align: left;
    width: 50%;
    /* 改行の禁止  */
    white-space:nowrap;
}
th{
    padding-bottom: 10px;
    border-bottom: 1px solid rgb(0, 0, 0);
}
td{
    padding-top: 10px;
}
tr{
    align-items: center;
}
.hedaer-th{
    width: 130px;
}
.tbody-opinion{
    margin-top: 6px;
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 1; /* 任意の行数を指定 */
}
.btn-delete {
    text-align: left;
    font-size: 12px;
    background-color: #030303;
    font-weight: bold;
    padding: 8px 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.4s;
    outline: none;
    border: 2px solid #feffff;
    color: #fdfefe;
}
</style>
<body>
<div class="contact">
    <h1 class="contact-ttl">管理システム</h1>

    <form action="{{ route('inquiry.search') }}" class="contact-form" method="GET">
        @csrf
        <div class="contact-main">
            <div class="contact-name" >
                <p class="contact-item">お名前</p>
                <div class="contact-body">
                    <input type="text" name="fullname" class="form-name" />
                </div>
            </div>


            <div class="contact-sex">
                <p class="contact-item-name">性別</p>
                <p class="contact-body">
                    <label class="contact-sex-btn">
                        <input type="radio" name="all-gender" class="sex-radio" checked="checked" value="全て"/>
                        <span class="contact-sex-txt">全て</span>
                    </label>
                    <label class="contact-sex-btn">
                        <input type="radio" name="man-gender" class="sex-radio" value="男性"/>
                        <span class="contact-sex-txt">男性</span>
                    </label>
                    <label class="contact-sex-btn">
                        <input type="radio" name="woman-gender" class="sex-radio" value="女性"/>
                        <span class="contact-sex-txt">女性</span>
                    </label>
                </p>
            </div>
        </div>

            <div class="contact-build">
                <p class="contact-item">登録日</p>
                    <p class="contact-body">
                        <input type="date" name="created-day1" class="form-created" />
                    </p>
                    <div class="wavyline"><p>~</p></div>
                    <p class="contact-body">
                        <input type="date" name="created-day2" class="form-created" />
                    </p>
            </div>

            <div class="contact-email">
                <p class="contact-item">メールアドレス</p>
                <p class="contact-body">
                    <input type="email" name="email" class="form-text" />
                </p>
            </div>

        <div class="contact-btn">
        <input class="contact-submit" type="submit" value="検索" />
        </div>
        <div class="contact-btn">
        <u class="reset"><a href="">リセット</a></u>
        </div>
    </form>

    <div class="content-find">
        <form action="{{route('inquiry.find')}}" method="GET"></form>
            @csrf
            <div  class="content-find-view">
                <table>
                    <tr class="find-header">
                        <th class="hedaer-th">ID</th>
                        <th class="hedaer-th">お名前</th>   
                        <th class="hedaer-th">性別</th>
                        <th class="hedaer-th">メールアドレス</th>
                        <th class="opinion-header">ご意見</th>
                        <th></th>
                    </tr>   
                @foreach ($contacts as $contact)
                <tr>
                    <td>
                        {{$contact->id}}
                    </td>
                    <td>
                        {{$contact->fullname}}
                    </td>
                    <td>  
                        {{$contact->gender}}
                    </td>
                    <td>  
                        {{$contact->email}}
                    </td>
                    <td class="tbody-opinion">  
                        {{$contact->opinion}}
                    </td>
                <form action="{{route('inquiry.delete', ['id' => $contact->id])}}" method="post">
                @csrf
                    <td>
                        <input class="btn btn-delete" type="submit" value="削除">
                    </td>
                </form>
                </tr>
                @endforeach
                </table>
            </div>
        </form>
    </div>    
</div>
        <script src="js/main.js"></script>      
</body>
</html>