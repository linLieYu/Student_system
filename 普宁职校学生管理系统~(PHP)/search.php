<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <?php
      require('config.php');
        mysqli_query($con,"set names utf8");
        $q="select * from web";
        $r=mysqli_query($con,$q);
        $array1=mysqli_fetch_array($r);
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $array1['1']; ?>-管理后台</title>

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
                            <span class="username"><?php echo $array1['7']; ?></span>
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
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              查询成绩
                              <span class="tools pull-right">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                          </header>
                          <div class="panel-body">
                              <form  action="search.php" method="post" class="form-inline" role="form">
                                  <div class="form-group">
                                      <input name="search" type="text" class=" form-control" placeholder="学生姓名" />
                                  </div>
                                  <input name="searchsub" type="submit" class="btn" value="Search" />
                              </form>
                              <br>
                              <?php
                                  if(isset($_POST['searchsub'])){
                                    if($_POST['search']!=''){
                                      $n=$_POST['search'];
                                      $searchsql_qz="select * from student_qz where name='$n'";
                                      $searchsql_qm="select * from student_qm where name='$n'";
                                      $qz_array=mysqli_query($con,$searchsql_qz);
                                      $qm_array=mysqli_query($con,$searchsql_qm);
                                      $array_qzcj=mysqli_fetch_array($qz_array);
                                      $array_qmcj=mysqli_fetch_array($qm_array);
                                      echo '姓名:'.$array_qzcj['name'].'<br /><br />&nbsp;&nbsp;期中语文:'.$array_qzcj['qz_chinese'].'&nbsp;&nbsp;期中数学:'.$array_qzcj['qz_math'].'&nbsp;&nbsp;期中英语:'.$array_qzcj['qz_english'].'&nbsp;&nbsp;期中flash:'.$array_qzcj['qz_flash'].'&nbsp;&nbsp;期中体育:'.$array_qzcj['qz_tiyu'].'&nbsp;&nbsp;期中音乐:'.$array_qzcj['qz_music'].'&nbsp;&nbsp;期中计算机基础:'.$array_qzcj['qz_jichu'].'&nbsp;&nbsp;期中C语言:'.$array_qzcj['qz_c'].'<br /><br />'.'&nbsp;&nbsp;期末语文:'.$array_qmcj['qm_chinese'].'&nbsp;&nbsp;期末数学:'.$array_qmcj['qm_math'].'&nbsp;&nbsp;期末英语:'.$array_qmcj['qm_english'].'&nbsp;&nbsp;期末flash:'.$array_qmcj['qm_flash'].'&nbsp;&nbsp;期末体育:'.$array_qmcj['qm_tiyu'].'&nbsp;&nbsp;期末音乐:'.$array_qmcj['qm_music'].'&nbsp;&nbsp;期末计算机基础:'.$array_qmcj['qm_jichu'].'&nbsp;&nbsp;期末C语言:'.$array_qmcj['qm_c'];
                                    }else{
                                      echo '不准提交空数据😒';
                                    }
                                  }
                              ?>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start--><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
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
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/gmaps.js"></script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <script src="js/gmaps-scripts.js"></script>


  </body>
</html>
