<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<title>簡易留言版</title>
</head>
<body>
  <?php echo form_open('post_controller/add'); ?>

<div class="container">
  姓名<br><input type="text" id="name" name="name" required/><br>
  留言<br><textarea  id="content" name="content" rows="5" cols="80" required></textarea>
  <div><input class="btn btn-primary" type="submit" value="送出" /></div>

</form><hr>

  <?php

   foreach ($post_list as $list){
     echo '姓名:'.$list['name'].'<br>';
     echo 'IP:'.$list['ip'].'<br>';
     echo '留言:'.$list['content'].'<br>';
     echo '<input type="button" onclick="location.href=\'http://hanbz.dlinkddns.com/demo/index.php/post_controller/del/'.$list['sn'].'\'" value="刪除此則留言"/><br><hr>';
   }

  ?>

</div>
</body>
</html>
