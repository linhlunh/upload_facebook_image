<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="../../../../assets/libs/usage_datetime/js/mobiscroll.jquery.min.js"></script>
    <link rel="stylesheet" href="../../../../assets/libs/usage_datetime/css/mobiscroll.jquery.min.css">
    <link rel="stylesheet" href="../../../assets/css/upload-28-12.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../../../assets/libs/datepicker/dist/jquery.date-dropdowns.min.js"></script>
    


</head>

<body class="body-content">
    <div class="content">
        <div class="bgr" style="width: 100%; margin: 0 auto; margin-top: -15px;">
            <img src="../../../assets/img/img-facebook/BG.jpg" style="width: 105%">
        </div>
        <div class="detail-content">

            <div class="img-prize">
                <img src="../../../assets/img/img-facebook/giaithuong.png" alt="">
            </div>
            <form name="frm" action="" method="POST" enctype="multipart/form-data" onsubmit='return validateForm()'>
                <div class="tquan">
                    <div class="insert-information">
                        <div class="row up">

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 input-left">
                                <input autocomplete="off" class="name" type="text" name="full_name" id="full_name" placeholder="Họ tên">
                                <div class="notification">
                                    <span class='error' id='error_full_name'>Họ tên không được để trống!</span>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 input-right">
                                <input autocomplete="off" class="birthday" type="text" name="birthday" id="birthday" placeholder="Ngày sinh">
                                <div class="notification">
                                    <span class='error' id='error_wrong_birthday'>Ngày sinh không hợp lệ!</span>
                                    <span class='error' id='error_birthday'>Ngày sinh không được để trống!</span>
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
                                    <span class='error' id='error_wrong_email'>Email không hợp lệ!</span>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="choose-img">
                        <input type="file" name="picture" id="file_info" class="custom-file-input" style="color: #fff">
                        <p style="color: white">
                            <span class='error' id='error_picture'>Bạn chưa chọn file ảnh!</span>
                            <span class='error' id='error_picture_type'>Ảnh bạn chọn chưa đúng định dạng!</span>
                            <span class='error' id='error_picture_size'>Ảnh bạn chọn vướt quá kích thước cho phép!</span>
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
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="width: 100%;">
                                        <h3 style="color: #000000; text-align: center;">MÔ TẢ</h3>
                                        <div class="modal-body">
                                            <div class="form-group" style="">
                                                <textarea style="width: 100%; height: 180px; margin-left: 0px" class="form-control control-1" id="text" onkeydown="checkWord(this);" placeholder="Nhập Mô Tả Ảnh"></textarea>

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
                                                </script>
                                            </div>
                                        </div>
                                        <div class="modal-footer" style="">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #fff; color: #000000; font-size: 11px; border: 1px solid;">Đóng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="regulations">
                            <a href="" data-toggle="modal" data-target="#exampleModalLong">Quy định của chương trình</a>
                        </div>

                        <div class="modal fade popup-1" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="content-regulations" style="background-image: url('../../../assets/img/img-facebook/BGpopup.png'); margin: 0 auto; overflow: hidden; width: 101%; margin-left: -1px; text-align: justify;">
                                        <img src="../../../assets/img/img-facebook/quydinh.png" alt="">
                                        <div class="container">
                                            <div style="margin-top: -10px"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </div>
                                            <div class="content-text" style="margin-top: 15px">
                                                <a class="text">Sản phẩm dự thi thể hiện dưới dạng file ảnh định dạng <span>JPG, PNG</span> và không quá <span>2MB</span>, có chiều ngang dưới 1.000 pixel Ảnh có thể chỉnh <span>photoshop, sửa ánh sáng, màu sắc</span> nhưng <span style="font-weight: bold;">không được thay đổi về nội dung ảnh</span>, không gắn chữ liên quan tới bất kỳ nhãn hiệu nào, không gắn logo của bất cứ nhãn hiệu nào trong ảnh.</a><br/>
                                            </div>

                                            <div class="content-text-2" style="margin-top: 15px">
                                                <a class="text-2">Một người chỉ có thể tham gia tối đa 1 ảnh.</a><br/>
                                            </div>

                                            <div class="content-text-3">
                                                <a>-	Ảnh tham gia chương trình do người tham dự tự chụp và gửi tham dự, ban tổ chức không nhận bài dự thi được sưu tầm từ Internet.</a><br/>
                                                <a>-  Ban tổ chức có quyền từ chối đăng những ảnh không phù hợp với quy chế chương trình hoặc vi phạm thuần phong mỹ tục và các quy định của nhà nước.</a><br/>
                                                <a>-  Người tham gia hoàn toàn chịu trách nhiệm về bản quyền của ảnh tham dự, nếu có tranh chấp, trong vòng 3 ngày, phải gửi thông tin để chứng minh về bản quyền ảnh dự thi. Ảnh vi phạm bản quyền sẽ bị gỡ khỏi trang.</a><br/>
                                                <a>-  Quà tặng không được quy đổi thành tiền mặt trong bất cứ trường hợp nào nhưng có thể được chuyển nhượng.</a><br/>
                                                <a>-	BTC có quyền tạm dừng cuộc thi của những bài dự thi có dấu hiệu bất thường, có số like tăng đột biến hoặc các dấu hiện gian lận khác.</a><br/>
                                                <a>	Người tham gia dự thi không được dùng phần mềm hay bất kì công cụ nào tác động vào tác phẩm để tăng tim, like, share, nếu phát hiện BTC sẽ huỷ kết quả bài dự thi của thí sinh đó.</a><br/>
                                                <a>   BTC nghiêm cấm các hành vi gian lận dưới mọi hình thức. Những tấm ảnh dự thi có dấu hiệu gian lận (tạo nick ảo, like ảo, ...) BTC sẽ không trao giải và sẽ loại khỏi kết quả cuối cùng mà không cần báo trước</a><br/>
                                                <a>	Tham dự cuộc thi là mặc nhiên chấp nhận mọi quyết định của BTC. Trong mọi trường hợp, quyết định của BTC là quyết định cuối cùng.</a><br/>
                                                <a>	Thời hạn sử dụng giải thưởng sẽ được thông báo cụ thể khi trao giải. Người nhận giải trước khi sử dụng dịch vụ phải đăng ký với BestPrice trước 2 tuần.</a><br/>
                                                <a>   Trong vòng 72 giờ kể từ khi thông báo người thắng cuộc, nếu BestPrice không liên hệ được với người thắng cuộc, giải thưởng sẽ được trao cho người có số điểm cao kế tiếp.</a><br/>
                                                <a>	Quyền sử dụng ảnh</a><br/>
                                                <a>	Ban tổ chức có quyền xuất bản, quảng bá thương mại với ảnh dự thi mà không cần phải báo trước và không cần thêm bất kỳ một chi phí nào, được sử dụng trưng bày, lựa chọn ảnh đăng trên các phương tiện thông tin, ấn phẩm</a><br/>
                                                <a>	Hạn chế trách nhiệm</a><br/>
                                                <a>-	Ban tổ chức không chịu trách nhiệm về những thông tin khai không đúng của người tham gia cuộc thi</a><br/>
                                                <a>-	Ban tổ chức không chịu trách nhiệm trong trường hợp cuộc thi bị hủy bỏ hoặc hoãn vì những lý do bất khả kháng, khách quan như bị đánh sập mạng, thiên tai, chiến tranh…</a><br/>
                                                <a>-	Ban tổ chức không chịu trách nhiệm khi ảnh gửi tới chương trình bị hỏng, biến dạng hay thay đổi chất lượng do đường truyền hoặc sự cố mạng Internet.</a><br/>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="send-img">

                            <div class="margin-top-10" id="term_agreement">
                                <div class="checkbox text-highlight">
                                    <label class="text-price font-size-15">
                                        Khi gửi ảnh là bạn đã đồng ý quy định của chúng tôi
                                    </label>
                                </div>
                                <div class="upload">
                                    <button type="submit" value="" id="id_upload" name="action">
                                        <span id='btn_default'>GỬI ẢNH<span style='margin-left: 5px' class='glyphicon glyphicon-open'></span></span>
                                        <span style='display:none' id='btn_loading'>ĐANG GỬI...<i style='margin-left: 5px' class="fa fa-spinner fa-spin"></i></span>
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
                            <img src="../../assets/img/img-facebook/giai nhat.png" alt="">
                        </div>


                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 title-1">
                            <h1 style="color: #fff; font-weight: bold">Tour Thái Lan 5N4Đ cho 2 người</h1>
                            <h3 style="color: #fff">Trị Giá</h3>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 img-2">
                            <img src="../../assets/img/img-facebook/giai nhi.png" alt="">
                        </div>


                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 title-2">
                            <h1 style="color: #fff; font-weight: bold">1 Chuyến du lịch 2N1Đ tại du thuyền cho 2 người</h1>
                            <h3 style="color: #fff">Trị Giá</h3>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 img-3">
                            <img src="../../assets/img/img-facebook/giai ba.png" alt="">
                        </div>


                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 title-3">
                            <h1 style="color: #fff; font-weight: bold">Nghỉ dưỡng 2N1Đ tại VinOasis Phú Quốc</h1>
                            <h3 style="color: #fff">Trị Giá</h3>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 img-4">
                            <img src="../../assets/img/img-facebook/khieu khich.png">
                        </div>


                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 title-4">
                            <h1 style="color: #fff; font-weight: bold">Voucher đặt vé máy bay</h1>
                            <h3 style="color: #fff">Trị Giá: 500.000 vnđ</h3>
                        </div>

                    </div>

                </div>

                <div class="img-rules">
                    <img src="../../assets/img/img-facebook/the le.png" alt="">
                </div>

                <div class="how-to-play">
                    <div class="container">
                        <h3>Cách chơi:</h3>
                        <a>Bước 1: Điền thông tin cá nhân người chơi.</a><br/>
                        <a>Bước 2: Chọn ảnh dự thi và viết mô tả(nếu có) giới hạn tối đa 100 từ và gửi ảnh. BestPrice sẽ gửi mail thông báo cho bạn qua email.</a><br/>
                        <a>Bước 3: Kêu gọi 500 anh em vào thả tim, like, share để cày điểm.</a>
                    </div>
                </div>

                <div class="scoring">
                    <div class="container">
                        <h3>Cách thức tính điểm:</h3>
                        <a><span>1 like</span> hoặc <span>1 tim</span> = <span>1 điểm</span></a><br/>
                        <a><span>1 share</span> = <span>3 điểm</span></a><br/>
                        <a>Điểm sẽ là tổng số tim, like và share hợp lệ trên</a><br/>
                        <a>bức ảnh của bạn sẽ nằm ở album dự thi chính thức của chương trình.</a><br/>
                        <div style="margin-top: 5px "><a style=" text-decoration: none; color: #fff; font-size: 15px "><span style="color: #f9d202 ">CHÚ Ý:</span> Mỗi người chơi chỉ gửi <span style="color: #f9d202 ">1 ảnh</span></a><br/></div>
                        <div style="margin-top: 10px "><a style="font-style: italic; text-decoration: none; color: #fff; ">Thời gian diễn ra chương trình từ ngày 03/01/2019 đến 12h ngày 18/01/2019.</a></div>
                    </div>
                </div>
            </div>
            <div class="ds-mobile">
                <div class="content-prize-mobile">

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <img src="../../assets/img/img-facebook/giai nhat.png" alt="">
                            <div class="title-1">
                                <a>Tour Thái Lan 5N4Đ cho 2 người</a><br/>
                                <a>Trị Giá</a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <img src="../../assets/img/img-facebook/giai nhi.png" alt="" style="margin-top: -8px">
                            <div class="title-1">
                                <a>1 Chuyến du lịch 2N1Đ tại du thuyền cho 2 người</a><br/>
                                <a>Trị Giá</a>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <img src="../../assets/img/img-facebook/giai ba.png" alt="">
                            <div class="title-1">
                                <a>Nghỉ dưỡng 2N1Đ tại VinOasis Phú Quốc</a><br/>
                                <a>Trị Giá</a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <img src="../../assets/img/img-facebook/khieu khich.png" alt="" style="margin-top: 20px">
                            <div class="title-3">
                                <a>Voucher đặt vé máy bay</a><br/>
                                <a>Trị Giá: 500.000 vnđ</a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="img-rules-mobile">
                    <img src="../../assets/img/img-facebook/the le.png" alt="">
                </div>

                <div class="how-to-play-mobile">
                    <div class="container">
                        <h3>Cách chơi:</h3>
                        <div class="content">
                            <a>Bước 1: Điền thông tin cá nhân người chơi.</a><br/>
                            <a>Bước 2: Chọn ảnh dự thi và viết mô tả(nếu có) giới hạn tối đa 100 từ và gửi ảnh. BestPrice sẽ gửi mail thông báo cho bạn qua email.</a><br/>
                            <a>Bước 3: Kêu gọi 500 anh em vào thả tim, like, share để cày điểm.</a>
                        </div>
                    </div>
                </div>

                <div class="scoring-mobile">
                    <div class="container">
                        <h3>Cách thức tính điểm:</h3>
                        <div class="content">
                            <a><span>1 like</span> hoặc <span>1 tim</span> = <span>1 điểm</span></a><br/>
                            <a><span>1 share</span> = <span>3 điểm</span></a><br/>
                            <a>Điểm sẽ là tổng số tim, like và share hợp lệ trên</a><br/>
                            <a>bức ảnh của bạn sẽ nằm ở album dự thi chính thức của chương trình.</a><br/>
                            <div class="attention"><a><span>CHÚ Ý:</span> Mỗi người chơi chỉ gửi <span>1 ảnh</span></a><br/></div>
                            <div class="time"><a>Thời gian diễn ra chương trình từ ngày 03/01/2019 đến 12h ngày 18/01/2019.</a></div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <script>
                var fileImg = '';
                $('input[type="file"]').change(function(e) {
                    fileImg = e.target.files[0];

                });

                $('#birthday').change(function() {
                    var birthday = $(this).val();
                    var result = birthday.split('/');
                    birthday = result[1] + '/' + result[0] + '/' + result[2];
                    $(this).val(birthday);

                });

                function validateForm() {
                    var full_name = $('#full_name').val();
                    var email = $('#email').val();
                    var phone = $('#phone').val();
                    var birthday = $('#birthday').val();

                    var check = true;

                    if (fileImg == '') {
                        $('#error_picture').show();
                        check = false;
                    } else {
                        $('#error_picture').hide();

                        if (fileImg.type == 'image/jpeg' || fileImg.type == 'image/png' || fileImg.type == 'image/jpg') {
                            $('#error_picture_type').hide();
                        } else {
                            $('#error_picture_type').show();
                            check = false;
                        }
                        if (fileImg.size >= 2097152) {
                            $('#error_picture_size').show();
                            check = false;
                        } else {
                            $('#error_picture_size').hide();
                        }
                    }


                    if (full_name === '' || full_name === null) {
                        $('#error_full_name').show();
                        check = false;

                    } else {
                        $('#error_full_name').hide();
                    }

                    if (email === '' || email === null) {
                        $('#error_email').show();
                        $('#error_wrong_email').hide();
                        check = false;
                    } else {
                        if (!(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email))) {
                            $('#error_wrong_email').show();
                            check = false;
                        } else {
                            $('#error_wrong_email').hide();
                        }
                        $('#error_email').hide();

                    }

                    if (phone === '' || phone === null) {
                        $('#error_phone').show();
                        $('#error_wrong_phone').hide();
                        check = false;
                    } else {
                        $('#error_phone').hide();
                        if (!(/^0(1\d{9}|9\d{8}|8\d{8})$/.test(phone))) {
                            $('#error_wrong_phone').show();
                            check = false;
                        } else {
                            $('#error_wrong_phone').hide();
                        }
                    }


                    if (birthday === '' || birthday === null) {
                        $('#error_birthday').show();
                        check = false;
                    } else {
                        $('#error_birthday').hide();
                        $('#error_wrong_birthday').hide();

                        birthday = Date.parse(d_m_Y_to_m_d_Y(birthday));
                        time_now = new Date();

                        if (birthday > time_now) {
                            $('#error_wrong_birthday').show();
                        } else {
                            $('#error_wrong_birthday').hide();
                        }
                    }
                    if (check == true) {
                        $('#btn_default').hide();
                        $('#btn_loading').show();
                    }
                    return check;
                }

                function d_m_Y_to_m_d_Y(date) {
                    var from = date.split("/");

                    var f = new Date(from[2], from[1] - 1, from[0]);

                    return f;
                }
            </script>

            <script>
               
                $(function() {
                    if ($(window).width() < 767) {
                        
                        $('#note').attr('data-toggle', 'modal');
                    } else {
                       
                        $('#note').attr('data-toggle', ' ');
                        
                    }
                });
            </script>
            <script>
            $("birthday").dateDropdowns();
            $("birthday").dateDropdowns({
                defaultDate: null,
                defaultDateFormat: "yyyy-mm-dd",
                displayFormat: "dmy",
                submitFormat: "yyyy-mm-dd",
                minAge: 0,
                maxAge: 120,
                minYear: null,
                maxYear: null,
                submitFieldName: "date",
                wrapperClass: "date-dropdowns",
                dropdownClass: null,
                daySuffixes: true,
                monthSuffixes: true,
                monthFormat: "long",
                required: false,
                dayLabel: 'Day',
                monthLabel: 'Month',
                yearLabel: 'Year',
                monthLongValues: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                monthShortValues: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                initialDayMonthYearValues: ['Day', 'Month', 'Year'],
                daySuffixValues: ['st', 'nd', 'rd', 'th']
            });




</script>
</body>