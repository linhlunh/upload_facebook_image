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
        @media ( min-width: 768px) {
            .image {
                float: left;
            }
            .info-user {
                margin-top: 15px;
            }
        }
    </style>
</head>

<body>
    <div>
        <div class='mg-top-15'>
            Chào <?=!empty($full_name) ? $full_name : '' ?>
        </div>
        <div class='mg-top-15'>
            Cảm ơn bạn đã tham chương trình <b>Đăng ảnh đón xuân - khuân tour miễn phí</b> của BestPrice. Đây là những thông tin bạn đã đăng ký với chúng tôi:
        </div>
        <div class='mg-top-15'>
            <div class='image' style='margin-right: 15px'>
                <img style='height: 149.5px' src='<?=!empty($urlImage) ? $urlImage : 'https://ci6.googleusercontent.com/proxy/pxZJXLH-vUlePdtLF-vCRHtWAo9nvNKoX2C14qYDufSLi2an1t-tcAYiOFWlPF0z9TouptT4zksgUvj6XfnYbAOmmr-Rsy3DyvTWd54eHtoRGliK8jBTfnhz8P-4k3fQIvIy8ctHtieklqSDiXQU9ICzbqiwAb-aqW1MAg6fbTjv5oTmitfRSwWknzshh01gL8O0qEIeS2gMPhneIdfTr5LYYbaAeQn78ZHJoWcGlZdLeFaHquePkRMcQ1Zp6kjzsU_jil5b=s0-d-e1-ft#https://scontent.xx.fbcdn.net/v/t1.0-0/p130x130/48394510_2242130239154336_5178640698139738112_n.jpg?_nc_cat=108&_nc_ht=scontent.xx&oh=0661636b07f39572f4451fdaafc9a735&oe=5C9E1957' ?>'/><br/>
            </div>
            <div class='info-user' style='line-height: 30px'>
                <b>Mã dự thi: </b><?=!empty($event_code) ? $event_code : ''?><br/>
                <b>Họ tên: </b><?=!empty($full_name) ? $full_name : '' ?><br/>
                <b>Ngày sinh: </b><?=!empty($birthday) ? date('d-m-Y',strtotime($birthday)) : '' ?><br/>
                <b>Điện thoại: </b><?=!empty($phone) ? $phone : '' ?><br/>
                <b>Email: </b><?=!empty($email) ? $email : '' ?><br/>
            </div>
            <div style='clear:both'></div>
        </div>
        <div class='mg-top-15'>
            <b>Hình ảnh của đã được đăng lên Album dự thi của chương trình tại: </b><a style='margin-right: 15px' href="<?=!empty($facebook_picture_link) ? $facebook_picture_link : '' ?>">Link facebook</a>
            <iframe src="https://www.facebook.com/plugins/share_button.php?href=https://www.facebook.com/1148101135223924/photos/a.2235410473159646/2240941975939829/?type=3&layout=button_count&size=small&mobile_iframe=true&appId=416607848685709&width=78&height=20" width="78" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe><br/>
        </div>
        <div style='line-height: 30px' class='mg-top-15'>
            Hãy nhanh tay kêu gọi 500 anh em vào cày điểm và giành giải thường cao nhất nhé!<br/>
            Để đảm bảo tính công bằng cho cuộc thi. Ban tổ chức xin lưu ý bạn không dùng các hình thức tăng like/share/tim ảo vì những like share không hợp lệ sẽ không được tính điểm nhé!<br/>
            Mong rằng bạn sẽ là người giành giải nhất của BestPrice!
        </div>
    </div>
</body>

</html>