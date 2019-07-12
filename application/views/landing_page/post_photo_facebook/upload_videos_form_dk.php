<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, maximum-scale=1.0" />
	<meta name="description" content="BestPrice - Đại lý đặt phòng khách sạn, vé máy bay, tour du lịch trực tuyến giá tốt nhất.  Khuyến mại, ưu đãi lớn - Dịch vụ tin cậy, hỗ trợ 24/7." />
	<meta name="robots" content="noindex,nofollow" />
	<title>Cuộc thi upload videos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    
    <link rel="stylesheet" href="../../../assets/css/upload_videos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://owa.bestprice.vn/assets/img/favicon.27042017.ico">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
<div class="content">
        <div class="bgr" style="width: 100%; margin: 0 auto; margin-top: -15px;">
            <img src="../../../assets/img/img-facebook/BGpopup.png" style="width: 100%">
        </div>
        <div class="detail-content" style="position: absolute; top: 100px; width: 100%; text-align: center;">

            <form name="frm" id="form_submit_data" method="POST" enctype="multipart/form-data" onsubmit='return validateForm()'>
                <div class="container">
                    <div class="tquan">

                    <h2 style="text-align: center; color: #fff; margin-bottom: 20px">Đăng ký tham gia cuộc thi upload videos</h2>
                        <div class="insert-information">
                            <div class="row up">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input autocomplete="off" class="name" type="text" name="full_name" id="full_name" placeholder="Họ tên"  style="width: 496px; height: 43px; font-size: 17px; padding-left: 5px;">
                                    <div class="notification">
                                        <span class='error' id='error_full_name' style="color: rgb(255, 255, 255); display: none;">Họ tên không được để trống!</span>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input autocomplete="off" class="birthday" type="text" name="birthday" id="birthday" placeholder="Ngày sinh" style="width: 496px; height: 43px; font-size: 17px; padding-left: 5px;">
                                    <div class="notification">
                                        <span class='error' id='error_wrong_birthday' style="color: rgb(255, 255, 255); display: none;">Ngày sinh không hợp lệ!</span>
                                        <span class='error' id='error_birthday' style="color: rgb(255, 255, 255); display: none;">Vui lòng chọn ngày sinh!</span>
                                    </div>
                                </div>

                            </div>

                            <div class="row down" style="margin-top: 20px">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input autocomplete="off" class="phone" type="text" name="phone" id="phone" placeholder="Số điện thoại" style="width: 496px; height: 43px; font-size: 17px; padding-left: 5px;">
                                    <div class="notification">
                                        <span class='error' id='error_phone' style="color: rgb(255, 255, 255); display: none;">Số điện thoại không được để trống!</span>
                                        <span class='error' id='error_wrong_phone' style="color: rgb(255, 255, 255); display: none;">Số điện thoại không đúng!</span>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input autocomplete="off" class="email" type="text" name="email" id="email" placeholder="Email" style="width: 496px; height: 43px; font-size: 17px; padding-left: 5px;">
                                    <div class="notification">
                                        <span class='error' id='error_email' style="color: rgb(255, 255, 255); display: none;">Email không được để trống!</span>
                                        <span class='error' id='error_wrong_email' style="color: rgb(255, 255, 255); display: none;">Email không đúng định dạng</span>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="choose-video" style="margin-top: 25px">
                            <input type="file" name="picture" id="file_info" class="custom-file-input" style="color: #fff; margin: auto;">
                            <p style="color: white">
                                <span class='error' id='error_picture' style="color: rgb(255, 255, 255); display: none;">Bạn chưa chọn file ảnh!</span>
                                <span class='error' id='error_picture_type' style="color: rgb(255, 255, 255); display: none;">Ảnh bạn chọn chưa đúng định dạng!</span>
                                <span class='error' id='error_picture_size' style="color: rgb(255, 255, 255); display: none;">Ảnh bạn chọn vượt quá kích thước và dung lượng cho phép. Vui lòng chọn ảnh định dạng JPG, PNG và không quá 10MB</span>
                            </p>
                        </div>

                        <div class="describe" style="top: 25px">
                            <h3 style="color: rgb(255, 255, 255); font-weight: 700;">-MÔ TẢ VIDEO-</h3>
                            <h4 style="color: rgb(255, 255, 255); font-style: italic">(Nếu có)</h4>
                            <div class="fill-description">
                                <textarea placeholder="Nhập Mô Tả Ảnh" class="description-desktop" name="description" id="note" data-toggle="modal" data-target="#abc" onkeydown="checkWordLen(this);" style="resize: none; min-height: auto; width: 363px; height: 130px; overflow: hidden; padding: 10px;"></textarea>
                            </div>
                            <div class="send-img" style="text-align: -webkit-center;">

                                <div class="margin-top-10" id="term_agreement">
                                    <div class="upload" style="margin-top: 15px;">
                                        <button type="submit" value="submit" id="id_upload" name="action" style="color: rgb(0, 0, 0); font-weight: 700; background-color: rgb(255, 255, 255); width: 30%; height: 49px; font-size: 20px; border-width: 1px; border-style: solid; border-color: rgb(153, 153, 153); border-image: initial; border-radius: 0px; padding: 5px 3px 0px;">
                                            <span id='btn_default'>GỬI VIDEO<span style='margin-left: 5px' class='glyphicon glyphicon-open'></span></span>
                                            <span style='display:none' id='btn_loading'><i style='margin-right: 4px' class="fa fa-spinner fa-spin"></i>ĐANG GỬI...</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
    	
        var fileImg = '';
        $('input[type="file"]').change(function(e){
            fileImg = e.target.files[0];
        });
        function validateForm() {
            var full_name = $('#full_name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var birthday = $('#birthday').val();
            
            var check = true;

            if (full_name === '' || full_name === null) {
                $('#error_full_name').show();
                $("html, body").animate({scrollTop: ($('#full_name').offset().top-100)}, 'slow');
                alert('Họ tên không được để trống!');
                return false;
                check = false;

            } else {
                $('#error_full_name').hide();
            }

            if (birthday === '' || birthday === null) {
                $('#error_birthday').show();
                $("html, body").animate({scrollTop: ($('#birthday').offset().top-100)}, 'slow');
                alert('Ngày sinh không được để trống!');
                return false;
                check = false;
            } else {
                $('#error_birthday').hide();
                $('#error_wrong_birthday').hide();

                birthday = Date.parse(d_m_Y_to_m_d_Y(birthday));
                time_now = new Date();
                
                if(birthday > time_now)
                {
                    $('#error_wrong_birthday').show();
                    $("html, body").animate({scrollTop: ($('#birthday').offset().top-100)}, 'slow');
                    check = false;
                }else{
                    $('#error_wrong_birthday').hide();
                }
            }

            if (phone === '' || phone === null) {
                $('#error_phone').show();
                $('#error_wrong_phone').hide();
                $("html, body").animate({scrollTop: ($('#phone').offset().top-100)}, 'slow');
                alert('Số điện thoại không được để trống!');
                return false;
                check = false;
            } else {
                $('#error_phone').hide();
                if (!(/^0(9\d{8}|8\d{8}|7\d{8}|3\d{8}|5\d{8})$/.test(phone))) {
                    $('#error_wrong_phone').show();
                    $("html, body").animate({scrollTop: ($('#phone').offset().top-100)}, 'slow');
                    alert('Số điện thoại không đúng!');
                    return false;
                    check = false;
                } else {
                    $('#error_wrong_phone').hide();
                }
            }

            if (email === '' || email === null) {
                $('#error_email').show();
                $('#error_wrong_email').hide();
                $("html, body").animate({scrollTop: ($('#email').offset().top-100)}, 'slow');
                alert('Email không được để trống!');
                return false;
                check = false;
            } else {
                if (!(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email))) {
                    $('#error_wrong_email').show();
                    $('#error_email').hide();
                    $("html, body").animate({scrollTop: ($('#email').offset().top -100)}, 'slow');
                    alert('Email không hợp lệ!');
                    return false;
                    check = false;
                } else {
                    $('#error_wrong_email').hide();
                }
                $('#error_email').hide();

            }

            if(fileImg == ''){
                $('#error_picture').show();
                alert('Bạn chưa chọn file video!');
                return false;
                check = false;
            }else{
                $('#error_picture').hide();
                var img_name = fileImg.name.toLowerCase();
                if(img_name.indexOf('.mov') != -1 || img_name.indexOf('.mpeg4') != -1 || img_name.indexOf('.avi') != -1 || img_name.indexOf('.wmv') != -1 || img_name.indexOf('.mp4') != -1 || img_name.indexOf('.mpegps') != -1 || img_name.indexOf('.flv') != -1 || img_name.indexOf('.hevc') != -1 || img_name.indexOf('.3gpp') != -1 || img_name.indexOf('.WebM') != -1 || img_name.indexOf('.DNxHR') != -1 || img_name.indexOf('.ProRes') != -1 || img_name.indexOf('.CineForm') != -1){
                    $('#error_picture_type').hide();
                }else{
                	$('#error_picture_type').show();
                	alert('Video bạn chọn chưa đúng định dạng. Định dạng được chấp nhận MP4.');
                	return false;
               		check = false;
                }
                
            }

            if (check == true) {
                $('#btn_default').hide();
                $('#btn_loading').show();
            }
            return check;
        } 
        function d_m_Y_to_m_d_Y(date)
            {
                var from = date.split("/");

                var f = new Date(from[2], from[1] - 1, from[0]);

                return f;
            }

        
        $(function() {
            
            
            if ($(window).width() < 767) {

                $('#note').attr('data-toggle', 'modal');

                var witdh_window = $(window).width();

                $('#modal_success img').css('width',witdh_window-20+'px');
                $('.btn_go_back').css('width','27%');
                $('.btn_go_back').css('margin-top','-10%');
                $('.btn_go_back').css('font-size','10px');
                $('.btn_go_back').css('height','13%');
                $('.btn_go_back').css('left','38%');
                
            } else {
                $('#note').attr('data-toggle', ' ');
            }

            $( "#birthday" ).datepicker({
                dateFormat: "dd-mm-yy",
                monthNames: [ "Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12" ],
                monthNamesShort: [ "Th 1", "Th2", "Th 3", "Th 4", "Th 5", "Th 6", "Th 7", "Th 8", "Th 9", "Th 10", "Th 11", "Th 12" ],
                //maxDate: new Date(),
                dayNames: [ "CN", "T2", "T3", "T4", "T5", "T6", "T7" ],
    			dayNamesMin: [ "CN", "T2", "T3", "T4", "T5", "T6", "T7" ],
    			changeMonth: true,
    		  	changeYear: true,
    		  	yearRange : 'c-118:c+1'
            });
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-196981-20"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-196981-20');
	</script>
</body>