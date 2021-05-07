
<div class="content-wrapper">
<div class="content-header">
<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap"></div> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row"><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">ID_Hóa đơn</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">ID_Người_dùng</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">SDT</th><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column descending" aria-sort="ascending">Tổng tiền</th><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column descending" aria-sort="ascending">Ngày đặt hàng</th><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column descending" aria-sort="ascending">Status</th><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column descending" aria-sort="ascending">Action</th></tr>
                  </thead>
                  <tbody>
                  <?php include("admin/action.php"); $f=new action();  $f->bill(); ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
              </div>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>
    </div>
</div>
<div id="khungTTDonhang" class="overclay">
                <span class="close" onclick="this.parentElement.style.transform = 'scale(0)'; " id="closekhungTTDonhang">&times;</span>
                <form method="post" action="" enctype="multipart/form-data">
                    <table class="overlayTable table-outline table-content table-header">
                        <tr>
                            <th colspan="2">Sửa Trạng Thái Đơn Hàng</th>
                            <td><input type="text" name="" style="display: none;" id="trangthai_kodoi" value=""></td>
                        </tr>
                        <tr>
                            <td>Trạng thái</td>
                            <td>
                                <select name="statusa" id="statusa">
                                    <option value="Processing">Processing </option>
                                    <option value="Processed">Processed </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="table-footer"> <div id="btsua"></div> </td>
                        </tr>

                    </table>
                </form>
            </div>
            <div id="khungXemDonHang" class="overclay_out">
                <form  method="post" action="" enctype="multipart/form-data">
                    <table class="overlayTable table-outline table-content table-header">
                        <tr>
                            <th style="color: white;" colspan="2">Xem chi tiết đơn hàng<button onclick="tat()" style="float: right;">X</button> </th>
                        </tr>
                        <tr>
                            <td>Stt:</td>
                            <td><input type="text" id="IDdh" name="IDdh"></td>
                        </tr>
                        <tr>
                            <td>Tên sản phẩm:</td>
                            <td><input type="text" name="Namedh" id="Namedh"></td>
                        </tr>
                        <tr>
                            <td>Kích thước</td>
                            <td>
                            <select name="size" id="size">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Màu sắc</td>
                            <td>
                            <select name="color" id="color">
                                    <option value="White">white</option>
                                    <option value="Black">black</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Số lượng:</td>
                            <td><input type="text" name="sldh" value="100" id="sldh"></td>
                        </tr>
                        <tr>
                            <td>Giá:</td>
                            <td><input type="text" name="pricedh" id="pricedh"></td>
                        </tr>
                        <tr>
                            <td>Tổng tiền:</td>
                            <td><input type="text" name="sumdh" id="sumdh"></td>
                        </tr>
                        <tr>
                            <td>Trạng thái</td>
                            <td>
                                <select name="status" id="status">
                                    <option value="Processing">Processing </option>
                                    <option value="Processed">Processed </option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <script>
                function xem(id){
                    $(".overclay").css("transform","scale(1)");
                    $.post("admin/ajax.php",{id:id,action:"bill"},function(rs){
                        rs.forEach(item=>{
                            $("#status_account").val(item.Status);
                            $("#btsua").html("<button id='btsua' onclick='update("+id+")'>thay doi</button>");               
                        });
                    });
                }
                function xemdetail(){
                    $(".overclay_out").css("transform","scale(1)");
                }
                function xemhd(id){
                    $("#khungXemDonHang").css("transform","scale(1)");
                    $.post("admin/ajax.php",{id:id,action:"xemsachhd"},function(rs){
                        rs.forEach(item=>{
                            $("#IDdh").val(id);
                            $("#Namedh").val(item.name);
                            $("#size").val(item.size);
                            $("#color").val(item.color);
                            $("#sldh").val(item.quality);
                            $("#pricedh").val(item.price);
                            $("#sumdh").val(item.totalCost);  
                            $("#status").val(item.Status);             
                        });
                    });
                }
                function update(id){
                    var statusa=$("#statusa").val()
                    $.post("admin/ajax.php",{id:id,statusa:statusa,action:"update_bill"},function(result){
                        alert(result);
                    });
                }
            </script>