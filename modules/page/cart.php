<div class="wrapper-form">
    <?php
        include("modules/js_php/cartItem.php");
    ?>
</div>
<?php
    if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){
        echo'<div class="container" id="btnThanhToan">
                <div class="row justify-content-end" style="padding: 1%">
                    <button class="btn btn-success" onclick="ThanhToanDonHang(\''.$_SESSION['userPocket']['user'].'\');">Thanh toán</button>
                </div>
        </div>';
    }
    print_r($_SESSION['cart']);
?>
<!--     <?php

        // if(isset($_SESSION['numberCart']) && $_SESSION['numberCart'] > 0){
        //     echo"<div class='container row' style='margin:0 auto; padding:1%;'>
        //             <div class='col-sm-3'>"; 
        //     echo "<ul class='pagination justify-content-center'>"; 
        //     if($currentPage > 1){
        //         echo '<li class="page-item"><a class="page-link" href="?action=cart&page='.($currentPage-1).'">Previous</a></li>';
        //     }
        //     $page = ceil($_SESSION['numberCart']/3);
        //         for($dem=0; $dem < $page; $dem++){
        //             if(($dem+1) == $currentPage){
        //                 echo'<li class="page-item active"><a class="page-link" href="index.php?action=cart&page='.($dem+1).'">'.($dem+1).'</a></li>';
        //             }else{
        //                 echo'<li class="page-item"><a class="page-link" href="index.php?action=cart&page='.($dem+1).'">'.($dem+1).'</a></li>';
        //             }
        //         }
        //     if($currentPage < $page){
        //         echo '<li class="page-item"><a class="page-link" href="?action=cart&page='.($currentPage+1).'">Next</a></li>';
        //     }
        //     echo"</ul></div>
        //         <div class='col-sm-9 text-right'>
        //             <button class='btn btn-success' onclick='ThanhToanDonHang(".$_SESSION['userPocket']['user'].", ".$_SESSION['numberCart'].");'>Thanh toán</button>
        //         </div>
        //     </div></div>";
    //}
?> -->
<script>
    function ThanhToanDonHang(KhachHang){
        $.post('modules/js_php/thanhtoanchokhachhang_ajax.php',{
            KhachHang: ''+KhachHang+''
        }, function(data){
            alert(data)
            window.location.reload()
        })
    }
</script>