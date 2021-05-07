<?php
include_once("./modules/admin/config.php");
        $perPage = 5;
        $page = 0;
        if (isset($_POST['page'])) { 
            $page  = $_POST['page']; 
        } else { 
            $page=1; 
        };  
        $startFrom = ($page-1) * $perPage;  
        $sqlQuery = "SELECT ID_Product, Name
            FROM tbl_product ORDER BY ID_Product ASC LIMIT $startFrom, $perPage";  
            //echo $sqlQuery;
        $result = mysqli_query($connect, $sqlQuery); 
        $paginationHtml = '';
        while ($row = mysqli_fetch_assoc($result)) {  
            $paginationHtml.='<div>';  
            $paginationHtml.='<div>'.(++$startFrom).'</div>';
            $paginationHtml.='<div>'.$row["Name"].'</div>';
            $paginationHtml.='</div>';  
        } 
        $jsonData = array(
            "html"  => $paginationHtml, 
        );
        echo json_encode($jsonData);
?>