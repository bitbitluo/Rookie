<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">

	.nav{
		margin-top: 30px;
		height: 100px;
	}


    .avatar{
      width: 150px;
      height: 150px;
      box-shadow: #004844 1px 1px 5px 2px;
      position:relative;
      top:50%;
      transform:translateY(-50%);
    }

    .avatar-bg{
      background: #009688;
      background-repeat:no-repeat; background-size:100% 100%;
      height: 240px;
    }


    .line{
      margin-top: 5px;
      margin-bottom: 14px;
      background: #e4e4e4;
      height: 1px;
    }

    .avatar-show{
      width: 100px;
      height: 100px;

    }

    p>span{
    	color: #999999;
    }

    .right{
    	padding-left: 50px;
    	padding-right: 50px;
    }

    



   </style>
</head>


<body>




	<div class="nav text-center">

		<h1><b>个性化设置</b></h1>
	</div>

	<div class="line"></div><br><br>

	<div class="col-lg-2 col-md-1"></div>

	<div class="col-lg-3 col-md-5" >
		<div class="thumbnail">

		    <div class="avatar-bg">
		      <img src="/img/avatar/5.jpg" class="avatar img-circle  center-block " id="avatar">
		   
		    </div>

		    <div class="text-center" >
		      <h3>1</h3><br>

		      <div class="row">

		      	<div class="col-xs-4 text-right">
		      		<p><span>个性签名: </span></p>
		      		<p><span>邮箱: </span></p>	
		      		<br>
		      	</div>

		      	<div class="col-xs-8 text-left">
		      		<p id="my-sign">这家伙很懒，没有写签名</p>
		      		<p id="my-email">这家伙很懒，没有写邮箱</p> 
		      		<br>
		      	</div>

		    	</div>
		  	 </div><br>
		</div>
	</div>


	<div class="col-lg-4 col-md-5 right">

		

		  <div class="form-group">
		    <label for="email1">密保邮箱</label>
		    <input type="email" class="form-control" id="email" >
		  </div>

		  <div class="form-group">
		    <label for="sign" >个人签名</label>
		    <input type="text" id="sign" class="form-control">
		  </div>

		  <label>头像(你还可以在个人中心上传)</label>
		  <div>
		  	<img class="avatar-show img-circle" src="/img/avatar/1.jpg">
		  	<img class="avatar-show img-circle" src="/img/avatar/2.jpg">
		  	<img class="avatar-show img-circle" src="/img/avatar/3.jpg">
		  </div>

		  <div>
		  	<img class="avatar-show img-circle" src="/img/avatar/4.jpg">
		  	<img class="avatar-show img-circle" src="/img/avatar/5.jpg">
		  	<img class="avatar-show img-circle" src="/img/avatar/6.jpg">
		  </div><br>
		  <button id="change" class="btn btn-default">我选好啦！</button>

	</div>


<div class="modal fade" id="changeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" style="z-index:2000">
        <div class="modal-content" >
            <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title text-primary">
                <i class="fa fa-pencil"></i>
                            更换头像
                </h4>
            </div>


            <div class="modal-body">

                <p class="tip-info text-center">
                    未选择图片
                </p>

                <div class="img-container hidden">
                    <img src="" alt="" id="photo">
                </div>

                <div class="img-preview-box hidden">
                    <hr>
                    <span>150*150:</span>
                    <div class="img-preview img-preview-lg">
                    </div>
                    <span>100*100:</span>
                    <div class="img-preview img-preview-md">
                    </div>
                    <span>30*30:</span>
                    <div class="img-preview img-preview-sm">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <label class="btn btn-danger pull-left" for="photoInput">
                <input type="file" class="sr-only" id="photoInput" accept="image/*">
                <span>打开图片</span>
                </label>
                <button class="btn btn-primary disabled" disabled="true" onclick="sendPhoto();">提交</button>
                <button class="btn btn-close" aria-hidden="true" data-dismiss="modal">取消</button>
            </div>

        </div>
    </div>
</div>


<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://cdn.bootcss.com/cropper/3.1.3/cropper.min.js"></script>
 
<script type="text/javascript">

	$(function(){
		
		$('.avatar-show').click(function(){
			var $srcvalue = $(this).attr("src");
			$("#avatar").attr("src", $srcvalue);
		})	
		$("#sign").change(function(){ 
			var $text = $(this).val();
			if($text != "")
				$("#my-sign").text($text);
			else
				$("#my-sign").text("这家伙很懒，没有写签名");
		})
		$("#email").keydown(function(){ 
			var $text = $(this).val();
			if($text != "")
				$("#my-email").text($text);
			else
				$("#my-email").text("这家伙很懒，没有写签名");
		})

	})

    $("#change").click(function() {
        var email = $("#email").val();
        var sign = $("#sign").val();
        var avatar = $("#avatar").attr("src");

        var data = {email:email, sign:sign, avatar:avatar};  
        var htmlobj = $.ajax({
            type: "POST",
            url: "set.php",
            dataType: "JSON",
            data: data,
            async:false
        });
        var rspText = htmlobj.responseText;
        alert(rspText);
        location.href="/"
    });



  
	
</script>

</body>
</html>