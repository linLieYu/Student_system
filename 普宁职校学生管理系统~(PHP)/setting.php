<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <?php
    require('config.php');
    session_start();
    if(isset($_SESSION['ok'])&&$_SESSION['ok']==1){
    }else{
    echo "<script>alert( '(ヾ(o◕∀◕)ﾉ请先登录' ); window.location.href = 'login.php'; </script>";
    exit;
    }
        mysqli_query($con,"set names utf8");
      if(isset($_POST['submit'])){
          $title=$_POST['title'];
        if($title!=''){
          $u="update web set school_name='$title' where id=1";
          mysqli_query($con,$u);
        }
      }
      $sq="select * from web";
      $rs=mysqli_query($con,$sq);
      $array=mysqli_fetch_array($rs);
     ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $array['school_name']; ?>-设置</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <section id="container" class="">
        <!--header start-->
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="#" class="logo" >普宁职业<span>技</span><span>术</span><span>学</span><span>校</span></a>
            <!--logo end-->
            <div class="top-nav ">
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="http://ww2.sinaimg.cn/thumb150/a15b4afegw1f7pnl9pdimj200t00tglw">
                            <span class="username"><?php echo $array['school_name']; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="admin.php"><i class="icon-dashboard"></i>仪表盘</a></li>
                            <li><a href="search.php"><i class=" icon-search"></i>查询成绩</a></li>
                            <li><a href="setting.php"><i class="icon-cog"></i> 设置</a></li>
                            <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a href="admin.php">
                          <i class="icon-dashboard"></i>
                          <span>仪表盘</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="icon-th"></i>
                          <span>学生成绩</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="qz.php">期中成绩</a></li>
                          <li><a  href="qm.php">期末成绩</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="search.php">
                          <i class=" icon-search"></i>
                          <span>查询成绩</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="change.php">
                          <i class=" icon-check"></i>
                          <span>修改密码</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="setting.php">
                          <i class="icon-cogs"></i>
                          <span>设置</span>
                      </a>
                  </li>
                  <li>
                      <a  href="logout.php">
                          <i class="icon-user"></i>
                          <span>退出登录</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              设置
                          </header>
                          <div class="panel-body">
                              <div class="stepy-tab">
                                  <ul id="default-titles" class="stepy-titles clearfix">
                                      <li id="default-title-0" class="current-step">
                                          <div>网站信息</div>
                                      </li>
                                      <li id="default-title-1" class="">
                                          <div>待开发</div>
                                      </li>
                                      <li id="default-title-2" class="">
                                          <div>版权信息</div>
                                      </li>
                                  </ul>
                              </div>
                              <form class="form-horizontal" id="default" method="post" action="setting.php">
                                  <fieldset title="网站信息" class="step" id="default-step-0">
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">网站标题</label>
                                          <div class="col-lg-10">
                                              <input type="text" name="title" class="form-control">
                                          </div><br /><br /><br />
                                          <center><h3>功能未完善,待开发</h3></center>
                                      </div>
                                      <input type="submit" class="finish btn btn-danger" name="submit" value="保存"/>
                                  </fieldset>
                                  <fieldset title="待开发" class="step" id="default-step-1" >
                                      <legend> </legend>
                                  </fieldset>
                                  <fieldset title="版权信息" class="step" id="default-step-2" >
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">网站制作</label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static"><a href="https://www.2ii.me" target="_blank">林烈宇</a></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">作者博客</label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static"><a href="http://www.2ii.me" target="_blank">http://www.2ii.me</a></p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Email Address</label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static">i@2ii.me</p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">QQ</label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static">809099942</p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">万达软件研发社交流群</label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static">185315672</p>
                                          </div>
                                      </div>
                                  </fieldset>
                                  <input type="submit" class="finish btn btn-danger" value="保存"/>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
            Copyright &copy; 2016-2020 by <a href="http://www.2ii.me">普职软件班林烈宇</a>
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="js/jquery.stepy.js"></script>


  <script>

      //step wizard

      $(function() {
          $('#default').stepy({
              backLabel: '返回',
              block: true,
              nextLabel: '前进',
              titleClick: true,
              titleTarget: '.stepy-tab'
          });
      });
  </script>


  </body>
</html>
