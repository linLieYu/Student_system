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
    $q="update student_qm set name='$name',qm_chinese='$chinese',qm_math='$math',qm_english='$english',qm_flash='$flash',qm_tiyu='$sport',qm_jichu='$jichu',qm_c='$cpp',qm_music='$music' where id=$id";
    mysqli_query($con,$q);
?>
