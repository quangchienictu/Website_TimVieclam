 <div id="page-wrapper">
            <div class="container-fluid">
            
                <div class="row">
                   
                    <div class="col-lg-12">
                        <h1 class="page-header">Nghề nghiệp
                            <small>Sửa</small>
                        </h1>
                    </div>
                  
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                          <div class="con-lg-12">
                           
             <?php if(isset($_SESSION['thongbao2'])){ echo "<div class='alert alert-success'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Thông báo! </strong>$_SESSION[thongbao2]!
    </div>"; unset($_SESSION['thongbao2']);};
    ?>                      
                    </div>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Mã nghề</label>
                                <input value="<?=$row['ma_nghe']?>" class="form-control" name="" placeholder="Tài khoản" required="" disabled="" />
                            </div>
                              <div class="form-group">
                                <label>Tên nghề</label>
                                <input value="<?=$row['ten_nghe']?>" class="form-control" name="ten_nghe" placeholder="Tài khoản" required=""  />
                            </div>
                            
                            

                           
                            <button type="submit" name="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default"><a style="text-decoration: none;color: black;" href="?controller=admin&action=list-nghe">Hủy bỏ</a></button>
                        <form>


                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
                 