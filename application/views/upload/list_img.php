<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../../bootstrap-3.1.1-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../../bootstrap-3.1.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../bootstrap-3.1.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../../bootstrap-3.1.1-dist/css/bootstrap-theme.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="show-desktop">
        <div  class="container">
            <h1>Thông Tin Người Dùng</h1>

            <div class="search">
                <form action="" method="POST">
                    <input type="text" name="keyword" placeholder="Tìm kiếm theo tên" value="">
                    <input type="submit" name="ok" value="search">
                </form>
            </div>
            <?php  foreach($list_img as $key => $img):?>
                <ul class="sortable grid" style="list-style: none; margin-top: 30px; margin-left: -40px;">
                    <li draggable="false" style="width: 18%; float: left; margin: 0 2% 2% 0; border: 1px solid #ddd;background-color: #dddddc4f; height: 310px; min-width: 210px;">
                        <div class="form-group thumb" id="thumb_0" style="padding: 5px; position: relative;">
                            <a href="Bpt_photo/delete_Picture/<?=$img['id']?>" class="box_btn_delete" onclick="javascript: return confirm('Bạn muốn xóa ảnh này?');">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                            
                            <div class="thumbnail" style="border: 0; padding: 0; margin-bottom: 10px; height: 140px;">
                                <img src="<?=('../../assets/img/'.$img['picture'])?>" alt="" style="width: 100%; height: 95%"><br/>
                            </div>
                            <div style='line-height: 24px'>
                                <div style='margin-left: 5px'>MS: <?=$img['event_code']?></div>
                                <div class="" style="margin-left: 5px"><?=$img['full_name']?>: <span><?=$img['birthday']?></span></div>
                                <div style='margin-left: 5px'><span>SĐT: <?=$img['phone']?></span></div>
                                <div class="phone_number" style="margin-left: 5px"><span><?=$img['email']?></span></div>
                                <div style='margin-left: 5px'><a href="<?=$img['facebook_picture_link']?>">Link Facebook</a></div>
                            </div>
                            
                        </div>
                    </li>
                </ul>
            <?php endforeach;?>
        </div>
    </div>
</body>