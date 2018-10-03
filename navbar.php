

<style type="text/css">
  .navbar{
        background: white;
        margin-bottom: 20px;
        box-shadow: #f0f0f0 1px 2px 6px 1px;
        padding: 0px;
     }
</style>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="/logo2.png" height="100%"  /></a>
    </div>

    <!-- 控制用户登录 -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      </ul>
      <form class="navbar-form navbar-left" method="GET" action="/search/">
        <div class="form-group" >
          <input type="text" class="form-control" placeholder="输入搜索的文章" name="keyword">
        </div>
        <button type="submit" class="btn btn-default" id="search">搜索</button>
      </form>

      <?php
        session_start();
        if(isset($_SESSION['cur_user']))
          echo
          '<ul class="nav navbar-nav navbar-right">
            <li><a>欢迎， ' .$_SESSION["cur_user"]. '</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">个人中心 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/blog/editor/md/">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                &emsp;发布博客</a></li>
                <li><a href="/center/mine.php">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                &emsp;我的博客</a></li>
                <li><a href="welcome.php">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                &emsp;设置</a></li>
                <li role="separator" class="divider"></li>
                <li ><a href="/loginweb/logout.php" style="color:red">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                &emsp;退出</a></li>
              </ul>
            </li>
          </ul>';
        else
         echo 
          '<ul class="nav navbar-nav navbar-right">
            <li><a href="loginweb/">登录</a></li>
          </ul>';
      ?>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<script type="text/javascript">
  

</script>