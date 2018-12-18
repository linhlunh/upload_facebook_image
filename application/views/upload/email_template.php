<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .mg-top-15 {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div>
        <div class='mg-top-15'>
            Chào <?=!empty($full_name) ? $full_name : '' ?>
        </div>
        <div class='mg-top-15'>
            Cảm ơn bạn đã tham chương trình "Đăng ảnh đón xuân - khuân tour miễn phí" của BestPrice. Đây là những thông tin bạn đã đăng ký với chúng tôi:
        </div>
        <div style='line-height: 30px'>
            <b>Mã dự thi: </b>BP<?=!empty($id) ? str_pad($id,4,'0',STR_PAD_LEFT) : ''?><br/>
            <b>Họ tên: </b><?=!empty($full_name) ? $full_name : '' ?><br/>
            <b>Ngày tháng năm sinh: </b><?=!empty($birthday) ? date('d-m-Y',strtotime($birthday)) : '' ?><br/>
            <b>Diện thoại: </b><?=!empty($phone) ? $phone : '' ?><br/>
            <b>Email: </b><?=!empty($email) ? $email : '' ?><br/>
            <b>Ảnh tham dự thi: </b><img src='<?=!empty($picture) ? $picture : '' ?>'/><br/>
            <b>Hình ảnh của đã được đăng lên Album dự thi của chương trình tại: </b><?=!empty($facebook_picture_link) ? $facebook_picture_link : '' ?> .<br/>
            <iframe src="https://www.facebook.com/plugins/share_button.php?href=https://www.facebook.com/1148101135223924/photos/a.2235410473159646/2240941975939829/?type=3&layout=button_count&size=small&mobile_iframe=true&appId=416607848685709&width=78&height=20" width="78" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe><br/>
            <div>Hãy nhanh tay kêu gọi 500 anh em vào cày điểm và giành giải thường cao nhất nhé!</div>
        </div>
        <div class='mg-top-15'>
            Để đảm bảo tính công bằng cho cuộc thi. Ban tổ chức xin lưu ý bạn không dùng các hình thức tăng like/share/tim ảo vì những like share không hợp lệ sẽ không được tính điểm nhé!
        </div>
        <div class='mg-top-15'>
            Mong rằng bạn sẽ là người giành giải nhất của BestPrice!
        </div>
    </div>
</body>

</html>