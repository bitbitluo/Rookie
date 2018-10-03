<!DOCTYPE html>
<html>
<head>
  <title>菜鸟博客</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="flexslider.css" type="text/css" /> 

   <style type="text/css">
     body{
        background: white;
     }
     .blog_item{
        background: white;
        box-shadow: #d4d4d4 1px 1px 2px 2px;
        margin-bottom: 2%;
     }

     .nopading{
        padding: 0px
     }

     .blog_left h4{
      background: #455a64;
      margin: 0px;
      padding: 5px;
      color: white;
     }

     .blog_item img{
      width: 100%;
      height: 150%;
     }
     
      p{
      color: #9e9e9e
     }

     .blog_list{
      margin-bottom: 10%;
     }

     .content{
      padding: 20px
     }

     .avator{
      width: 60px;
      height: 60px;
     }

     .media-list{
        background: white;
        box-shadow: #d4d4d4 1px 1px 2px 2px;
        padding: 5%;

     }

   </style>
</head>
<body>

<?php include("navbar.php");
  include("/connect.php");
  if(isset($_SESSION['cur_user'])){
      $username = $_SESSION['cur_user'];  
      $sql = "SELECT * FROM users WHERE username='$username' and avatar=''";
      $test = $conn->query($sql)->fetch_assoc();
        if($test){
            echo '
            <script>
              location.href="/welcome.php"
            </script>
            ';
        }
  } 
  
  $sql = "SELECT * FROM blogs ORDER BY id DESC LIMIT 5";
  $blogs = $conn->query($sql);
  $sql = "SELECT username, sign, avatar FROM users ORDER BY id DESC LIMIT 5";
  $users = $conn->query($sql);
   
?>



<!-- Place somewhere in the <body> of your page -->
<div class="row">
  <div class="col-md-1"></div>

  <div class="col-md-10">
    <div class="flexslider">
      <ul class="slides">
      <li>
        <img src="/img/slide/3.jpg" />
      </li>
      <li>
        <img src="/img/slide/2.jpg" />
      </li>
      <li>
        <img src="/img/slide/4.jpg" />
      </li>
      </ul>
    </div>
</div>

  <div class="col-md-1"></div>
</div>


<div class="col-md-1"></div>

<div class="col-md-7 blog_list">

      <?php while($row = ($blogs->fetch_assoc())) { ?>
      <div class="row blog_item"> 
        <div class="col-sm-8 nopading blog_left">
          <h4>&ensp; <?php echo substr($row["title"],0,50);?></h4>
          <div class="content">
                <br>
                <div class="struct-blog">
                    <?php echo $row["sub"];?>  
                </div><br>
                                      
            <div>
              <a> <?php echo substr($row["author"],0,10);?> </a> 
              &emsp;
              <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"> <?php echo substr($row["love"],0,10);?></span>
              &emsp;
              <span class="glyphicon glyphicon-time" aria-hidden="true"> <?php 
                  echo $row["date"];?>
                    </span> &emsp; <a href=<?php echo "/blog/?page=".$row["id"]?> >查看全文</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4 nopading blog_right">
          <img src=<?php echo $row["photo"] ?> alt="博客图片">
        </div>

      </div> 

      <?php } ?>


      <!-- //// -->
</div>

<div class="col-md-3">

  <ul class="media-list">
    <h4>推荐作者</h4>

    <?php while($row = ($users->fetch_assoc())) { ?>

    <li class="media">
      <div class="media-left">
        <a href="#">
          <img class="media-object avator" src=<?php echo $row["avatar"]?> alt="...">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading"><?php echo $row["username"]?></h4>
        <p><?php echo $row["sign"]?><p>
      </div>
    </li>

    <?php } ?>

    

  </ul>
</div>

<div class="col-md-1"></div>

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="jquery.flexslider-min.js"></script>


<script type="text/javascript">



  $(function() {

   

    $('.flexslider').flexslider({
      animation: "slide"
    });
  });
</script>


</body>
</html>