<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

include 'startpage.php';
include 'navbar.php';

if(!isset($_GET['p'])){
  include 'home.php';
}else{
  if(isset($_GET['d'])){
    if(file_exists($_GET['d'].'/'.$_GET['p'].".php"))
      include($_GET['d'].'/'.$_GET['p'].".php");
      else {
        include("nopage.php");
      }
  }else{
    include($_GET['p'].".php");
  }
}

include 'footer.php';
include 'endpage.php';

?>
