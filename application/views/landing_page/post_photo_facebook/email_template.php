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
            Chào <b><?=!empty($full_name) ? $full_name : '' ?></b>
        </div>
        <div class='mg-top-15'>
            Cảm ơn bạn đã tham chương trình <b>Đăng ảnh đón xuân - khuân tour miễn phí</b> của BestPrice. Đây là những thông tin bạn đã đăng ký với chúng tôi:
        </div>
        <div class='mg-top-15'>
            <div class='image' style='margin-right: 15px'>
                <img style='height: 250px' src='<?=!empty($urlImage) ? $urlImage : 'https://ci6.googleusercontent.com/proxy/pxZJXLH-vUlePdtLF-vCRHtWAo9nvNKoX2C14qYDufSLi2an1t-tcAYiOFWlPF0z9TouptT4zksgUvj6XfnYbAOmmr-Rsy3DyvTWd54eHtoRGliK8jBTfnhz8P-4k3fQIvIy8ctHtieklqSDiXQU9ICzbqiwAb-aqW1MAg6fbTjv5oTmitfRSwWknzshh01gL8O0qEIeS2gMPhneIdfTr5LYYbaAeQn78ZHJoWcGlZdLeFaHquePkRMcQ1Zp6kjzsU_jil5b=s0-d-e1-ft#https://scontent.xx.fbcdn.net/v/t1.0-0/p130x130/48394510_2242130239154336_5178640698139738112_n.jpg?_nc_cat=108&_nc_ht=scontent.xx&oh=0661636b07f39572f4451fdaafc9a735&oe=5C9E1957' ?>'/><br/>
            </div>
            <div class='info-user' style='line-height: 30px'>
                <b>Mã dự thi: </b><?=!empty($event_code) ? $event_code : ''?><br/>
                <b>Họ tên: </b><?=!empty($full_name) ? $full_name : '' ?><br/>
                <b>Ngày sinh: </b><?=!empty($birthday) ? date('d-m-Y',strtotime($birthday)) : '' ?><br/>
                <b>Điện thoại: </b><?=!empty($phone) ? $phone : '' ?><br/>
                <b>Email: </b><?=!empty($email) ? $email : '' ?><br/>
                <b>Mô tả: </b><?=!empty($description) ? $description : '' ?>
            </div>
            <div style='clear:both'></div>
        </div>
        <div class='mg-top-15'>
            <b>Hình ảnh của đã được đăng lên Album dự thi của chương trình tại: </b><a style='margin-right: 15px' href="<?=!empty($facebook_picture_link) ? $facebook_picture_link : '' ?>"><?=!empty($facebook_picture_link) ? $facebook_picture_link : '' ?></a>
        </div>
        <div style='line-height: 30px' class='mg-top-15'>
            Hãy nhanh tay kêu gọi 500 anh em vào cày điểm và giành giải thường cao nhất nhé!<br/>
            Để đảm bảo tính công bằng cho cuộc thi. Ban tổ chức xin lưu ý bạn không dùng các hình thức tăng like/share/tim ảo vì những like share không hợp lệ sẽ không được tính điểm nhé!<br/>
            Mong rằng bạn sẽ là người giành giải nhất của BestPrice!
        </div>
    </div>
    <footer>
        <div class="mail-footer">
            <div style="position: relative; height: 55px; margin: 15px 0px;">
                <img style="position: absolute; left: 0;" alt="BestPrice Travel" src="<?=get_static_resources('/img/icon/bestpricevn-logo.png')?>">
            </div>

            <div style="color: #15c; font-size: 14px;">BestPrice - Đặt vé máy bay, tour du lịch và phòng khách sạn giá tốt nhất</div>

            <div style="color: #15c; font-size: 14px; font-weight: bold; padding-top: 10px;">CÔNG TY DU LỊCH BESTPRICE</div>
            
            <div class="address">
                <table style="margin-top: 0px; margin-left: -2px;">
                    <tbody>
                        <tr>
                            <td style="color: #fe8802;">Hotline</td>
                            <td >:</td>
                            <td style="color: #15c;">1900 6505 (Nhấn phím 0)</td>
                        </tr>
                        <tr>
                            <td style="color: #fe8802;">Email</td>
                            <td >:</td>
                            <td>
                                <a style="text-decoration: none;" href="mailto:marketing@bestprice.vn">marketing@bestprice.vn</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="color: #fe8802;">Website</td>
                            <td>:</td>
                            <td>
                                <a style="text-decoration: none;" href="<?='https://www.bestprice.vn'?>" target="_blank">www.bestprice.vn</a>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" style="color: #fe8802;">Hà Nội</td>
                            <td valign="top">:</td>
                            <td><a style="text-decoration: none;" target="_blank" href="<?='https://www.google.com/maps/place/BestPrice+Travel/@21.012593,105.848121,19z/data=!4m5!3m4!1s0x0:0x5ce29006574d093d!8m2!3d21.012842!4d105.848402'?>"><?=lang('company_address_short')?></a></td>
                        </tr>
                        <tr>
                            <td valign="top" style="color: #fe8802;">TP HCM</td>
                            <td valign="top">:</td>
                            <td><a style="text-decoration: none;" target="_blank" href="https://www.google.com/maps/place/BestPrice+Travel/@10.7918485,106.6926923,19.54z/data=!4m8!1m2!2m1!1sbestprice+travel!3m4!1s0x317528d4ec476315:0xaeeb0a968b8fbf04!8m2!3d10.792028!4d106.692899"><?=lang('company_hcm_address_short')?></a></td>
                        </tr>                
                    </tbody>
                </table>
            </div>
            <div class="banner" style="position: relative; margin: 5px 0px 0px 0px;">
                <a target="_blank" href="https://www.bestprice.vn/tour/chu-de-chum-tour-tet-2019-1.html?utm_source=email&utm_medium=signature&utm_campaign=signature121218">
                    <img style="position: absolute; left: 0;" alt="Banner Email BestPrice Travel" src="<?=get_static_resources('/img/email/chukiMailTet.png')?>">
                </a>
            </div>
            <div class="social-links">
                <table style="margin-left: -2px; font-size: 13px;">
                    <tbody>
                        <tr>
                            <td valign="middle">Cập nhật thông tin mới nhất tại:</td>
                            <td style="padding-left: 10px;">
                                <a target="_blank" href="<?=LINK_FACE_BOOK?>">
                                    <img alt="Logo Facebook" src="<?=get_static_resources('/img/email/fb.png')?>">
                                </a>
                            </td>
                            <td>
                                <a style="text-decoration: none; color: #333;" target="_blank" href="<?=LINK_FACE_BOOK?>">
                                    Facebook
                                </a>
                            </td>
                            <td style="padding-left: 10px;">
                                <a target="_blank" href="<?=LINK_ZALO?>">
                                    <img alt="Logo Zalo" src="<?=get_static_resources('/img/email/zalo.png')?>">
                                </a>
                            </td>
                            <td>
                                <a style="text-decoration: none; color: #333;" target="_blank" href="<?=LINK_ZALO?>">
                                    Zalo
                                </a>
                            </td>
                            <td style="padding-left: 10px;">
                                <a style="text-decoration: none; color: #333;" target="_blank" href="https://www.bestprice.vn/blog/">
                                    <img alt="Logo Blog" src="<?=get_static_resources('/img/email/blog.png')?>">
                                </a>
                            </td>
                            <td>
                                <a style="text-decoration: none; color: #333;" target="_blank" href="https://www.bestprice.vn/blog/">
                                    Blog
                                </a>
                            </td>
                        </tr>                
                    </tbody>
                </table>
            </div>
        </div>
    </footer>
</body>

</html>