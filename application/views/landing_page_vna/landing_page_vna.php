<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/libs/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/landing_page_vna.min.css">
    <script src="../assets/libs/jquery-1.11.1.min.js"></script>
    <script src="../assets/libs/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="../assets/js/landing_page_vna.min.js"></script>
</head>
<body>
    <div class='landing-page'>
        <div class="container">
            <div class="logo-bp-vna row">
                
                <div class="logo-bp col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src="../assets/img/landing_page_vna/logo_BP.png" alt="">
                </div>
                <div class="logo-vna col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src="../assets/img/landing_page_vna/logo_VNA.png" alt="">
                </div>
            </div>
            <div class="content">
                <span class='slogan'>Dặm bay cho cuộc sống thêm hay</span><br/>
                <strong class="register">ĐĂNG KÍ THẺ BÔNG SEN VÀNG TẠI BESTPRICE</strong>
                <div class="reward">
                    <span>- Tặng ngay <span class="font-montserrat-medium">500 dặm thường</span> -</span><br/>
                    <span>- Cơ hội nhận <span class="font-montserrat-medium">Voucher dịch vụ</span> trị giá đến <span class="font-montserrat-medium">5.000.000đ</span> -</span><br/>
                    <span>- Cơ hội nhận <span class="font-montserrat-medium">Vé máy bay miễn phí</span> của Vietnam Airlines -</span><br/>
                </div>
                
                <span class="expiry-date">- Thời gian áp dụng: <span class="font-montserrat-medium">từ 01-06-2019 - 31/03/2020</span> -</span><br/>
            </div>
        
        </div>
        <div class="register-middle">
            <div class="horizontal-line">

            </div>
            <div class="register-now">
                    ĐĂNG KÝ NGAY
            </div>
            <div class="horizontal-line">

            </div>
            <div class="clearfix"></div>
        </div>
        <div class="container">
            <div class="form-register">
                <form action="" method="post" onsubmit="return validate_form()">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 left-group-input">
                            <div class="row">
                                <div class="padding-right-0 col-xs-3 col-sm-3 col-md-5">
                                    <span class="float-right label-input">Danh xưng</span>
                                </div>
                                <div class="col-xs-8 col-sm-6 col-md-7">
                                    <div class="select_box">
                                        <select class="landing-page-input" name="sexual_title" id="sexual_title">
                                            <option value="male">Mr.</option>
                                            <option value="female">Ms.</option>
                                            <option value="female">Mrs.</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row margin-top-15">
                                <div class="padding-right-0 col-xs-3 col-sm-3 col-md-5">
                                    <span class="float-right label-input">Họ</span>
                                </div>
                                <div class="col-xs-8 col-sm-6 col-md-7">
                                    <input class="margin-bottom-5 landing-page-input" type="text" name="first_name" id="first_name">
                                    <span class="clearfix"></span>
                                    <span class="note-name">Theo CMND/Hộ Chiếu. Ví dụ: NGUYEN</span>
                                </div>
                            </div>
                            <div class="row margin-top-5">
                                 <div class="padding-right-0 col-xs-3 col-sm-3 col-md-5">
                                    <span class="float-right label-input">Đệm và Tên</span>
                                </div>
                                <div class="col-xs-8 col-sm-6 col-md-7">
                                    <input class="margin-bottom-5 landing-page-input" type="text" name="last_name" id="last_name">
                                    <span class="clearfix"></span>
                                    <span class="note-name">Theo CMND/Hộ chiếu. Ví dụ: THI THU HUONG</span>
                             
                                </div>
                                
                            </div>
                            <div class="row margin-top-5">
                                 <div class="padding-right-0 col-xs-3 col-sm-3 col-md-5">
                                    <span class="float-right label-input">Số điện thoại</span>
                                </div>
                                <div class="col-xs-8 col-sm-6 col-md-7">
                                    <input class="landing-page-input float-right phone" type="text" name="phone_number" id="phone_number">
                                    <select class="landing-page-input float-right phone-code" name="phone_code" id="phone_code">
                                        <?php foreach($country_array as $key => $country): $country_name = ucwords(strtolower($country["name"])); ?>

                                            <option value="<?=$country['code']?>" <?=set_select('phone_code', $country['code'], $key == 'VN')?>><?=$country_name . ' (+' . $country['code'] . ')'?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="row margin-top-15">
                                 <div class="padding-right-0 col-xs-3 col-sm-3 col-md-5">
                                    <span class="float-right label-input label-input">Email</span>
                                </div>
                                <div class="col-xs-8 col-sm-6 col-md-7">
                                    <input class="landing-page-input" type="text" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-sm-12 col-md-6 right-group-input">
                            <div class="row">
                                 <div class="padding-right-0 col-xs-3 col-sm-3 col-md-5">
                                    <span class="float-right label-input">Ngày sinh</span>
                                </div>
                                <div class="birthday-select col-xs-8 col-sm-6 col-md-7">
                                    <select class="landing-page-input day" name="day" id="day" onchange="validation_date()">
                                        <option value="">Ngày</option>
                                        <?php for($i = 1; $i <= 31; $i++): ?>
                                            <option class="day-value" value="<?=$i?>"><?=sprintf('%02d',$i)?></option>
                                        <?php endfor;?>
                                    </select>
                                    <select class="landing-page-input month" name="month" id="month" onchange="validation_date()">
                                        <option value="">Tháng</option>
                                        <?php for($i = 1; $i <= 12; $i++): ?>
                                            <option class="moth-value" value="<?=$i?>"><?=sprintf('%02d',$i)?></option>
                                        <?php endfor;?>
                                    </select>
                                    <select class="landing-page-input year" name="year" id="year" onchange="validation_date()">
                                        <option value="">Năm</option>
                                        <?php for($i = 2019; $i >= 1900; $i--): ?>
                                            <option class="year-value" value="<?=$i?>"><?=$i?></option>
                                        <?php endfor;?>
                                    </select>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="row margin-top-15">
                                 <div class="padding-right-0 col-xs-3 col-sm-3 col-md-5">
                                    <span class="float-right label-input">Quốc tịch</span>
                                </div>
                                <div class="col-xs-8 col-sm-6 col-md-7">
                                    <input class="landing-page-input" type="text" name="country" id="country">
                                </div>
                            </div>
                            <div class="row margin-top-15">
                                 <div class="padding-right-0 col-xs-3 col-sm-3 col-md-5">
                                    <span class="float-right label-input">Mã giảm giá</span>
                                </div>
                                <div class="col-xs-8 col-sm-6 col-md-7">
                                    <input class="landing-page-input" type="text" name="promotion_code" id="promotion_code">
                                </div>
                            </div>
                            <div class="row btn-submit">
                                 <div class="col-xs-3 col-sm-3 col-md-5"></div>
                                <div class="col-xs-8 col-sm-6 col-md-7">
                                    <button name="action" value="save">Đăng ký</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer">
            <div>
                <span class="svn-avo-bold company-bp">Công ty du lịch BestPrice</span><br/>
                <span class="svn-avo-bold ">VP Hà Nội: </span>12A ngõ Bà Triệu, phố Bà Triệu, Q.Hai Bà Trưng<br/>
                <span class="svn-avo-bold ">VP HCM: </span>95 Trần Quang Khải, Tân Định, Q.1<br/>
                <span class="svn-avo-bold ">Hotline: </span>19006505 (Nhấn phím 0)<br/>
                <span class="svn-avo-bold ">Email: </span>marketing@bestprice.vn<br/>
            </div>
        </div>
    </div>
</body>
</html>