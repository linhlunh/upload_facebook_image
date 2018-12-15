<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../../bootstrap-3.1.1-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../../bootstrap-3.1.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../bootstrap-3.1.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../../bootstrap-3.1.1-dist/css/bootstrap-theme.css">
</head>

<body>
    <div class="show-desktop">
        <div class="container-show">
            <h1>Thông Tin Người Dùng</h1>

            <?php  foreach($list_img as $key => $list_img):?>
            <ul class="sortable grid" style="list-style: none; margin-top: 30px; margin-left: -40px;">
                            <li draggable="false" style="width: 18%; float: left; margin: 0 2% 2% 0; border: 1px solid #ddd; height: 290px; min-width: 210px;">
                                <div class="form-group thumb" id="thumb_0" style="padding: 5px; position: relative;">
                                    <a href="Bpt_photo/delete_Picture/<?=$list_img['id']?>" class="box_btn_delete" onclick="javascript: return confirm('Bạn muốn xóa ảnh này?');">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </a>
                                    <input type="hidden" value="11" name="identity_0">
                                    
                                    <div class="thumbnail" style="border: 0; padding: 0; margin-bottom: 10px; height: 140px;">
                                        <img src="<?=('../../assets/img/'.$list_img['picture'])?>" alt="" style="width: 100%; height: 95%"><br/>
                                    </div>

                                    <div class="form-group text-center note" style="text-align: center;"><?=$list_img['full_name']?>: <span><?=$list_img['birthday']?></span></div>
                                    <div class="phone_number" style="margin-top: 10px; color: red; margin-left: 5px"><span><?=$list_img['phone']?></span> - <span><?=$list_img['email']?></span></div>
                                    <div class="description"><?=$list_img['description']?></div>
                                    
                                </div>
                            </li>
                        </ul>
            <?php endforeach;?>
        </div>
    </div>
</body>