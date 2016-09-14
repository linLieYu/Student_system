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
      $sq="select * from web";
      $rs=mysqli_query($con,$sq);
      $array=mysqli_fetch_array($rs);
      $toj="select id from student_qz";
      $tongji=mysqli_query($con,$toj);
      mysqli_close($con);
      $num=mysqli_num_rows($tongji);
     ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $array['1']; ?>-管理后台</title>

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
                            <span class="username"><?php echo $array['1']; ?></span>
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
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                          <div class="user-heading round">
                              <a href="#">
                                  <img src="http://ww2.sinaimg.cn/thumb150/a15b4afegw1f7oofi56y9j2034034my5" alt="">
                              </a>
                              <h1><?php echo $array['7']; ?></h1>
                              <p><?php echo $array['6']; ?></p>
                          </div>

                          <ul class="nav nav-pills nav-stacked">
                              <li class="active"><a href="#"> <i class="icon-user"></i>站点信息</a></li>
                              <li><a href="search.php" target="_blank"> <i class="icon-search"></i>查询成绩</a></li>
                          </ul>

                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                      <section class="panel">
                          <div class="bio-graph-heading">
                            此程序由普宁职校16软件班-林烈宇 制作~
                          </div>
                          <div class="panel-body bio-graph-info">
                              <h1>站点信息</h1>
                              <div class="row">
                                  <div class="bio-row">
                                      <p><span>网站名称 </span>: <?php echo $array['1']; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>用户名 </span>: <?php echo $array['2']; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>学生总数 </span>: <?php echo $num; ?></p>
                                  </div><br /><br /><br /><br /><br /><br /><br /><br />
                              </div>
                          </div>
                      </section>
                  </aside>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start--><br /><br /><br />
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
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/respond.min.js" ></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  <script>

      //knob
      $(".knob").knob();

  </script>


  </body>
</html>
