 <div id="page-wrapper">
            <div class="container-fluid">
            
                <div class="row">
                   
                    <div class="col-lg-12">
                        <h1 class="page-header">Tài khoản
                            <small>Sửa</small>
                        </h1>
                    </div>
                  
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                          <div class="con-lg-12">
                            <?php if(isset($_SESSION['thongbao1'])){ echo "<div class='alert alert-danger'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Thông báo! </strong>$_SESSION[thongbao1]!
    </div>"; unset($_SESSION['thongbao1']);};
    ?>                      
             <?php if(isset($_SESSION['thongbao2'])){ echo "<div class='alert alert-success'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Thông báo! </strong>$_SESSION[thongbao2]!
    </div>"; unset($_SESSION['thongbao2']);};
    ?>                      
                    </div>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Tài khoản</label>
                                <input value="<?=$row['username']?>" class="form-control" name="user" placeholder="Tài khoản" required="" disabled="" />
                            </div>
                             <div class="form-group">
                                 <input type="checkbox" name="" id="check">
                                <label>Đổi mật khẩu</label>
                               
                            </div>
                            <div class="form-group none" style="display:none;" >
                                <label>Mật khẩu</label>
                                <input type="password" class="form-control input" minlength="3" name="pass" placeholder="Nhập mật khẩu mới"   />
                            </div>
                           <div class="form-group none" style="display:none;" >
                                <label>Nhập lại mật khẩu</label>
                                <input  type="password" class=form-control input" minlength="3" name="pass2" placeholder="Nhập lại mật khẩu mới" />
                            </div>
                            <div class="form-group">
                                <label>Level</label><br>
                                <label class="radio-inline">
                                    <input <?php if($row['level']==1) echo "checked"; ?> name="level" value="1" type="radio">Người dùng
                                </label>
                                <label class="radio-inline">
                                    <input <?php if($row['level']==2) echo "checked"; ?>  name="level" value="2" type="radio">Admin
                                </label>
                            </div>
                             <div class="form-group">
                                <label>Trạng thái</label><br>
                                <label class="radio-inline">
                                    <input <?php if($row['trangthai']=='on') echo "checked"; ?>  name="trangthai" value="on"  type="radio">Hoạt động
                                </label>
                                <label class="radio-inline">
                                    <input <?php if($row['trangthai']=='off') echo "checked"; ?> name="trangthai" value="off" type="radio">Khóa
                                </label>
                            </div>

                           
                            <button type="submit" name="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default"><a style="text-decoration: none;color: black;" href="?controller=admin&action=list-user">Hủy bỏ</a></button>
                        <form>


                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
                 