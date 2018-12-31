<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <table>
            <tr>
                <td>Tên: </td>
                <td><?=$oauth_users['full_name']?></td>
            </tr>
            <tr>
                <td>Mã số: </td>
                <td><?=$oauth_users['event_code']?></td>
            </tr>
            <tr>
                <td>Ngày sinh: </td>
                <td><?=$oauth_users['birthday']?></td>
            </tr>
            <tr>
                <td>Số điện thoại: </td>
                <td><?=$oauth_users['phone']?></td>
            </tr>
        </table>
    </div>
    <div>
        <div>Chi tiết lỗi: </div>
        <table>
            <?php foreach ($variable as $key => $value) : ?>
                <td><?= $key ?>: </td>
                <td><?= $value ?></td>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>