
<div class="content-wrapper">
<div class="content-header">
<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap"></div> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row"><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">ID_tai_khoan</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tài khoản</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Họ tên</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">sdt</th><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column descending" aria-sort="ascending">Status</th><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column descending" aria-sort="ascending">Action</th></tr>
                  </thead>
                  <tbody>
                  <?php include("admin/action.php"); $f=new action(); $f->account(); ?>
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
<div id="khungTTaccount" class="overclay">
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
                                <select name="status_account" id="status_account">
                                    <option value="banned">banned </option>
                                    <option value="accepted">accepted</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="table-footer"> <div id="btsua"></div> </td>
                        </tr>

                    </table>
                </form>
            </div>
<script>
                function hien(id){
                    $("#khungTTaccount").css("transform","scale(1)");
                    $.post("admin/ajax.php",{id:id,action:"Account"},function(rs){
                        rs.forEach(item=>{
                            $("#status_account").val(item.Status);
                            $("#btsua").html("<button id='btsua' onclick='update_account_status("+id+")'>thay doi</button>");               
                        });
                    });
                }
                function tat(){
                    $("#khungTTaccount").css("transform","scale(0)");
                }
                function  update_account_status(id){
                  var status_account=$("#status_account").val()
                    $.post("admin/ajax.php",{id:id,status_account:status_account,action:"update_account"},function(result){
                        alert(result);
                    });
                }
            </script>