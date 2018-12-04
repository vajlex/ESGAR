<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	include_once "query.php";

	$id = $_POST['chgisid'];
    	/*  API endpoint for ESGAR json queries */
        $chgis = "http://maps.cga.harvard.edu/tgaz/placename/esgar/";
        $url = $chgis.$id;
        $sql = "SELECT count(*) FROM ".$anno_table." WHERE sys_id='".$id."'";
        $result = runQuery($sql);
        $data = $result->fetch_assoc();
        $data = implode(";",$data);
        if(intval($data)>0){
            $sql = "SELECT new_json FROM ".$anno_table." WHERE sys_id='".$id."' ORDER BY annoid DESC L
IMIT 1";
            $result = runQuery($sql);
            $data = $result->fetch_assoc();
            $data = implode(";",$data);
			/* json_encode for JSON data type, but use UNESCAPED! */
            $data = json_encode($data, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
            echo $data;
        }else{
            $data = file_get_contents($url);
            echo json_encode($data);
        }

?>