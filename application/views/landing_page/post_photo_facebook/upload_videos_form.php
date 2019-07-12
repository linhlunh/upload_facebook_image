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
    <meta property="og:url" content="https://www.facebook.com/Marea-sofa-1459223034190904/"/>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    
    <link rel="stylesheet" href="../../../assets/css/upload_videos">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://owa.bestprice.vn/assets/img/favicon.27042017.ico">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
    <div class="form-registration">
        <div class="bgr" style="width: 100%; margin: 0 auto">
            <img src="../../../assets/img/img-facebook/BGpopup.png" style="width: 100%">
        </div>

        <div class="details-form" style="position: absolute; top: 0; width: 100%">
            <div class="container">
                <div class="margin-top-30 top-deals">
                    <h2 style="text-align: center; color: #fff">Thông Tin Chi Tiết</h2>

                    <div class="row">
                        <div class="item col-xs-12 col-md-4 tour-ids margin-bottom-20 ">
                            <div class="list-item-bpv">
                                <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                    src="../../../videos/landing_page/post_video_facebook/<?=$videos[0]['picture']?>" allowfullscreen>
                                </iframe>
                                </div>

                                <div class="item-content" style="height: 161px; background-color: #fff; padding: 10px; border: 1px solid #ddd; border-top: 0; line-height: 20px; position: relative; text-align: center">
                                    <div id="fb-root"></div>
                                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=462923911127599&autoLogAppEvents=1"></script>
                                        <div class="fb-like" data-href="http://upload-facebook/form-upload-videos-dt/2144" data-width="" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                                
                                    <span class="article-detail-page" style="color:#FFF; background-color: #40b6d0; font-weight: bold; padding: 3px 10px 1px 10px;"><?=$articles[0]['views']?> Views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>