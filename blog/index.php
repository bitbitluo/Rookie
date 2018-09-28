<!DOCTYPE html>
<html>
<head>
  <title>菜鸟博客</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">

     body{
        background: #f4f4f4;
     }

     .page{
         padding: 25px 60px;
        background: white;
     }
     
     .navbar{
        background: white;
        margin-bottom: 20px;
        box-shadow: #f0f0f0 1px 2px 6px 1px;
        padding: 0px;
     }

     #author-avatar{
      width: 50px;
      height: 50px;
      box-shadow: #f0f0f0 1px 2px 6px 1px;
      margin: 20px;
    }

    #author-info{
      box-shadow: #f0f0f0 0px 0px 6px 1px;
      padding: 20px 5px 10px 5px;
      margin-top: 25px;
      margin-bottom: 80px;
    }

    #author-right{
      display: inline;
    }


  </style>
</head>
<body>

  <?php include("../navbar.php");
        include("function/get_blog.php");
   ?>
  <div class="col-md-2"></div>
  <div class="col-md-8 page">

      <h1><b id="title">最新150本IT程序类经典书籍<b></h1>

      <div id="author-info">
          <img id="author-avatar" class="img-circle" src=<?php echo '/img/avatar/' . $_SESSION['cur_user'] . '.jpg' ?> ></img>
          <div id="author-right">
            作者：一笑奈何 时间：2015-6-6 &emsp; <button type="button" class="btn btn-default">
              <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>关注</button> 
          </div>
      </div>

      <div id="#blog">
          <?php echo $row['blog'] ?>
      </div>

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>


</body>
</html>