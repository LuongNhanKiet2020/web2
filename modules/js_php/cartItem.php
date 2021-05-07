 <?php
    $count = 0; $currentPage = 1;
    if(isset($_GET['page'])){
        $currentPage = $_GET['page'];
    }
    $count = 1;
    $user = $_SESSION['userPocket']['user'];
    $sql ="SELECT * FROM tbl_cart WHERE user='$user'";
    $result = $connect->query($sql);
    $num = mysqli_num_rows($result);
    if($_SESSION['userPocket']['user'] == "login" && $num <= 0){
        unset($_SESSION['cart']);
        echo"<table class='table table-bordered table-hover'>
                <thead class='text-center'>
                    <tr>
                        <th>STT</th>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Màu sắc</th>
                        <th>Kích thước</th>
                        <th>Số lượng</th>
                        <th>Giá bán</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>
                <tbody class='text-center'>
                    <tr>
                        <td colspan='8' style='padding: 9%'>
                            <h5>Giỏ hàng</h5>
                            <p>Giỏ hàng của bạn rỗng</p>
                            <a href='index.php'>Đăng nhập để mua hàng</a>
                        </td>
                    </tr>
                </tbody>
            </table>";
    }else{
        $data = [];
        $totalCost = 0;
        $num_row = mysqli_num_rows($result);
        if(empty($_SESSION['cart'])){
            echo"<h1 style='text-align:center;'>Lịch sử đơn hàng</h1>";
            echo"<table class='table table-bordered table-hover'>
            <thead class='text-center'>
                <tr>
                    <th>STT</th>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Màu sắc</th>
                    <th>Kích thước</th>
                    <th>Số lượng</th>
                    <th>Giá bán</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody class='text-center' id='body-text'>";
            if($num_row <= 0){
                echo"<tr>
                        <td colspan='8' style='padding: 9%'>
                            <h5>Giỏ hàng</h5>
                            <p>Giỏ hàng của bạn rỗng</p>
                            <a href='index.php'>Đăng nhập để mua hàng</a>
                        </td>
                    </tr>";
            }else{
                
                while($row = mysqli_fetch_array($result)){      
                    echo'<tr>
                            <td>'.($count++).'</td>
                            <td><img src="modules/'.$row['thumbnail'].'" alt="sp" height="100px"/></td>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['color'].'</td>
                            <td>'.$row['size'].'</td>
                            <td>'.$row['quality'].'</td>
                            <td>'.$row['price'].'</td>
                            <td>'.($row['price']*$row['quality']).'</td>
                            <td>'.$row['Status'].'</td>
                    </tr>';
                    $_SESSION['cart'][$row['id']] = $row;
                    print_r($_SESSION['cart'][$row['id']]['quality']);
                    $totalCost += $row['totalCost'];
                }
                echo"<script>
                    $(document).ready(function(){
                        $('#btnThanhToan').attr('style', 'display:none')
                    })
                </script>";
            }
            echo"</tbody>
            </table>";
            $_SESSION['userPocket']['pocket'] = $totalCost;
        }else{
            echo"<table class='table table-bordered table-hover'>
            <thead class='text-center'>
                <tr>
                    <th>STT</th>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Màu sắc</th>
                    <th>Kích thước</th>
                    <th>Số lượng</th>
                    <th>Giá bán</th>
                    <th>Tổng tiền</th>
                    <th>Xoá</th>
                </tr>
            </thead>
            <tbody class='text-center' id='body-text'>";
            $totalPrice = 0;
            foreach ($_SESSION['cart'] as $key => $value) {
                $totalCost = $value['price'] * $value['quality'];
                echo '<tr>
                        <td>'.($count++).'</td>
                        <td><img src="modules/'.$value['thumbnail'].'" alt="sp" height="100px"/></td>
                        <td>'.$value['name'].'</td>
                        <td>'.$value['color'].'</td>
                        <td>'.$value['size'].'</td>
                        <td>
                            <input id="num'.$key.'" class="form-control" style="width:18%; margin:0 auto" type="number" onChange="TangGiamSL('.$key.', '.$value['price'].');" min="0" value='.$value['quality'].'>
                        </td>
                        <td>'.$value['price'].'</td>
                        <td>'.$totalCost.'</td>

                        <td><button class="btn btn-danger" onClick="XoaQuanAo('.$key.','.$totalCost.');">Xoá</button></td>
                    </tr>';
                $totalPrice += $totalCost;
            }
            echo"</tbody>
            </table>";
            $_SESSION['userPocket']['pocket'] = $totalPrice;
        }
            // $begin = ($currentPage - 1) * 3;
            // $end = $currentPage * 3;
            // $totalCost = 0;
            // for($i=$begin; $i < $_SESSION['numberCart']; $i++) {
            //     $cartItem = $_SESSION['cart'][$i];
            //     $giaban = (int)$cartItem['price'];
            //     $soluong = (int)$cartItem['quality'];
            //     $totalCost = $giaban*$soluong;
            //     if($i < $end){
            //         echo'<script>$("#body-text").append(`<tr>
            //             <td>'.($i+1).'</td>
            //             <td><img src="modules/'.$cartItem['thumbnail'].'" alt="sp" height="100px"/></td>
            //             <td>'.$cartItem['name'].'</td>
            //             <td>'.$cartItem['color'].'</td>
            //             <td>'.$cartItem['size'].'</td>
            //             <td>
            //                 <input id="num'.$i.'" class="form-control" style="width:18%; margin:0 auto" type="number" onChange="TangGiamSL('.$i.', '.$cartItem['price'].');" min="0" value='.$cartItem['quality'].'>
            //             </td>
            //             <td>'.$cartItem['price'].'</td>
            //             <td>'.$totalCost.'</td>
            //             <td><button class="btn btn-danger" onClick="XoaQuanAo('.$i.','.$totalCost.');">Xoá</button></td>
            //         </tr>`)</script>';
            //     }
            // }
        echo"<script>
            $(document).ready(function(){
                $('.footer_bg').attr('style', 'display:none')
            })
        </script>"; 
    }
    // session_destroy();
?>
<script>
    function XoaQuanAo(idQuanAo, totalCost){
        var xacnhan = confirm("Co muon xoa san pham nay khong ?");
        if(!xacnhan){
            return
        }
        $.post('modules/js_php/xoa_ajax.php',{
            idQuanAo: idQuanAo,
            totalCost: totalCost
        }, function(data){
            alert(data)
            window.location.reload()
        })
    }
    // function SuaQuanAo(idQuanAo, SanPham){
    //     window.location.href = "index.php?action=detail&id="+SanPham+"&sq="+idQuanAo+""
    // }
    function TangGiamSL(id, price){
        var quality_update = $('#num'+id+'').val()
        $.get('modules/js_php/tanggiamsl_ajax.php',{
            id: id,
            quality_update: quality_update,
            price: price
        }, function(data){
            alert(data)
            window.location.reload()
        })

    }
</script>