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

<?php include("navbar.php"); ?>

<!-- Place somewhere in the <body> of your page -->
<div class="row">
  <div class="col-md-1"></div>

  <div class="col-md-10">
    <div class="flexslider">
      <ul class="slides">
      <li>
        <img src="/img/slide/2.jpg" />
      </li>
      <li>
        <img src="/img/slide/3.jpg" />
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
      <div class="row blog_item"> 
        <div class="col-sm-8 nopading blog_left">
          <h4> 震惊，某高校男子居然在实验室干这个</h4>
          <div class="content">
            <p>春花秋月何时了？往事知多少。小楼昨夜又东风，故国不堪回首月明中。</p>
            <p>雕栏玉砌应犹在，只是朱颜改。问君能有几多愁？恰似一江春水向东流。</p>           
            <div>
              <a> 一笑奈何 </a> 
              &emsp;
              <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"> 200</span>
              &emsp;
              <span class="glyphicon glyphicon-time" aria-hidden="true"> 2015-5-6</span>
            </div>
          </div>
        </div>

        <div class="col-sm-4 nopading blog_right">
          <img src="/img/blog/test.jpg" alt="博客图片">
        </div>

      </div> 

      <div class="row blog_item"> 
        <div class="col-sm-8 nopading blog_left">
          <h4> 震惊，某高校男子居然在实验室干这个</h4>
          <div class="content">
            <p>春花秋月何时了？往事知多少。小楼昨夜又东风，故国不堪回首月明中。</p>
            <p>雕栏玉砌应犹在，只是朱颜改。问君能有几多愁？恰似一江春水向东流。</p>           
            <div>
              <a> 一笑奈何 </a> 
              &emsp;
              <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"> 200</span>
              &emsp;
              <span class="glyphicon glyphicon-time" aria-hidden="true"> 2015-5-6</span>
            </div>
          </div>
        </div>

        <div class="col-sm-4 nopading blog_right">
          <img src="/img/blog/test.jpg" alt="博客图片">
        </div>

      </div> 


      <!-- test -->

      <div class="row blog_item"> 
        <div class="col-sm-8 nopading blog_left">
          <h4> 震惊，某高校男子居然在实验室干这个</h4>
          <div class="content">
            <p>春花秋月何时了？往事知多少。小楼昨夜又东风，故国不堪回首月明中。</p>
            <p>雕栏玉砌应犹在，只是朱颜改。问君能有几多愁？恰似一江春水向东流。</p>           
            <div>
              <a> 一笑奈何 </a> 
              &emsp;
              <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"> 200</span>
              &emsp;
              <span class="glyphicon glyphicon-time" aria-hidden="true"> 2015-5-6</span>
            </div>
          </div>
        </div>

        <div class="col-sm-4 nopading blog_right">
          <img src="/img/blog/test.jpg" alt="博客图片">
        </div>

      </div> 

      <!-- //// -->
</div>

<div class="col-md-3">

  <ul class="media-list">
    <h4>推荐作者</h4>

    <li class="media">
      <div class="media-left">
        <a href="#">
          <img class="media-object avator" src="/img/avator/1.jpg" alt="...">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Media heading</h4>
        <p>其实我是一名演员，啦啦啦啦听听<p>
      </div>
    </li>

    <li class="media">
      <div class="media-left">
        <a href="#">
          <img class="media-object avator" src="/img/avator/1.jpg" alt="...">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Media heading</h4>
        <p>其实我是一名演员，啦啦啦啦听听<p>
      </div>
    </li>

    <li class="media">
      <div class="media-left">
        <a href="#">
          <img class="media-object avator" src="/img/avator/1.jpg" alt="...">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Media heading</h4>
        <p>其实我是一名演员，啦啦啦啦听听<p>
      </div>
    </li>

    <li class="media">
      <div class="media-left">
        <a href="#">
          <img class="media-object avator" src="/img/avator/1.jpg" alt="...">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Media heading</h4>
        <p>其实我是一名演员，啦啦啦啦听听<p>
      </div>
    </li>

  </ul>
</div>

<div class="col-md-1"></div>

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="jquery.flexslider-min.js"></script>


<script type="text/javascript">
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide"
    });
  });
</script>


</body>
</html>