<?php
    include(dirname(__DIR__)."\admin\config.php");

    $KhachHang = '';
    if(isset($_GET['KhachHang'])){
        $KhachHang = $_GET['KhachHang'];
        $sql = "SELECT * FROM tbl_cart WHERE user = '$KhachHang'";
        $query = $connect->query($sql);
    
        if($query){
            echo'<h1 class="heading-4 text-center">Lịch sử đơn hàng</h1>
                <table class="table table-bordered table-hover">
                    <thead class="text-center">
                        <tr>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Màu sắc</th>
                            <th>Kích thước</th>
                            <th>Số lượng</th>
                            <th>Giá bán</th>
                            <th>Tổng tiền</th>
                            <th>Tình trạng</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">';
            while($row = mysqli_fetch_array($query)){
                echo'<tr>
                        <td><img src="./modules/'.$row['thumbnail'].'" alt="lsdh" height="100px"/></td>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['color'].'</td>
                        <td>'.$row['size'].'</td>
                        <td>'.$row['quality'].'</td>
                        <td>'.$row['price'].'</td>
                        <td>'.$row['totalCost'].'</td>
                        <td>'.$row['Status'].'</td>
                    </tr>'; 
            }
            echo'</tbody></table>';
        }else{
            echo'<h1 class="heading-4">Lịch sử đơn hàng</h1>
                <table class="table table-bordered table-hover">
                   <tr>
                        <td colspan=8 style="padding: 9%">
                            <p>Lịch sử đơn hàng của bạn rỗng</p>
                            <a href="./index.php">Mua hàng thêm</a>
                        </td>
                   </tr> 
                </table>';
        }
    }
?>