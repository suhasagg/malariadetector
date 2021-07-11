<?php

include_once 'common/common.php';
$db = new mysqli($cfg_dbhost,$cfg_dbuser,$cfg_dbpwd,$cfg_dbname);
$queryPrepare = "insert into pic(url) values(?)";
$stmt = $db->prepare($queryPrepare);
$stmt->bind_param("s",$time);
$stmt->execute();


$r = rand(1,6);

      $src = 'malariasamples/'.$r.'.jpg';


      $stmt->bind_param("s",$src);
      $stmt->execute();



?>
