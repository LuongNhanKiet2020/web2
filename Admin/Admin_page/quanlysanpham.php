
<div class="content-wrapper">
<div class="content-header">
<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap"></div> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label><button onclick="hien()">Them san pham </button></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row"><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">ID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Name_of_Products</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Size</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Color</th><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column descending" aria-sort="ascending">Price</th><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column descending" aria-sort="ascending">Quantity</th><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column descending" aria-sort="ascending">Status</th><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column descending" aria-sort="ascending">Action</th></tr>
                  </thead>
                  <tbody>
                  <?php include("admin/action.php"); $b=new action(); $b->product(); ?>
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
<div id="khungThemSanPham" class="overclay_out">
                <form  method="post" action="" enctype="multipart/form-data">
                    <table class="overlayTable table-outline table-content table-header">
                        <tr>
                            <th style="color: white;" colspan="2">Thêm Sản Phẩm <button onclick="tat()" style="float: right;">X</button> </th>
                        </tr>
                        <tr>
                            <td>ID:</td>
                            <td><input type="text" id="IDthem" name="IDthem" disabled="false"></td>
                        </tr>
                        <tr>
                            <td>Name of product:</td>
                            <td><input type="text" name="Namethem" id="Namethem"></td>
                        </tr>
                        <tr>
                            <td>Size</td>
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
                            <td>Color</td>
                            <td>
                            <select name="color" id="color">
                                    <option value="White">White</option>
                                    <option value="Black">Black</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Hình:</td>
                            <td>
                                <input type="file" id="hinhanh" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>Quantity:</td>
                            <td><input type="text" name="slthem" value="100" id="slthem"></td>
                        </tr>
                        <tr>
                            <td>Price:</td>
                            <td><input type="text" name="pricethem" id="pricethem"></td>
                        </tr>
                        <tr>
                            <td>Trạng thái</td>
                            <td>
                                <select name="status" id="status">
                                    <option value="Remain">Remain</option>
                                    <option value="Soldout">Soldout</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="table-footer"><input type="submit" name="submit" onclick="add_sp()" id=""></td>
                        </tr>
                    </table>
                </form>
            </div>
<div id="khungSuaSanPham" class="overclay">
                <form  method="post" action="" enctype="multipart/form-data">
                    <table class="overlayTable table-outline table-content table-header">
                        <tr>
                            <th style="color: white;" colspan="2">Sửa Sản Phẩm <button  style="float: right;">X</button> </th>
                        </tr>
                        <tr>
                            <td>ID:</td>
                            <td><input type="text" id="IDsua" name="IDsua" disabled="false"></td>
                        </tr>
                        <tr>
                            <td>Name of product:</td>
                            <td><input type="text" name="Namesua" id="Namesua"></td>
                        </tr>
                        <tr>
                            <td>Size</td>
                            <td>
                            <select name="sizesua" id="sizesua">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Color</td>
                            <td>
                            <select name="colorsua" id="colorsua">
                                    <option value="White">White</option>
                                    <option value="Black">Black</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Hình:</td>
                            <td>
                                <input type="file" id="hinhanh" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>Quantity:</td>
                            <td><input type="text" name="slsua" value="100" id="slsua"></td>
                        </tr>
                        <tr>
                            <td>Price:</td>
                            <td><input type="text" name="pricesua" id="pricesua"></td>
                        </tr>
                        <tr>
                            <td>Trạng thái</td>
                            <td>
                                <select name="statussua" id="statussua">
                                    <option value="Remain">Remain</option>
                                    <option value="Soldout">Soldout</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="table-footer"><div id="btsua"></div></td>
                        </tr>
                    </table>
                </form>
            </div>
            <script>
                function xoa(){
                    $(".overclay").css("transform","scale(0)");
                }
                function hien(){
                    $(".overclay_out").css("transform","scale(1)");
                }
                function tat(){
                    $(".overclay_out").css("transform","scale(0)");
                }
                function sua(id){
                    $("#khungSuaSanPham").css("transform","scale(1)");
                    $.post("admin/ajax.php",{id:id,action:"xemsach"},function(rs){
                        rs.forEach(item=>{
                            $("#IDsua").val(id);
                            $("#Namesua").val(item.ProductName);
                            $("#sizesua").val(item.SizeName);
                            $("#colorsua").val(item.ColorName);
                            $("#pricesua").val(item.Price);
                            $("#slsua").val(item.Quantity);
                            $("#statussua").val(item.Status);
                            $("#btsua").html("<button id='btsua' onclick='fix("+id+")'>thay doi</button>");               
                        });
                    });
    }
    function fix(id){
                  var IDsua=$("#IDsua").val();
                  var Namesua=$("#Namesua").val();
                  var sizesua=$("#sizesua").val();
                  var colorsua=$("#colorsua").val();
                  var slsua=$("#slsua").val();
                  
                  var pricesua=$("#pricesua").val();
                  var statussua=$("#statussua").val();
                $.post("admin/ajax.php",{IDsua:IDsua,Namesua:Namesua,sizesua:sizesua,colorsua:colorsua,slsua:slsua,pricesua:pricesua,statussua:statussua,action:"fix"},function(result1){
                   alert(result1);
                });
            }
    function xoasp(id){
        $.post("admin/ajax.php",{id:id,action:"xoasach"},function(rs){
                        alert(rs);
                        location.reload();
                    });
    }
              function add_sp(){
                  var Namethem=$("#Namethem").val();
                  var size=$("#size").val();
                  var color=$("#color").val();
                  var hinhanh=$("#hinhanh").val();
                  var slthem=$("#slthem").val();
                  var pricethem=$("#pricethem").val();
                  var status=$("#status").val();
                $.post("admin/ajax.php",{Namethem:Namethem,size:size,hinhanh:hinhanh,color:color,slthem:slthem,pricethem:pricethem,status:status,action:"add_sp"},function(result){
                   alert(result);
                });
            }
              
            </script>
           