<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link rel="stylesheet" href="../../assets/css/upload.css">
</head>

<body>
    <div class="bpt-container" style="margin-top: -20px">
        <div class="content-bpt" style="margin-top: 500px;">
            <div class="container-all" style="width: 1100px;">
                <div class="img-prize" style="padding-top: 240px; position: relative">
                    <img src="../../../assets/img-facebook/giai thuong.png" alt="" style="margin-left: -48px">
                </div>

                <div class="fill-content" style="position: absolute; margin-top: -600px">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="input field">

                            <div class="row">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 left">
                                    <input class="abc" type="text" name="full_name" id="" value='<?=set_value(' full_name ')?>' placeholder="Họ tên" style="padding-left: 5px; font-size: 17px; width: 495px; margin-left: 50px; height: 43px; -webkit-box-shadow: inset 1px 1px 6px rgba(0, 0, 0, 1); border: unset"><br/>
                                    <?=form_error('full_name'); ?>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 right" style="text-align: right">
                                    <input class="abc" type="text" name="birthday" id="" value='<?=set_value(' birthday ')?>' placeholder="Ngày sinh" style="padding-left: 5px; font-size: 17px; width: 495px; margin-right: 50px; height: 43px; -webkit-box-shadow: inset 1px 1px 6px rgba(0, 0, 0, 1); border: unset"><br/>
                                    <?=form_error('birthday'); ?>
                                </div>

                            </div>

                            <div class="row" style="margin-top: 25px">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 left">
                                    <input type="text" name="phone" id="" placeholder="Số điện thoại" value='<?=set_value(' phone ')?>' style="padding-left: 5px; font-size: 17px; width: 495px; margin-left: 50px; height: 43px; -webkit-box-shadow: inset 1px 1px 6px rgba(0, 0, 0, 1); border: unset"><br/>
                                    <?=form_error('phone'); ?>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 right" style="text-align: right">
                                    <input type="text" name="email" id="" placeholder="Email" value='<?=set_value(' email ')?>' style="padding-left: 5px; font-size: 17px; width: 495px; margin-right: 50px; height: 43px;-webkit-box-shadow: inset 1px 1px 6px rgba(0, 0, 0, 1); border: unset"><br/>
                                    <?=form_error('email'); ?>
                                </div>

                            </div>

                            <div class="choose-img">
                                <input type="file" name="picture" id="file_info" class="custom-file-input" style="margin-top: 25px; margin-left: 440px;">
                                <p style="color: red">
                                    <?=!empty($errors)?$errors:''?>
                                </p>
                            </div>

                        </div>

                        <div class="title" style="text-align: center; color: #fff;">
                            <h2 style="font-weight: bold;">-MÔ TẢ ẢNH-</h2>
                            <h4 style="font-style: italic;">(Nếu có)</h4>
                        </div>

                        <div class="comment" style="text-align: center">
                            <textarea name="description" id="note" cols="30" rows="10" value='<?=set_value(' note ')?>' style="resize: none; overflow: hidden; min-height: auto; width: 391px; height:154px; -webkit-box-shadow: inset 0px 0px 6px rgba(0, 0, 0, 10);" onkeydown="checkWordLen(this);"></textarea>
                            <script>
                                function checkWordLen(element) {
                                    element.style.height = "5px";
                                    element.style.height = (element.scrollHeight) + "px";
                                }
                                var wordLen = 500,
                                    len;
                                $('#note').keydown(function(event) {
                                    len = $('#note').val().split(/[\s]+/);
                                    if (len.length > wordLen) {
                                        if (event.keyCode == 46 || event.keyCode == 8) {} else if (event.keyCode < 48 || event.keyCode > 57) {
                                            event.preventDefault();
                                        }
                                    }
                                    console.log(len.length + " words are typed out of an available " + wordLen);
                                    wordsLeft = (wordLen) - len.length;
                                    $('.words-left').html(wordsLeft + ' words left');
                                    if (wordsLeft == 0) {
                                        $('.words-left').css({
                                            'background': 'red'
                                        }).prepend('<i class="fa fa-exclamation-triangle"></i>');
                                    }
                                });
                            </script>
                        </div>

                        <div class="regulations" style="text-align: center;">
                            <a href="" style="color: #fff;" data-toggle="modal" data-target="#exampleModalLong">Quy định của chương trình</a>
                        </div>

                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content" style="background-image: url('../../../assets/img-facebook/BGpopup.png'); margin: 0 auto; overflow: hidden; width: 1000px; margin-left: -193px">
                                    <div class="content-regulations">
                                        <img src="../../../assets/img-facebook/quydinh.png" alt="" style="width: 100%">
                                        <div class="container" style="width: 100%">
                                            <div class="content-text">
                                                <a style="color: #fff; font-size: 15px; text-decoration: none">Sản phẩm dự thi thể hiện dưới dạng file ảnh định dạng <span style="color: #f9d202">JPG, PNG</span> và không quá <span style="color: #f9d202">2MB</span>, có chiều ngang dưới 1.000 pixel Ảnh có thể chỉnh <span style="color: #f9d202">photoshop, sửa ánh sáng, màu sắc</span> nhưng <span style="color: #f9d202; font-weight: bold">không được thay đổi về nội dung ảnh</span>, không gắn chữ liên quan tới bất kỳ nhãn hiệu nào, không gắn logo của bất cứ nhãn hiệu nào trong ảnh.</a><br/>
                                            </div>

                                            <div class="content-text-2" style="margin-top: 15px">
                                                <a style="color: #f9d202; font-size: 15px; text-decoration: none; font-weight: bold; margin-top: 10px">Một người chỉ có thể tham gia tối đa 1 ảnh.</a><br/>
                                            </div>

                                            <div class="content-text-2" style="margin-top: 15px; padding-bottom: 15px">
                                                <a style="color: #fff; font-size: 15px; text-decoration: none; margin-top: 15px">-	Ảnh tham gia chương trình do người tham dự tự chụp và gửi tham dự, ban tổ chức không nhận bài dự thi được sưu tầm từ Internet.</a><br/>
                                                <a style="color: #fff; font-size: 15px; text-decoration: none; margin-top: 15px">-  Ban tổ chức có quyền từ chối đăng những ảnh không phù hợp với quy chế chương trình hoặc vi phạm thuần phong mỹ tục và các quy định của nhà nước.</a><br/>
                                                <a style="color: #fff; font-size: 15px; text-decoration: none; margin-top: 15px">-  Người tham gia hoàn toàn chịu trách nhiệm về bản quyền của ảnh tham dự, nếu có tranh chấp, trong vòng 3 ngày, phải gửi thông tin để chứng minh về bản quyền ảnh dự thi. Ảnh vi phạm bản quyền sẽ bị gỡ khỏi trang.</a><br/>
                                                <a style="color: #fff; font-size: 15px; text-decoration: none; margin-top: 15px">-  Quà tặng không được quy đổi thành tiền mặt trong bất cứ trường hợp nào nhưng có thể được chuyển nhượng.</a><br/>
                                                <a style="color: #fff; font-size: 15px; text-decoration: none; margin-top: 15px">-	BTC có quyền tạm dừng cuộc thi của những bài dự thi có dấu hiệu bất thường, có số like tăng đột biến hoặc các dấu hiện gian lận khác.</a><br/>
                                                <a style="color: #fff; font-size: 15px; text-decoration: none; margin-top: 15px">	Người tham gia dự thi không được dùng phần mềm hay bất kì công cụ nào tác động vào tác phẩm để tăng tim, like, share, nếu phát hiện BTC sẽ huỷ kết quả bài dự thi của thí sinh đó.</a><br/>
                                                <a style="color: #fff; font-size: 15px; text-decoration: none; margin-top: 15px">   BTC nghiêm cấm các hành vi gian lận dưới mọi hình thức. Những tấm ảnh dự thi có dấu hiệu gian lận (tạo nick ảo, like ảo, ...) BTC sẽ không trao giải và sẽ loại khỏi kết quả cuối cùng mà không cần báo trước</a><br/>
                                                <a style="color: #fff; font-size: 15px; text-decoration: none; margin-top: 15px">	Tham dự cuộc thi là mặc nhiên chấp nhận mọi quyết định của BTC. Trong mọi trường hợp, quyết định của BTC là quyết định cuối cùng.</a><br/>
                                                <a style="color: #fff; font-size: 15px; text-decoration: none; margin-top: 15px">	Thời hạn sử dụng giải thưởng sẽ được thông báo cụ thể khi trao giải. Người nhận giải trước khi sử dụng dịch vụ phải đăng ký với BestPrice trước 2 tuần.</a><br/>
                                                <a style="color: #fff; font-size: 15px; text-decoration: none; margin-top: 15px">   Trong vòng 72 giờ kể từ khi thông báo người thắng cuộc, nếu BestPrice không liên hệ được với người thắng cuộc, giải thưởng sẽ được trao cho người có số điểm cao kế tiếp.</a><br/>
                                                <a style="color: #fff; font-size: 15px; text-decoration: none; margin-top: 15px">	Quyền sử dụng ảnh</a><br/>
                                                <a style="color: #fff; font-size: 15px; text-decoration: none; margin-top: 15px">	Ban tổ chức có quyền xuất bản, quảng bá thương mại với ảnh dự thi mà không cần phải báo trước và không cần thêm bất kỳ một chi phí nào, được sử dụng trưng bày, lựa chọn ảnh đăng trên các phương tiện thông tin, ấn phẩm</a><br/>
                                                <a style="color: #fff; font-size: 15px; text-decoration: none; margin-top: 15px">	Hạn chế trách nhiệm</a><br/>
                                                <a style="color: #fff; font-size: 15px; text-decoration: none; margin-top: 15px">-	Ban tổ chức không chịu trách nhiệm về những thông tin khai không đúng của người tham gia cuộc thi</a><br/>
                                                <a style="color: #fff; font-size: 15px; text-decoration: none; margin-top: 15px">-	Ban tổ chức không chịu trách nhiệm trong trường hợp cuộc thi bị hủy bỏ hoặc hoãn vì những lý do bất khả kháng, khách quan như bị đánh sập mạng, thiên tai, chiến tranh…</a><br/>
                                                <a style="color: #fff; font-size: 15px; text-decoration: none; margin-top: 15px">-	Ban tổ chức không chịu trách nhiệm khi ảnh gửi tới chương trình bị hỏng, biến dạng hay thay đổi chất lượng do đường truyền hoặc sự cố mạng Internet.</a><br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="margin-top-10" id="term_agreement" style="text-align: center; ">
                            <div class="checkbox text-highlight">
                                <label class="text-price font-size-15" style="color: #fff">
                                        <input type="checkbox" id="flight_term_cond_check">
                                        Tôi đồng ý với các quy định của chương trình.
                                    </label>
                            </div>
                        </div>

                        <div class="send-img" style="text-align: center">
                            <input type="submit" value="GỬI ẢNH" id="id-upload" style="border: 1px solid #999; border-radius: 0px; padding: 5px 3px 0px 3px; font-weight: bold; background-color: #fff; width: 221px; height: 49px; font-size: 20px; margin-top: 10px" name="action">
                        </div>

                    </form>
                </div>
            </div>

            <div class="prize" style="width: 1100px">
                <div class="container" style="width: 100%;">

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <img src="../../../assets/img-facebook/giai nhat.png" alt="">
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-left: -40px; margin-top: 131px;">
                            <h3 style="color: #fff; font-weight: bold; font-size: 46px">Tour Thái Lan 5N4Đ cho 2 người</h3>
                            <h4 style="color: #fff; font-weight: bold; font-size: 33px">Trị Giá:</h4>
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <img src="../../../assets/img-facebook/giai nhi.png" alt="" style="margin-top: -150px">
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-top: 30px;">
                            <h3 style="color: #fff; font-weight: bold; font-size: 43px">1 Chuyến du lịch 2N1Đ tại du thuyền cho 2 người</h3>
                            <h4 style="color: #fff; font-weight: bold; font-size: 33px">Trị Giá:</h4>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <img src="../../../assets/img-facebook/giai ba.png" alt="" style="margin-top: -40px; margin-left: 15px">
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-left: -40px; margin-top: 65px;">
                            <h3 style="color: #fff; font-weight: bold; font-size: 43px">Nghỉ dưỡng 2N1Đ tại VinOasis Phú Quốc</h3>
                            <h4 style="color: #fff; font-weight: bold; font-size: 33px">Trị Giá:</h4>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <img src="../../../assets/img-facebook/khieu khich.png" alt="" style="margin-top: -40px; margin-left: 15px">
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-left: -40px; margin-top: 65px;">
                            <h3 style="color: #fff; font-weight: bold; font-size: 43px">Voucher đặt vé máy bay</h3>
                            <h4 style="color: #fff; font-weight: bold; font-size: 33px">Trị Giá: 500.000 vnđ</h4>
                        </div>

                    </div>
                </div>
            </div>

            <div class="rules">
                <img src="../../../assets/img-facebook/the le.png" alt="">
            </div>

            <div class="how-to-play" style="margin-top: 5px; width: 1100px">
                <div class="container" style="width: 100%; color: #fff">
                    <h3 style="font-weight: bold;">Cách chơi:</h3>
                    <a style="text-decoration: none; color: #fff; font-size: 19px">Bước 1: Điền thông tin cá nhân người chơi.</a><br/>
                    <a style="text-decoration: none; color: #fff; font-size: 19px">Bước 2: Chọn ảnh dự thi và viết mô tả(nếu có) giới hạn tối đa 500 từ và gửi ảnh. BestPrice sẽ gửi mail thông báo cho bạn qua email.</a><br/>
                    <a style="text-decoration: none; color: #fff; font-size: 19px">Bước 3: Kêu gọi 500 anh em vào thả tim, like, share để cày điểm.</a>
                </div>
            </div>

            <div class="scoring" style="width: 1100px">
                <div class="container a" style="width: 100%; color: #fff">
                    <h3 style="font-weight: bold;">Cách thức tính điểm:</h3>
                    <a style="text-decoration: none; color: #fff; font-size: 19px"><span style="color: #f9d202">1 like</span> hoặc <span style="color: #f9d202">1 tim</span> = <span style="color: #f9d202">1 điểm</span></a><br/>
                    <a style="text-decoration: none; color: #fff; font-size: 19px"><span style="color: #f9d202">1 share</span> = <span style="color: #f9d202">3 điểm</span></a><br/>
                    <a style="text-decoration: none; color: #fff; font-size: 19px">Điểm sẽ là tổng số tim, like và share hợp lệ trên</a><br/>
                    <a style="text-decoration: none; color: #fff; font-size: 19px">bức ảnh của bạn sẽ nằm ở album dự thi chính thức của chương trình.</a><br/>

                    <a style="text-decoration: none; color: #fff; font-size: 19px; margin-top: 15px"><span style="color: #f9d202">CHÚ Ý:</span> Mỗi người chơi chỉ gửi <span style="color: #f9d202">1 ảnh</span></a><br/>
                    <a style="text-decoration: none; color: #fff; font-size: 19px; font-style: italic; margin-top: 15px">Thời gian diễn ra chương trình từ ngày 03/01/2019 đến 12h ngày 18/01/2019.</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>