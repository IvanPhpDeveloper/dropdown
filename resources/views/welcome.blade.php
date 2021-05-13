<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dropdown</title>
</head>
<body>
<form action="{{route('send')}}" method="get">
    @csrf
    <label for="text"> Choose User</label>
    <select name="name_of_user" id="select_user">
        @foreach($arrayUsers as $user)
       <option value="{{$user['ID']}}">{{$user['NAME_LASTNAME']}}</option>
        @endforeach
    </select>
    <label for="text">Write message here</label>
    <input type="text" id="message" name="massage">
    <input type="submit" value="Send">
</form>
</body>
</html>
