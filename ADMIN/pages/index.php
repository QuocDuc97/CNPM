<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Add Course</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/metisMenu.min.css" rel="stylesheet">
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">
        <link href="../css/startmin.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            fieldset {margin-bottom: 1em;}
            label {padding-right: 3em;}
        </style>

       
    </head>
    <body>
   <?php
require 'Header.php';
?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Bảng điều khiển</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-comments fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">26</div>
                                            <div>Bình luận mới</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Xem chi tiết</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">12</div>
                                            <div>Nhiệm vụ mới !</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Xem chi tiết</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-shopping-cart fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">124</div>
                                            <div>Đơn hàng mới</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Xem chi tiết</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">13</div>
                                            <div>Khách hàng mới</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Xem chi tiết</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-bar-chart-o fa-fw"></i>Biểu đồ theo dõi
                                    <div class="pull-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                                    data-toggle="dropdown">
                                                Hành động
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                               <li><a href="#">Hàng ngày</a>
                                                </li>
                                                <li><a href="#">Hàng tuần</a>
                                                </li>
                                                <li><a href="#">Hàng tháng</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a href="#">Hàng năm</a>
                                                </li>
                                                <li><a href="#">Theo quý</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div id="morris-area-chart"></div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-bar-chart-o fa-fw"></i> Biểu đồ thống kê
                                    <div class="pull-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                                    data-toggle="dropdown">
                                                Hành động
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Hàng ngày</a>
                                                </li>
                                                <li><a href="#">Hàng tuần</a>
                                                </li>
                                                <li><a href="#">Hàng tháng</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a href="#">Hàng năm</a>
                                                </li>
                                                <li><a href="#">Theo quý</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Ngày</th>
                                                        <th>Thời gian</th>
                                                        <th>Số tiền</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>3326</td>
                                                        <td>10/21/2013</td>
                                                        <td>3:29 PM</td>
                                                        <td>$321.33</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3325</td>
                                                        <td>10/21/2013</td>
                                                        <td>3:20 PM</td>
                                                        <td>$234.34</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3324</td>
                                                        <td>10/21/2013</td>
                                                        <td>3:03 PM</td>
                                                        <td>$724.17</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3323</td>
                                                        <td>10/21/2013</td>
                                                        <td>3:00 PM</td>
                                                        <td>$23.71</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3322</td>
                                                        <td>10/21/2013</td>
                                                        <td>2:49 PM</td>
                                                        <td>$8345.23</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3321</td>
                                                        <td>10/21/2013</td>
                                                        <td>2:23 PM</td>
                                                        <td>$245.12</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3320</td>
                                                        <td>10/21/2013</td>
                                                        <td>2:15 PM</td>
                                                        <td>$5663.54</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3319</td>
                                                        <td>10/21/2013</td>
                                                        <td>2:13 PM</td>
                                                        <td>$943.45</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.col-lg-4 (nested) -->
                                        <div class="col-lg-8">
                                            <div id="morris-bar-chart"></div>
                                        </div>
                                        <!-- /.col-lg-8 (nested) -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                          
                        </div>
                        <!-- /.col-lg-8 -->
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-bell fa-fw"></i> Bảng thông báo
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item">
                                            <i class="fa fa-comment fa-fw"></i> Bình luận mới
                                                <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                                </span>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="fa fa-twitter fa-fw"></i> 3 Người theo dõi
                                                <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                                </span>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="fa fa-envelope fa-fw"></i> Tin nhắn trả lời
                                                <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                                </span>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="fa fa-tasks fa-fw"></i> New Task
                                                <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                                </span>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="fa fa-warning fa-fw"></i> máy chủ không phản hồi
                                                <span class="pull-right text-muted small"><em>10:57 AM</em>
                                                </span>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="fa fa-shopping-cart fa-fw"></i> Đặt hàng mới
                                                <span class="pull-right text-muted small"><em>9:49 AM</em>
                                                </span>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="fa fa-money fa-fw"></i> Thanh toán 
                                                <span class="pull-right text-muted small"><em>Yesterday</em>
                                                </span>
                                        </a>
                                    </div>
                                    <!-- /.list-group -->
                                    <a href="#" class="btn btn-default btn-block">Tất cả cảnh báo</a>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-bar-chart-o fa-fw"></i> Biều đồ tổng quan
                                </div>
                                <div class="panel-body">
                                    <div id="morris-donut-chart"></div>
                                    <a href="#" class="btn btn-default btn-block">Xem chi tiết</a>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                            
                                <div class="panel-body">
                                    <ul class="chat">
                                        <li class="left clearfix">
                                                <span class="chat-img pull-left">
                                                    <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
                                                         class="img-circle"/>
                                                </span>

                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <strong class="primary-font">Jack Sparrow</strong>
                                                    <small class="pull-right text-muted">
                                                        <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                                    </small>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                                    ornare dolor, quis ullamcorper ligula sodales.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="right clearfix">
                                                <span class="chat-img pull-right">
                                                    <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar"
                                                         class="img-circle"/>
                                                </span>

                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <small class=" text-muted">
                                                        <i class="fa fa-clock-o fa-fw"></i> 13 mins ago
                                                    </small>
                                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                                    ornare dolor, quis ullamcorper ligula sodales.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="left clearfix">
                                                <span class="chat-img pull-left">
                                                    <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
                                                         class="img-circle"/>
                                                </span>

                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <strong class="primary-font">Jack Sparrow</strong>
                                                    <small class="pull-right text-muted">
                                                        <i class="fa fa-clock-o fa-fw"></i> 14 mins ago
                                                    </small>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                                    ornare dolor, quis ullamcorper ligula sodales.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="right clearfix">
                                                <span class="chat-img pull-right">
                                                    <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar"
                                                         class="img-circle"/>
                                                </span>

                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <small class=" text-muted">
                                                        <i class="fa fa-clock-o fa-fw"></i> 15 mins ago
                                                    </small>
                                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                                    ornare dolor, quis ullamcorper ligula sodales.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.panel-body -->
                                <div class="panel-footer">
                                    <div class="input-group">
                                        <input id="btn-input" type="text" class="form-control input-sm"
                                               placeholder="Trả lời bình luận..."/>
                                            <span class="input-group-btn">
                                                <button class="btn btn-warning btn-sm" id="btn-chat">
                                                    Send
                                                </button>
                                            </span>
                                    </div>
                                </div>
                                <!-- /.panel-footer -->
                            </div>
                            <!-- /.panel .chat-panel -->
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../js/raphael.min.js"></script>
        <script src="../js/morris.min.js"></script>
        <script src="../js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
