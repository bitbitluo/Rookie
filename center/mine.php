
<!DOCTYPE html>
<html>
<head>
  <title>菜鸟博客</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link href="https://cdn.bootcss.com/cropper/3.1.3/cropper.min.css" rel="stylesheet">
  <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
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

    .left{
      color: #999999
    }

    .right{
      padding: 0;
    }

    .line{
      margin-top: 5px;
      margin-bottom: 14px;
      background: #e4e4e4;
      height: 1px;
    }

    .item span{
      font-size: 17px;
    }

    ul {
      list-style-type: none;
    }

    time, li p,  p span {
      color: #999999;
    }

    #user-photo {
        width:300px;
        height:300px;
        margin-top: 10px;
    }
    #photo {
        max-width:100%;
        max-height:350px;
    }
    .img-preview-box {
        text-align: center;
    }
    .img-preview-box > div {
        display: inline-block;;
        margin-right: 10px;
    }
    .img-preview {
        overflow: hidden;
    }
    .img-preview-box .img-preview-lg {
        width: 150px;
        height: 150px;
    }
    .img-preview-box .img-preview-md {
        width: 100px;
        height: 100px;
    }
    .img-preview-box .img-preview-sm {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    li a {
      color: black;
    }




   </style>



</head>



<body>

<?php include("../navbar.php");
      include("getInfo.php");
 ?>


<div class="col-lg-2 col-md-1"></div>

<div class="col-lg-3 col-md-4">
  <div class="thumbnail">

    <div class="avatar-bg">
  
    
      <img src=<?php echo $user['avatar']; ?> class="avatar img-circle  center-block " data-target="#changeModal" data-toggle="modal">
   
    </div>

    <div class="text-center" >
      <h3><?php echo $user['username']; ?></h3><br>
      <p><span>个性签名:</span> <?php echo $user['sign']; ?><p> 
      <p class="left"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&emsp;编辑</p>
  
    </div>
  </div><br>

  <div class="list-group">
  <a href="#" class="list-group-item active" style="background: #009688">
    &emsp;
  </a>
  <!-- <a href="#" class="list-group-item" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
   --> 
<a class="list-group-item" data-toggle="collapse" href="#love" aria-expanded="false" aria-controls="love">
  &emsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span>&emsp;收藏</a>    

<div class="collapse" id="love">
  <div class="well">
      <ul>
        <li>
          <img src="">
        </li>
      </ul> 
  </div>
</div>


  <a href="#" class="list-group-item">
    &emsp;<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>&emsp;关注</a>
  <a href="#" class="list-group-item">
    &emsp;<span class="glyphicon glyphicon-user" aria-hidden="true"></span>&emsp;粉丝 </a>
  <a href="#" class="list-group-item">
    &emsp;<span class="glyphicon glyphicon-bell" aria-hidden="true"></span>&emsp;消息 </a>
  
</div>
</div>




<div class="col-lg-5 col-md-6">

  <ul>
    <h2>我的博客</h2>
    <div class="line"><br>
    <?php while ( $myblog = ($myblogs-> fetch_assoc())) { ?>

          <li class="item" >
            <p>写作</p>
            <a href= <?php echo "/blog/?page=".$myblog["id"]?> >

            <span><?php echo $myblog['title']; ?></span>
            <time style="position: absolute; right: 3%"><?php echo $myblog['date']; ?></time>  
            <div class="line"></div>
        </a></li>

    <?php } ?>
  

  </ul>

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

  var initCropperInModal = function(img, input, modal){

        var $image = img;
        //input是下面红色按钮的打开图片
        var $inputImage = input;
        var $modal = modal;
        var options = {
            aspectRatio: 1, // 纵横比
            viewMode: 2,
            preview: '.img-preview' // 预览图的class名
        };
        // 模态框隐藏后需要保存的数据对象
        var saveData = {};
        var URL = window.URL || window.webkitURL;
        var blobURL;

        $modal.on('shown.bs.modal', function () {
            
            //图片处理
            $image.cropper( $.extend(options, {
                ready: function () {
                    // 当剪切界面就绪后，恢复数据
                    if(saveData.canvasData){
                        $image.cropper('setCanvasData', saveData.canvasData);
                        $image.cropper('setCropBoxData', saveData.cropBoxData);
                    }
                }
            }));
        }).on( 'hidden.bs.modal', function () {
            // 保存相关数据
            saveData.cropBoxData = $image.cropper('getCropBoxData');
            saveData.canvasData = $image.cropper('getCanvasData');
            // 销毁并将图片保存在img标签
            $image.cropper('destroy').attr('src',blobURL);
        } );

        if ( URL ) {
            $inputImage.change( function() {
                var files = this.files;
                var file;
                if (!$image.data('cropper')) {
                    return;
                }
                if (files && files.length) {
                    file = files[0];
                    if (/^image\/\w+$/.test(file.type)) {
    
                        if(blobURL) {
                            URL.revokeObjectURL(blobURL);
                        }
                        blobURL = URL.createObjectURL(file);
    
                        // 重置cropper，将图像替换
                        $image.cropper('reset').cropper('replace', blobURL);
    
                        // 选择文件后，显示和隐藏相关内容
                        $('.img-container').removeClass('hidden');
                        $('.img-preview-box').removeClass('hidden');
                        $('#changeModal .disabled').removeAttr('disabled').removeClass('disabled');
                        $('#changeModal .tip-info').addClass('hidden');
    
                    } else {
                        window.alert('请选择一个图像文件！');
                    }
                }
            });
        } else {
            $inputImage.prop('disabled', true).addClass('disabled');
        }
  }

    var sendPhoto = function(){

        $('#photo').cropper('getCroppedCanvas',{
            width:300,
            height:300
        }).toBlob(function(blob){
            // 转化为blob后更改src属性，隐藏模态框
            
            
            var formData=new FormData();
            formData.append('file', blob);
            var result = $.ajax({
                method:"post",
                url: "update.php", //用于文件上传的服务器端请求地址
                data: formData,
                processData: false,
                contentType: false,
                async:false
            });

            alert(result.responseText);




            $('#changeModal').modal('hide');
        });}

    
    $(function(){
        //changeModal为对话框
        initCropperInModal( $('#photo'), $('#photoInput'), $('#changeModal') );
    });
  
</script>


</body>
</html>