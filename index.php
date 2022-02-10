<?php
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
