<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
</head>
<body>
<div>
    <img src='http://graph.facebook.com/1148101135223924/picture?type=square' />
    <h1>Tạo thông tin ảnh upload</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <ul style="list-style: none;">
            <li>
                <span><?=lang('full_name')?></span>
                <input type="text" name="full_name" id="full_name" value='<?= set_value('full_name') ?>' style="margin-left: 44px; margin-top:10px"  >
                <?= form_error('full_name'); ?>
            </li>
            <li>
                <span><?=lang('birthday')?></span>
                <input type="date" name="birthday" id="birthday" value='<?= set_value('birthday') ?>' style="margin-left: 56px; margin-top:10px">
                <?=form_error('birthday'); ?>
            </li>
            <li>
                <span>Email:</span> 
                <input type="text" name="email" id="email" value='<?= set_value('email') ?>' style="margin-left: 73px; margin-top:10px">
                <?= form_error('email'); ?>
            </li>
            <li>
                <span>Phone Number:</span> 
                <input type="text" name="phone" id="phone" value='<?= set_value('phone') ?>' style="margin-left: 15px; margin-top:10px">
                <?= form_error('phone'); ?>
            </li>
            <li>
                <span>Picture:</span>  
                <input type="file" name="picture" id="" value='<?= set_value('file') ?>' style="margin-left: 66px; margin-top:10px;"> 
            </li>
            <p style="color: red"><?=!empty($errors)?$errors:''?></p>
            <li>
                <span>Description:</span>
                <textarea name="description" id="note" value='<?= set_value('note') ?>' cols="30" rows="10" style="resize: none; overflow: hidden; min-height: auto; width: 13%; height:21px; margin-left: 37px; margin-top: 10px;" onkeydown="auto_grow(this)"></textarea> <?= form_error('description'); ?> 
            </li>
            <script>
            function auto_grow(element) {
                    element.style.height = "5px";
                    element.style.height = (element.scrollHeight)+"px";
                }
            </script>
            
        </ul>
        <input type="submit" value="upload"  id="id-upload" style="margin-left: 277px;" name="action">
        
    </form>
</div>
</body>
</html>