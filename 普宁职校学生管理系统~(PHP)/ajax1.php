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
    $id=$_POST['id'];
    $name=$_POST['ntext'];
    $chinese=$_POST['cntext'];
    $math=$_POST['mtext'];
    $english=$_POST['etext'];
    $cpp=$_POST['ctext'];
    $flash=$_POST['ftext'];
    $music=$_POST['musictext'];
    $sport=$_POST['ttext'];
    $jichu=$_POST['jtext'];
    $q="update student_qz set name='$name',qz_chinese='$chinese',qz_math='$math',qz_english='$english',qz_flash='$flash',qz_tiyu='$sport',qz_jichu='$jichu',qz_c='$cpp',qz_music='$music' where id=$id";
    mysqli_query($con,$q);
?>
