 
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tài khoản
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tài khoản</th>
                                <th>Mật khẩu</th>
                                <th>Level</th>
                                <th>Trạng thái</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while ($row = $data->fetch_assoc()) { ?>
                                    
                                     <tr class="odd gradeX" align="center">
                                        <td><?=$row['id']?></td>
                                        <td><?=$row['username']?></td>
                                        <td><?=$row['password']?></td>
                                        <td ><?php if($row['level']==1)echo "Người dùng";else echo "Admin"; ?></td>
                                        <td><?php if($row['trangthai']=='on')echo "<span style='color: green;'>Hoạt động</span>";else echo "<span style='color: red;'>Khóa</span>"; ?></td>
                                        <td class="center"><i class="fas fa-wrench fa-fw"></i><a href="?controller=admin&action=sua-user&id=<?=$row['id']?>"> Sửa</a></td>
                                        <td class="center"><i class="fas fa-trash-alt fa-fw"></i></i> <a onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="?controller=admin&action=xoa-user&id=<?=$row['id']?>">Xóa</a></td>
                                    </tr>
                           <?php  } ?>
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

