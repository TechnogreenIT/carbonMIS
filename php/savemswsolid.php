<?php
include 'conn.php';
//require "session.php";
$json = file_get_contents('php://input');
$data = json_decode($json);

//basic info table
$basicId = $data->basicId;
$msw_gen = $data->msw_gen;
$msw_col = $data->msw_col;
$t_comp = $data->t_comp;
$t_disp = $data->t_disp;
$n_yard = $data->n_yard;
$t_incin = $data->t_incin;
$yardData = $data->yardData;
$last_id=0;
        $query2 = "SELECT * FROM msw_data WHERE b_id='" . $basicId . "'";
        $result = mysqli_query($conn, $query2)  or die(mysqli_error($conn));
       
        $rowcount = mysqli_num_rows($result);
        if ($rowcount == 0) {
            $query = "INSERT INTO msw_data(b_id,msw_gen,msw_col,t_comp,t_disp,t_incin,n_yard)
            VALUES ($basicId,$msw_gen,$msw_col,$t_comp,$t_disp,$t_incin,$n_yard)";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            $last_id = mysqli_insert_id($conn);
            for($i=0;$i<sizeof($yardData);$i++){
                   $area = $yardData[$i]->area;
                   $lat = $yardData[$i]->lat;
                   $long = $yardData[$i]->long;
                   $app_waste = $yardData[$i]->app_waste;
                $query = "INSERT INTO yard(b_id,s_id,area,lat,loong,app_waste)
                VALUES ($basicId,$last_id,$area,$lat,$long,$app_waste)";
                $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            }
        }else{
            $row = mysqli_fetch_array($result);
            $last_id = $row['id'];
            $query = "UPDATE  msw_data set msw_gen=$msw_gen,msw_col=$msw_col,t_comp=$t_comp,
                       t_disp=$t_disp,t_incin=$t_incin,n_yard=$n_yard WHERE b_id='".$basicId."'";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            for($i=0;$i<sizeof($yardData);$i++){
                    $area = $yardData[$i]->area;
                    $lat = $yardData[$i]->lat;
                    $long = $yardData[$i]->long;
                    $app_waste = $yardData[$i]->app_waste;
                $query = "UPDATE yard set area=$area,lat=$lat,loong=$long,
                  app_waste=$app_waste WHERE b_id='".$basicId."' AND s_id=$last_id";
                $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            }
        }
        echo  "success";
?>