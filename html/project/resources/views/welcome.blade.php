<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <h1>取得データ{{$Data}}</h1>
    <!-- All -->
    <form action="/office_mas" method="post" id="All">
        @csrf
        axreq:All<input type="hidden" name="axreq" value="All">
        <input type="submit" value="送信" form="All"><br>
    </form>

    <!-- Single -->
    <form action="/office_mas" method="post" id="Single">
        @csrf
        axreq:Single<input type="hidden" name="axreq" value="Single">
        id:<input type="lavel" name="id" value="1">
        <input type="submit" value="送信" form="Single"><br><br>
    </form>

    <!-- Update -->
    <form action="/office_mas" method="post" id="Update">
        @csrf
        axreq:Single<input type="hidden" name="axreq" value="Update">
           id:<input type="lavel" name="id" value=""><br>
         name:<input type="lavel" name="name" value=""><br>
        title:<input type="lavel" name="title" value=""><br>
          age:<input type="lavel" name="age" value="">
        <input type="submit" value="送信" form="Update"><br><br>
    </form>

    <!-- AddSingle -->
    <form action="/office_mas" method="post" id="AddSingle">
        @csrf
        axreq:Single<input type="hidden" name="axreq" value="AddSingle">
           id:<input type="lavel" name="id" value=""><br>
         name:<input type="lavel" name="name" value=""><br>
        title:<input type="lavel" name="title" value=""><br>
          age:<input type="lavel" name="age" value="">
        <input type="submit" value="送信" form="AddSingle"><br>
    </form>
</body>
</html>