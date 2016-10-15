<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>轻松学会Laravel</title>
    <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>


<!--头部-->
<div class="jumbotron">
    <div class="container">
        <h2>轻松学会Laravel</h2>

        <p>玩转Laravel表单</p>
    </div>
</div>


<!--中间内容区-->
<div class="container">
    <div class="row">

        <!--左侧菜单区域-->
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item active">学生列表</a>
                <a href="form.html" class="list-group-item ">新增学生</a>
            </div>
        </div>

        <!--右侧内容区域-->
        <div class="col-md-9">
            <!--成功提示框-->
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>成功！</strong>操作成功提示！
            </div>


            <!--失败提示框-->
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>失败！</strong>操作失败提示！
            </div>


            <!--自定义内容区域-->
            <div class="panel panel-default">
                <div class="panel-heading">学生列表</div>
                <table class="table table-striped table-hover table-responsive">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>姓名</th>
                        <th>年龄</th>
                        <th>性别</th>
                        <th>添加时间</th>
                        <th>ID</th>
                        <th width="120">操作</th>
                    </tr>
                    </thead>
                    <tr>
                        <th scope="row">1</th>
                        <td>Bob</td>
                        <td>18</td>
                        <td>男</td>
                        <td>2016-10-15</td>
                        <td>20141234</td>
                        <td>
                            <a href="">详情</a>
                            <a href="">修改</a>
                            <a href="">删除</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>18</td>
                        <td>男</td>
                        <td>2016-10-15</td>
                        <td>20141235</td>
                        <td>
                            <a href="">详情</a>
                            <a href="">修改</a>
                            <a href="">删除</a>
                        </td>
                    </tr>
                    </thead>
                </table>
            </div>


            <!--分页-->
            <div>
                <ul  class="pagination pull-right">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a> </li>
                    <li ><a href="#">2</a> </li>
                    <li><a href="#">3</a> </li>
                    <li ><a href="#">4</a> </li>
                    <li ><a href="#">5</a> </li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>

<!--尾部-->
<div class="jumbotron" style="margin: 0;">
    <div class="container">
        <span>@2016 immoc</span>
    </div>
</div>


<!--jquery文件-->

</body>
</html>