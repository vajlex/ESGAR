<?php
include_once "query.php";

$wholeJson = $_POST['wholeJson'];
if(isset($wholeJson)){
  $sys_id = $wholeJson['sys_id'];
  // note the UNESCAPED option
  $encJson = json_encode($wholeJson, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
  //  note the $anno_table must be escaped here as ". $anno_table ." 
  $sql = "INSERT INTO ". $anno_table ." (sys_id, origin_json, new_json) VALUES('".$sys_id."', '".$encJson.
"', '".$encJson."')";
  runQuery($sql);
}

?>