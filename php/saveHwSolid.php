<?php
include 'conn.php';
//require "session.php";
$json = file_get_contents('php://input');
$data = json_decode($json);

//basic info table
$basicId = $data->basicId;
$hw_gen = $data->hw_gen;
$hw_coll = $data->hw_coll;
$hw_treat = $data->hw_treat;

        $query2 = "SELECT * FROM bmw_data WHERE b_id='" . $basicId . "'";
        $result = mysqli_query($conn, $query2)  or die(mysqli_error($conn));

        $rowcount = mysqli_num_rows($result);
        if ($rowcount == 0) {
            $query = "INSERT INTO bmw_data(b_id,hw_gen,hw_coll,hw_treat)
            VALUES ($basicId,$hw_gen,$hw_coll,$hw_treat)";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        }else{
            $query = "UPDATE  bmw_data set hw_gen=$hw_gen,hw_coll=$hw_coll,hw_treat=$hw_treat
               WHERE b_id='".$basicId."'";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        }
        echo  "success";
?>