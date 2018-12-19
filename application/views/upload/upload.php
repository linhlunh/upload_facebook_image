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

    <div class="bpt">
        <div class="container">
            <div class="font" style="position: relative;">
                <img src="../../../assets/img-facebook/BG.png" alt="">
            </div>

            <div class="content">
                <img src="../../../assets/img-facebook/giai thuong.png" alt="" style="position: absolute; margin-top: -2020px; margin-left: -46px;">
            </div>

            <div class="rules">
                <img src="../../../assets/img-facebook/the le.png" alt="" style="position: absolute; margin-top: -600px;">
            </div>
            <div class="information" style=" margin-top: -2230px; position: absolute; width: 82%">
                <div class="content-bpt">
                    <div class="container-all">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="input field">

                                <div class="row">

                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <input type="text" name="full_name" id="" placeholder="Họ tên" style="padding-left: 5px; font-size: 17px; width: 92%; margin-left: 50px; height: 44px">
                                        <?php echo form_error('full_name'); ?>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="text-align: right">
                                        <input type="text" name="birthday" id="" placeholder="Ngày sinh" style="padding-left: 5px; font-size: 17px; width: 92%; margin-right: 50px; height: 44px">
                                        <?php echo form_error('birthday'); ?>
                                    </div>

                                </div>

                                <div class="row" style="margin-top: 25px">

                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <input type="text" name="phone" id="" placeholder="Số điện thoại" style="padding-left: 5px; font-size: 17px; width: 92%; margin-left: 50px; height: 44px">
                                        <?php echo form_error('phone'); ?>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="text-align: right">
                                        <input type="text" name="email" id="" placeholder="Email" style="padding-left: 5px; font-size: 17px; width: 92%; margin-right: 50px; height: 44px">
                                        <?php echo form_error('email'); ?>
                                    </div>

                                </div>

                                <input type="file" name="picture" id="file_info" class="custom-file-input" style="margin-top: 25px; margin-left: 240px;"><p style="color: red"><?=!empty($errors)?$errors:''?></p>

                            </div>

                            <div class="title" style="text-align: center; color: #fff;">
                                <h2 style="font-weight: bold;">-MÔ TẢ ẢNH-</h2>
                                <h4 style="font-style: italic;">(Nếu có)</h4>
                            </div>

                            <div class="comment" style="text-align: center">
                                <textarea name="description" id="note" cols="30" rows="10" style="resize: none; overflow: hidden; min-height: auto; width: 35%; height:154px;" onkeydown="auto_grow(this)"></textarea><?php echo form_error('description'); ?>
                                <script>
                                    function auto_grow(element) {
                                        element.style.height = "5px";
                                        element.style.height = (element.scrollHeight) + "px";
                                    }
                                </script>
                            </div>

                            <div class="send-img" style="text-align: center">
                                <input type="submit" value="GỬI ẢNH" id="id-upload" style="border: 1px solid #999; border-radius: 0px; padding: 5px 3px 0px 3px; font-weight: bold; background-color: #fff; width: 20%; height: 49px; font-size: 20px; margin-top: 10px" name="action">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="prize" style="margin-top: 65px">
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

                <div class="how-to-play" style="margin-top: 5px">
                    <div class="container" style="width: 100%; color: #fff">
                        <h3 style="font-weight: bold;">Cách chơi:</h3>
                        <a style="text-decoration: none; color: #fff; font-size: 19px">Bước 1: Điền thông tin cá nhân người chơi.</a><br/>
                        <a style="text-decoration: none; color: #fff; font-size: 19px">Bước 2: Chọn ảnh dự thi và viết mô tả(nếu có) giới hạn tối đa 500 từ và gửi ảnh. BestPrice sẽ gửi mail thông báo cho bạn qua email.</a><br/>
                        <a style="text-decoration: none; color: #fff; font-size: 19px">Bước 3: Kêu gọi 500 anh em vào thả tim, like, share để cày điểm.</a>
                    </div>
                </div>

                <div class="scoring">
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
    </div>

</body>

</html>