<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, maximum-scale=1.0" />
	<meta name="description" content="BestPrice - Đại lý đặt phòng khách sạn, vé máy bay, tour du lịch trực tuyến giá tốt nhất.  Khuyến mại, ưu đãi lớn - Dịch vụ tin cậy, hỗ trợ 24/7." />
	<meta name="robots" content="noindex,nofollow" />
	<title>Đăng ảnh đón xuân - Khuân tour miễn phí - BestPrice</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    
    <link rel="stylesheet" href="../../../assets/css/upload.min.04010942.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://owa.bestprice.vn/assets/img/favicon.27042017.ico">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body class="body-content">
    <div class="content">
        <div class="bgr" style="width: 100%; margin: 0 auto; margin-top: -15px;">
            <img src="../../../assets/img/img-facebook/BG-1.png" style="width: 105%">
        </div>
        <div class="detail-content">

            <div class="img-prize">
                <img src="../../../assets/img/img-facebook/giaithuong.png" alt="">
            </div>
            <form name="frm" id="form_submit_data" method="POST" enctype="multipart/form-data" onsubmit='return validateForm()'>
                <div class="tquan">
                    <div class="insert-information">
                        <div class="row up">

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 input-left">
                                <input autocomplete="off" class="name" type="text" name="full_name" id="full_name" placeholder="Họ tên">
                                <div class="notification">
                                    <span class='error' id='error_full_name'>Họ tên không được để trống!</span>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 input-right birthday-1">
                                <input autocomplete="off" class="birthday" type="text" name="birthday" id="birthday" placeholder="Ngày sinh">
                                <div class="notification">
                                    <span class='error' id='error_wrong_birthday'>Ngày sinh không hợp lệ!</span>
                                    <span class='error' id='error_birthday'>Vui lòng chọn ngày sinh!</span>
                                </div>
                            </div>

                        </div>

                        <div class="row down">

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 input-left">
                                <input autocomplete="off" class="phone" type="text" name="phone" id="phone" placeholder="Số điện thoại">
                                <div class="notification">
                                    <span class='error' id='error_phone'>Số điện thoại không được để trống!</span>
                                    <span class='error' id='error_wrong_phone'>Số điện thoại không đúng!</span>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 input-left">
                                <input autocomplete="off" class="email" type="text" name="email" id="email" placeholder="Email">
                                <div class="notification">
                                    <span class='error' id='error_email'>Email không được để trống!</span>
                                    <span class='error' id='error_wrong_email'>Email không đúng định dạng</span>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="choose-img">
                        <input type="file" name="picture" id="file_info" class="custom-file-input" style="color: #fff">
                        <p style="color: white">
                            <span class='error' id='error_picture'>Bạn chưa chọn file ảnh!</span>
                            <span class='error' id='error_picture_type'>Ảnh bạn chọn chưa đúng định dạng!</span>
                            <span class='error' id='error_picture_size'>Ảnh bạn chọn vượt quá kích thước và dung lượng cho phép. Vui lòng chọn ảnh định dạng JPG, PNG và không quá 10MB</span>
                        </p>
                    </div>

                    <div class="describe">
                        <h3>-MÔ TẢ ẢNH-</h3>
                        <h4>(Nếu có)</h4>
                        <div class="fill-description">
                            <textarea placeholder="Nhập Mô Tả Ảnh" class="description-desktop" name="description" id="note" data-toggle="modal" data-target="#abc" onkeydown="checkWordLen(this);"></textarea>
                            <script>
                                function checkWordLen(element) {
                                    element.style.height = "100px";
                                    element.style.height = (element.scrollHeight) + "px";

                                    var wordLen = 100,
                                        len;
                                    $('#note').keydown(function(event) {
                                        len = $('#note').val().split(/[\s]+/);
                                        if (len.length > wordLen) {
                                            $('#note').val(len.splice(0, 100).join(' ') + ' ');
                                            if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 37 || event.keyCode == 38 || event.keyCode == 39 || event.keyCode == 40) {

                                            } else if (event.keyCode < 48 || event.keyCode > 57) {
                                                event.preventDefault();
                                            }
                                            element.style.height = "100px";
                                            element.style.height = (element.scrollHeight) + "px";
                                        }

                                    });
                                }
                                
                            </script>
                            <div class="modal fade " id="abc" tabindex="-1" role="dialog" aria-labelledby="abc" aria-hidden="true">
                                <div class="modal-dialog" role="document" style="width: 80%; margin-left: 30px; margin-top: 170px;">
                                    <div class="modal-content" style="width: 100%;">
                                        <h3 style="color: #000000; text-align: center;">MÔ TẢ</h3>
                                        <div class="modal-body">
                                            <div class="form-group" style="">
                                                <textarea style="width: 100%; height: 180px; margin-left: 0px" class="form-control control-1" id="text" onkeyup="checkWord(this);" placeholder="Nhập Mô Tả Ảnh"></textarea>

                                                <script>
                                                    function checkWord(element) {
                                                        var x = document.getElementById("text").value;
                                                        document.getElementById("note").innerHTML = x;
                                                    }
                                                    var word = 100,
                                                        len;
                                                    $('#text').keydown(function(event) {
                                                        len = $('#text').val().split(/[\s]+/);
                                                        if (len.length > word) {

                                                            $('#text').val(len.splice(0, 100).join(' ') + ' ');

                                                            if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 37 || event.keyCode == 38 || event.keyCode == 39 || event.keyCode == 40) {} else if (event.keyCode < 48 || event.keyCode > 57) {
                                                                event.preventDefault();
                                                            }
                                                        }
                                                    });
                                                    $('body').click(function(){
                                                        if($('#abc').hasClass('in')){
                                                            
                                                            
                                                            len = $('#text').val().split(/[\s]+/);
                                                            if (len.length > word) {

                                                                $('#text').val(len.splice(0, 100).join(' ') + ' ');

                                                                if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 37 || event.keyCode == 38 || event.keyCode == 39 || event.keyCode == 40) {} else if (event.keyCode < 48 || event.keyCode > 57) {
                                                                    event.preventDefault();
                                                                }
                                                            }else{
                                                                var x = document.getElementById("text").value;
                                                                document.getElementById("note").innerHTML = x;
                                                            }
                                                        }
                                                    });
                                                    
                                                </script>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #fff; color: #000000; font-size: 11px; border: 1px solid;">Đóng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="regulations" style="color: #fff; margin-top: 10px;">
                            <a style="text-decoration: none;" class="condition">Khi gửi ảnh là bạn đã đồng ý với thể lệ và</a><br/>
                            <a style="text-decoration: underline;" class="agree" href="" data-toggle="modal" data-target="#exampleModalLong">Quy định của chương trình</a>
                        </div>

                        <div class="modal fade popup-1" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="content-regulations" style="background-image: url('../../../assets/img/img-facebook/BGpopup.png'); margin: 0 auto; overflow: hidden; width: 101%; margin-left: -1px; text-align: justify;">
                                        <img src="../../../assets/img/img-facebook/quydinh.png" alt="">
                                        <div class="container">
                                            <div class="abc" style="margin-top: -10px;width: 100%; margin-left: 15px;"><button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border-radius: 25px;">
                                                <span class="glyphicon glyphicon-remove" aria-hidden="true" style="position: sticky;"></span>
                                        </div>
                                            <div class="content-text" style="margin-top: 15px">
                                                <a class="text">Sản phẩm dự thi thể hiện dưới dạng file ảnh định dạng <span>JPG, PNG</span> và không quá <span>10MB</span>, Ảnh có thể chỉnh <span>photoshop, sửa ánh sáng, màu sắc</span> nhưng <span style="font-weight: bold;">không được thay đổi về nội dung ảnh</span>, không gắn chữ liên quan tới bất kỳ nhãn hiệu nào, không gắn logo của bất cứ nhãn hiệu nào trong ảnh.</a><br/>
                                            </div>

                                            <div class="content-text-2" style="margin-top: 5px">
                                                <a class="text-2">Một người chỉ có thể tham gia tối đa 1 ảnh.</a><br/>
                                            </div>

                                            <div class="content-text-3" style="margin-top: 5px">
                                                <a>-  Ảnh tham gia chương trình do người tham dự tự chụp và gửi tham dự, ban tổ chức không nhận bài dự thi được sưu tầm từ Internet.</a><br/>
                                                <a>-  Ban tổ chức có quyền từ chối đăng những ảnh không phù hợp với quy chế chương trình hoặc vi phạm thuần phong mỹ tục và các quy định của nhà nước.</a><br/>
                                                <a>-  Người tham gia hoàn toàn chịu trách nhiệm về bản quyền của ảnh tham dự, nếu có tranh chấp, trong vòng 3 ngày, phải gửi thông tin để chứng minh về bản quyền ảnh dự thi. Ảnh vi phạm bản quyền sẽ bị gỡ khỏi trang.</a><br/>
                                                <a>-  Quà tặng không được quy đổi thành tiền mặt trong bất cứ trường hợp nào nhưng có thể được chuyển nhượng.</a><br/>
                                                <a>-  BTC có quyền tạm dừng cuộc thi của những bài dự thi có dấu hiệu bất thường, có số like tăng đột biến hoặc các dấu hiện gian lận khác.</a><br/>
                                                <a>-  Người tham gia dự thi không được dùng phần mềm hay bất kì công cụ nào tác động vào tác phẩm để tăng tim, like, share, nếu phát hiện BTC sẽ huỷ kết quả bài dự thi của thí sinh đó.</a><br/>
                                                <a>- BTC nghiêm cấm các hành vi gian lận dưới mọi hình thức. Những tấm ảnh dự thi có dấu hiệu gian lận (tạo nick ảo, like ảo, ...) BTC sẽ không trao giải và sẽ loại khỏi kết quả cuối cùng mà không cần báo trước</a><br/>
                                                <a>- Tham dự cuộc thi là mặc nhiên chấp nhận mọi quyết định của BTC. Trong mọi trường hợp, quyết định của BTC là quyết định cuối cùng.</a><br/>
                                                <a>- Thời hạn sử dụng giải thưởng sẽ được thông báo cụ thể khi trao giải. Người nhận giải trước khi sử dụng dịch vụ phải đăng ký với BestPrice trước 2 tuần.</a><br/>
                                                <a>- Trong vòng 72 giờ kể từ khi thông báo người thắng cuộc, nếu BestPrice không liên hệ được với người thắng cuộc, giải thưởng sẽ được trao cho người có số điểm cao kế tiếp.</a><br/>
                                                <a style="color: #f9d202">	*Quyền sử dụng ảnh</a><br/>
                                                <a>-Ban tổ chức có quyền xuất bản, quảng bá thương mại với ảnh dự thi mà không cần phải báo trước và không cần thêm bất kỳ một chi phí nào, được sử dụng trưng bày, lựa chọn ảnh đăng trên các phương tiện thông tin, ấn phẩm</a><br/>
                                                <a style="color: #f9d202">	*Hạn chế trách nhiệm</a><br/>
                                                <a>- Ban tổ chức không chịu trách nhiệm về những thông tin khai không đúng của người tham gia cuộc thi</a><br/>
                                                <a>- Ban tổ chức không chịu trách nhiệm trong trường hợp cuộc thi bị hủy bỏ hoặc hoãn vì những lý do bất khả kháng, khách quan như bị đánh sập mạng, thiên tai, chiến tranh…</a><br/>
                                                <a>- Ban tổ chức không chịu trách nhiệm khi ảnh gửi tới chương trình bị hỏng, biến dạng hay thay đổi chất lượng do đường truyền hoặc sự cố mạng Internet.</a><br/>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="send-img">

                            <div class="margin-top-10" id="term_agreement">
                                <div class="upload" style="margin-top: 15px;">
                                    <button type="submit" value="submit" id="id_upload" name="action">
                                        <span id='btn_default'>GỬI ẢNH<span style='margin-left: 5px' class='glyphicon glyphicon-open'></span></span>
                                        <span style='display:none' id='btn_loading'><i style='margin-right: 4px' class="fa fa-spinner fa-spin"></i>ĐANG GỬI...</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="ds-desktop">
                <div class="content-prize">

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 img-1">
                            <img src="../../assets/img/img-facebook/giainhat.png" alt="">
                        </div>


                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 title-1">
                            <h1 style="color: #fff; font-weight: bold">Tour Thái Lan 5N4Đ cho 2 người</h1>
                            <h3 style="color: #fff">Trị Giá:<a style="font-weight: bold; color: #fff"> 12.000.000vnđ</a></h3>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 img-2">
                            <img src="../../assets/img/img-facebook/giainhi.png" alt="" style="width: 123%">
                        </div>


                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 title-2 giai-nhi">
                            <h1 style="color: #fff; font-weight: bold">Tour du thuyền Starlight 5* 2N1Đ cho 2 người</h1>
                            <h3 style="color: #fff">Trị Giá:<a style="font-weight: bold; color: #fff"> 7.600.000vnđ</a></h3>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 img-3">
                            <img src="../../assets/img/img-facebook/giaiba.png" alt="">
                        </div>


                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 title-3">
                            <h1 style="color: #fff; font-weight: bold">Nghỉ dưỡng 2N1Đ tại VinOasis Phú Quốc 5* cho 2 người</h1>
                            <h3 style="color: #fff">Trị Giá: <a style="font-weight: bold; color: #fff"> 3.470.000vnđ</a></h3>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 img-4">
                            <img src="../../assets/img/img-facebook/khieukhich.png">
                        </div>


                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 title-4">
                            <h1 style="color: #fff; font-weight: bold">Voucher đặt vé máy bay</h1>
                            <h3 style="color: #fff">Trị Giá:<a style="font-weight: bold; color: #fff"> 500.000vnđ/voucher</a></h3>
                        </div>

                    </div>

                </div>

                <div class="img-rules">
                    <img src="../../assets/img/img-facebook/thelecuocthi-3.png" alt="">
                </div>

                <div class="how-to-play">
                    <div class="container">
                        <h3>Cách chơi:</h3>
                        <a>Bước 1: Điền thông tin cá nhân, sau đó chọn ảnh dự thi và viết mô tả (nếu có) giới hạn tối đa 100 từ. Sau đó ấn nút “Gửi ảnh”.</a><br/>
                        <a>Bước 2: Sau khi ảnh dự thi của bạn được đăng trên album cuộc thi tại Fanpage BestPrice, BestPrice sẽ thông báo về link ảnh của bạn qua email.</a><br/>
                        <a>Bước 3: Kêu gọi 500 anh em vào thả tim, like, share để cày điểm. </a>
                    </div>
                </div>

                <div class="scoring">
                    <div class="container">
                        <h3>Cách thức tính điểm:</h3>
                        <a><span>1 like</span> hoặc <span style="color: #yellow">1 tim</span> = <span>1 điểm</span></a><br/>
                        <a><span>1 share</span> = <span>3 điểm</span></a><br/>
                        <a>Điểm sẽ là tổng số tim, like và share hợp lệ trên bức ảnh của bạn- bức ảnh nằm ở album dự thi chính thức của chương trình (Mỗi người chơi chỉ tham gia với  1 ảnh dự thi).</a><br/>
                        
                        
                        <div class="more" style="margin-top: 10px">
                            <a>Những người chơi sở hữu bức ảnh dự thi có số điểm hợp lệ cao nhất, nhì, ba sẽ được trao giải thưởng tương ứng. </a><br/>
                            <a>3 Giải khuyến khích sẽ do nhà tài trợ truyền thông Check-in Vietnam lựa chọn. </a><br/>
                        </div>
                        <div style="margin-top: 10px "><a style="font-style: italic; text-decoration: none; color: #fff; ">Thời gian diễn ra chương trình từ ngày 03/01/2019 đến 12h ngày 18/01/2019.</a></div>
                    </div>
                </div>
            </div>
            <div class="ds-mobile">
                <div class="content-prize-mobile">

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <img src="../../assets/img/img-facebook/giainhat.png" alt="">
                            <div class="title-1">
                                <a>Tour Thái Lan 5N4Đ cho 2 người</a><br/>
                                <a class="text" style="font-weight: bold;">Trị Giá:</a> <a class="price" style="font-weight: 900; color: #fff">12.000.000vnđ</a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 giainhi">
                            <img class="img-6" src="../../assets/img/img-facebook/giainhi.png" alt="" style="width: 90%; margin-top: -15px;">
                            <div class="title-1" style="margin-top: 2px">
                                <a>Tour du thuyền Starlight 5* 2N1Đ cho 2 người</a><br/>
                                <a class="text" style="font-weight: bold;">Trị Giá:</a> <a class="price" style="font-weight: 900; color: #fff">7.600.000vnđ</a>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <img src="../../assets/img/img-facebook/giaiba.png" alt="">
                            <div class="title-1">
                                <a>Nghỉ dưỡng 2N1Đ tại VinOasis Phú Quốc 5* cho 2 người</a><br/>
                                <a class="text" style="font-weight: bold;">Trị Giá:</a> <a class="price" style="font-weight: 900; color: #fff">3.470.000vnđ</a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <img src="../../assets/img/img-facebook/khieukhich.png" alt="" style="margin-top: 18px">
                            <div class="title-3">
                                <a>Voucher đặt vé máy bay</a><br/>
                                <a class="text" style="font-weight: bold;">Trị giá:</a> <a class="price" style="font-weight: 900; color: #fff">500.000vnđ/voucher</a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="img-rules-mobile">
                    <img src="../../assets/img/img-facebook/thelecuocthi-3.png" alt="">
                </div>

                <div class="how-to-play-mobile">
                    <div class="container">
                        <h3 style="font-weight: bold;">Cách chơi:</h3>
                        <div class="content">
                            <a>- Bước 1: Điền thông tin cá nhân, sau đó chọn ảnh dự thi và viết mô tả (nếu có) giới hạn tối đa 100 từ. Sau đó ấn nút “Gửi ảnh”.</a><br/>
                            <a>- Bước 2: Sau khi ảnh dự thi của bạn được đăng trên album cuộc thi tại Fanpage BestPrice, BestPrice sẽ thông báo về link ảnh của bạn qua email.</a><br/>
                            <a>- Bước 3: Kêu gọi 500 anh em vào thả tim, like, share để cày điểm. </a>
                        </div>
                    </div>
                </div>

                <div class="scoring-mobile">
                    <div class="container">
                        <h3 style="font-weight: bold;">Cách thức tính điểm:</h3>
                        <div class="content">
                            <a><span  style="color: #f9d202">1 like</span> hoặc <span  style="color: #f9d202">1 tim</span> = <span  style="color: #f9d202">1 điểm</span></a><br/>
                            <a><span  style="color: #f9d202">1 share</span> = <span  style="color: #f9d202">3 điểm</span></a><br/>
                            <a>Điểm sẽ là tổng số tim, like và share hợp lệ trên bức ảnh của bạn- bức ảnh nằm ở album dự thi chính thức của chương trình (Mỗi người chơi chỉ tham gia với  1 ảnh dự thi)</a><br/>
                            
                            
                            <div class="more" style="">
                                <a>Những người chơi sở hữu bức ảnh dự thi có số điểm hợp lệ cao nhất, nhì, ba sẽ được trao giải thưởng tương ứng. </a><br/>
                                <a>3 Giải khuyến khích sẽ do nhà tài trợ truyền thông Check-in Vietnam lựa chọn. </a><br/>
                            </div>
                            <div class="time"><a>Thời gian diễn ra chương trình từ ngày 03/01/2019 đến 12h ngày 18/01/2019.</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="horizontal">
                <img src="../../../assets/img/img-facebook/Asset10.png" alt="">
            </div>

            <div class="overview">
                
                <div class="row">
                    
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 info-1">
                        <div class="information">
                            <h3>Thông tin công ty:</h3>
                            <p>Công ty Du Lịch BestPrice</p>
                            <a class="address">VP Hà Nội: <span class="detail">12A ngõ Bà Triệu, phố Bà Triệu, Q.Hai Bà Trưng.</span></a><br/>
                            <a class="address">VP HCM: <span class="detail">95 Trần Quang Khải, Tân, Q.1</span></a><br/>
                            <a class="address">Hotline: <span class="detail">1900 6505 (Nhấn phím 0)</span></a><br/>
                            <a class="address">Email: <span class="detail">marketing@bestprice.vn</span></a><br/>
                        </div>
                    </div>

                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 info-2">
                        <div class="vertical">
                            <img src="../../../assets/img/img-facebook/Asset11.png" alt="">
                        </div>
                    </div>
                    
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 info-3">
                        <div class="sponsor">
                            
                            
                            <div class="row">
                                
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 img-1">
                                    <h3>Nhà bảo trợ truyền thông</h3>
                                    <img src="../../../assets/img/img-facebook/check-in-vn.png" alt="">
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 img-2">
                                    <h3>Nhà tài trợ giải thưởng</h3>
                                    <img src="../../../assets/img/img-facebook/oriental.png" alt="">
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
  <div style='margin-top: 150px' class="modal fade" id="modal_success" role="dialog">
    <div class="modal-dialog">
        <img src="../../assets/img/img-facebook/khuan-tour-tet.png" style='position: relative;' alt="">
        <div class='btn_go_back' style='position: absolute;width: 145px;height:35px; font-size: 18px ;background-color:#FF8000; padding-top: 6px; text-align: center; margin-top:-70px;left:258px'>
            <a href='https://www.bestprice.vn/' style='color: #000;text-decoration: none;'><b>Về trang chủ >></b></a>
        </div>
    </div>
  </div>
  <input type="hidden" id="is_show_popup" value="">
  <button type="button" id='btn_show_popup' class="btn btn-info btn-lg hide" data-toggle="modal" data-target="#modal_success">Open Modal</button>
    <script>
    $('document').ready(function(){
        <?php if (!empty($is_post)):?>
            var url = window.location.href;
            <?php if (!empty($post_success) && $post_success == '1'):?>
                $('#btn_show_popup').trigger('click');
                var newUrl = url.replace('?is_post=true&post_success=1', '');
            <?php else :?>
                alert('Upload thất bại. Bạn vui lòng thử lại.');
                var newUrl = url.replace('?is_post=true', '');
            <?php endif; ?>
			window.history.pushState("", "", newUrl);
		<?php endif;?>
    });
    	
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
                alert('Bạn chưa chọn file ảnh!');
                return false;
                check = false;
            }else{
                $('#error_picture').hide();
                var img_name = fileImg.name.toLowerCase();
                if(img_name.indexOf('.png') != -1 || img_name.indexOf('.jpeg') != -1 || img_name.indexOf('.jpg') != -1 || img_name.indexOf('.heic') != -1){
                    $('#error_picture_type').hide();
                }else{
                	$('#error_picture_type').show();
                	alert('Ảnh bạn chọn chưa đúng định dạng. Định dạng được chấp nhận JPEG, JPG, PNG.');
                	return false;
               		check = false;
                }
                if(fileImg.size >= 10485760 ){
                    $('#error_picture_size').show();
                    alert('Ảnh bạn chọn vướt quá kích thước cho phép!');
                    return false;
                    check = false;
                }else{
                    $('#error_picture_size').hide();
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