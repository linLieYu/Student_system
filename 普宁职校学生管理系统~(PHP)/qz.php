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
        if(isset($_POST['tianjia'])){
          $tianjia="INSERT INTO student_qz(name,qz_chinese,qz_math,qz_english,qz_flash,qz_tiyu,qz_music,qz_jichu,qz_c)VALUES
          ('待添加','待添加','待添加','待添加','待添加','待添加','待添加','待添加','待添加');";
          mysqli_query($con,$tianjia);
        }
        $q="select * from web";
        $r=mysqli_query($con,$q);
        $array1=mysqli_fetch_array($r);
        $q1="select * from student_qz";
        $r1=mysqli_query($con,$q1);
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
                            <span class="username"><?php echo $array1['1']; ?></span>
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
                              软件一班期中成绩
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class=" icon-bookmark-empty"></i> 座号</th>
                                  <th><i class=" icon-user"></i> 姓名</th>
                                  <th><i class="icon-book"></i> 语文</th>
                                  <th><i class=" icon-bar-chart"></i> 数学</th>
                                  <th><i class="icon-font"></i>英语</th>
                                  <th><i class="icon-desktop"></i> C语言</th>
                                  <th><i class="icon-magic"></i> flash</th>
                                  <th><i class="icon-music"></i> 音乐</th>
                                  <th><i class="icon-group"></i> 体育</th>
                                  <th><i class="icon-desktop"></i> 计算机基础</th>
                                  <form action="qz.php" method="post">
                                  <th><button type="submit" name="tianjia" class="btn btn-round btn-success">添加数据</button></th>
                                </form>
                              </tr>
                            </thead>
                              <tbody>
                                <?php
                                  while($array = mysqli_fetch_array($r1)){
                                    echo "<tr x-id=".$array['id'].">
                                          <div data-role=\"fieldcontain\">
                                          <td>".$array['id']."</td>
                                          <td>".$array['name']."</td>
                                          <td>".$array['qz_chinese']."</td>
                                          <td>".$array['qz_math']."</td>
                                          <td>".$array['qz_english']."</td>
                                          <td>".$array['qz_c']."</td>
                                          <td>".$array['qz_flash']."</td>
                                          <td>".$array['qz_music']."</td>
                                          <td>".$array['qz_tiyu']."</td>
                                          <td>".$array['qz_jichu']."</td>
                                        <td>
                                            <button class=\"btn btn-success btn-xs x-submit\" type=\"submit\"><i class=\"icon-ok\"></i></button>
                                            <button class=\"btn btn-primary btn-xs x-edit\"><i class=\"icon-pencil\"></i></button>
                                            <button class=\"btn btn-danger btn-xs\"><i class=\"icon-trash \"></i></button>
                                        </td>
                                      </div>
                                    </tr>";
                                  }
                                  mysqli_close($con);
                                    ?>
                              </tbody>
                          </table>
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
    <script type="text/javascript">
			$(document).ready(function() {
				//edit
				$("button.x-edit").bind("click", function() {
					var nodes = this.parentNode.parentNode.children;
					//取值&賦值
					//1
          var itext = nodes[0].innerText;
					nodes[0].innerHTML = '<input type="text" style="width:50px;" value="' + itext + '"></input>';
					//2
          var ntext = nodes[1].innerText;
          nodes[1].innerHTML = '<input type="text" style="width:60px;" value="' + ntext + '"></input>';
					//3
					var cntext = nodes[2].innerText;
					nodes[2].innerHTML = '<input type="text" style="width:60px;" value="' + cntext + '"></input>';
          //4
          var mtext = nodes[3].innerText;
					nodes[3].innerHTML = '<input type="text" style="width:60px;" value="' + mtext + '"></input>';
          //5
          var etext = nodes[4].innerText;
					nodes[4].innerHTML = '<input type="text" style="width:60px;" value="' + etext + '"></input>';
          //6
          var ctext = nodes[5].innerText;
					nodes[5].innerHTML = '<input type="text" style="width:60px;" value="' + ctext + '"></input>';
          //7
          var ftext = nodes[6].innerText;
					nodes[6].innerHTML = '<input type="text" style="width:60px;" value="' + ftext + '"></input>';
          //8
          var musictext = nodes[7].innerText;
					nodes[7].innerHTML = '<input type="text" style="width:60px;" value="' + musictext + '"></input>';
          //9
          var ttext = nodes[8].innerText;
					nodes[8].innerHTML = '<input type="text" style="width:60px;" value="' + ttext + '"></input>';
          //10
          var jtext = nodes[9].innerText;
					nodes[9].innerHTML = '<input type="text" style="width:60px;" value="' + jtext + '"></input>';
				});
				//submit
				$("button.x-submit").bind("click", function() {
					var nodes = this.parentNode.parentNode.children;

					if(nodes[1].children[0] != undefined) {
						//取值
						//1
						var itext = nodes[0].children[0].value;
						//2
						var ntext = nodes[1].children[0].value;
						//3
						var cntext = nodes[2].children[0].value;
            //4
						var mtext = nodes[3].children[0].value;
            //5
						var etext = nodes[4].children[0].value;
            //6
						var ctext = nodes[5].children[0].value;
            //7
						var ftext = nodes[6].children[0].value;
            //8
						var musictext = nodes[7].children[0].value;
            //9
						var ttext = nodes[8].children[0].value;
            //10
						var jtext = nodes[9].children[0].value;

						isEdit = $.ajax({data: {id: this.parentNode.parentNode.getAttribute('x-id'),itext:itext,ntext: ntext, cntext: cntext,mtext: mtext,etext: etext,ctext: ctext,ftext: ftext,musictext: musictext,ttext: ttext,jtext: jtext },type:'POST',url:"ajax1.php",async:false});

						if(isEdit == 'undefined') { //若未成功，將三個需要顯示的值替換為ajax返回的從數據庫中取得的值（此下為模擬值）
							alert('编辑失败！！(；′⌒`)');
							ftext = '未成功';
							atext = '未成功';
							ltext = '未成功';
						}
						//Ps. 以上判定儘為模擬，實際情形中提交時，還應當判定是否為空字符串，是否剔除首尾空格，url是否合法等

						//賦值
						//1
            nodes[0].innerHTML = itext;
						//2
            nodes[1].innerHTML = ntext;
						//3
						nodes[2].innerHTML = cntext;
            //4
						nodes[3].innerHTML = mtext;
            //5
						nodes[4].innerHTML = etext;
            //6
						nodes[5].innerHTML = ctext;
            //7
						nodes[6].innerHTML = ftext;
            //8
						nodes[7].innerHTML = musictext;
            //9
						nodes[8].innerHTML = ttext;
            //10
						nodes[9].innerHTML = jtext;
					}
				});
			});
		</script>
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  </body>
</html>
