<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin khởi tạo tài khoản</title>
</head>
<body>
<h1>
    Thông tin tài khoản:
</h1>
<div>
    <table>
        <tr>
            <td>Tên tài khoản: </td>
            <td>{{ $data->name }}</td>
        </tr>
        <tr>
            <td>Địa chỉ email: </td>
            <td>{{ $data->email }}</td>
        </tr>
        <tr>
            <td>Vài trò: </td>
            @foreach(config('account.type') as $type)
                @if($type['value'] == $data->type)
                    <td>{{ $type['name'] }}</td>
                @endif
            @endforeach
        </tr>
        <tr>
            <td>Mật khẩu: </td>
            <td>{{ $password }}</td>
        </tr>
    </table>
</div>
</body>
</html>
