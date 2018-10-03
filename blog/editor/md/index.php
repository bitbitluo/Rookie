<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8" />
        <title>菜鸟博客</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="../css/editormd.css" />
        <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" />
    </head>
    <body>

        
        <?php include("../../../test_login.php"); 
             
               
        ?>

        <div id="layout">
        

            
            <div id="test-editormd">
                <textarea style="display:none;"></textarea>
            </div>
        </div>

        <div style="margin:100px">
 
                 <button type="button" class="btn btn-default" click>
                        <span class="glyphicon glyphicon-remove" aria-hidden="true" onclick="back();"></span> 返回
                </button>

                 <button type="button" class="btn btn-success" data-target="#changeModal" data-toggle="modal">
                        <span class="glyphicon glyphicon-ok" aria-hidden="true" ></span> 发表
                 </button>    
        </div>


        <div class="modal fade" id="changeModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" >
                    <div class="modal-header" >
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title text-primary">
                        <i class="fa fa-pencil"></i>
                                    基本信息
                        </h4>
                    </div>

                    <div class="modal-body">

                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">文章标题</span>
                            <input type="text" class="form-control" placeholder="必须输入" aria-describedby="basic-addon1" id="title">
                        </div>

                        <br>

                        <!-- 图片预览 -->                        
                        <legend>封面预览</legend>
                        <div>
                            <img src="/img/bg/blog_bg.jpg" id="show" width="192px" height="108px">
                        </div>

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
                            <input type="file" class="sr-only" id="photoInput" accept="image/*" name="file">
                            <span>上传封面</span>
                        </label>
                        <button id ="save" class="btn btn-primary" onclick="save();">提交</button>
                        <button class="btn btn-close" aria-hidden="true" data-dismiss="modal">取消</button>
                    </div>

                </div>
            </div>
        </div>
        
        <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
        <link href="https://cdn.bootcss.com/cropper/3.1.3/cropper.min.css" rel="stylesheet">
        <script src="../editormd.min.js"></script>
        <script type="text/javascript">
			

            $(function() {

                var testEditor = editormd("test-editormd", {
                    width   : "90%",
                    height  : 640,
                    syncScrolling : "single",
                    path    : "../lib/"
                });

                $("#save").attr('disabled',true);
            });

            $("#photoInput").on("change", function(event){
                var r= new FileReader();
                f=$("#photoInput")[0].files[0];
                r.readAsDataURL(f);
                r.onload=function (e) {
                    $("#show")[0].src=this.result;
                };
            
            })



            $("#title").keydown(function(){ 
                var $text = $(this).val();
                if($text != "")
                    $("#save").attr('disabled',false);
                else
                    $("#save").attr('disabled',true);
            })

            // function save1(){
                
            //     var data = $(".markdown-body").html();
            //     var title = $("#title").val();

            //     var data = new FormData();
            //     //formdata.append('name', 'uploadImage');
            //     data.append("blog", data);
            //     data.append("title", title);

            //     var result = $.ajax({
            //         type: "POST",
            //         url: "save_edit.php",
            //         // data: {"blog": data, "title":title, 'img':$('#photoInput').get(0).files[0]},
            //         data: data,
            //         async:false
            //     })
            //     alert(result.responseText);
            // }

            function save(){
                var data = $(".markdown-body").html();
                var title = $("#title").val();
                
                var dd = data.replace(/<\/?.+?>/g," ");
                var dds = dd.replace(/ /g," ");//dds为得到后的内容
                var sub = dds.substring(0,45) 
                
                var formData = new FormData();
                formData.append("photoInput", $("#photoInput")[0].files[0]);
                formData.append("blog", data);
                formData.append("title", title);
                formData.append("sub", sub);                

                var result = $.ajax({
                    url: "test.php",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    async:false
                });
                alert("发表成功");
                location.href="/"
            }

            function back(){
                location.href="/";
            }


           

            


    
        </script>
    </body>
</html>