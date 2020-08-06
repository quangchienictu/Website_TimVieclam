 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Liên hệ
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên người gửi</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Nội dung</th>
                                <th>Thời gian</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while ($row = $data->fetch_assoc()) {  ?>
                                    
                                     <tr class="odd gradeX" align="center">
                                        <td><?=$row['id']?></td>
                                        <td><?=$row['ten']?></td>
                                        <td><?=$row['sdt']?></td>
                                         <td><?=$row['email']?></td>
                                         <td><?=$row['noidung']?></td>
                                        <td><?=$row['thoigian']?></td>
                                        <td class="center"><i class="fas fa-trash-alt fa-fw"></i> <a onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="?controller=admin&action=xoa-lienhe&id=<?=$row['id']?>">Xóa</a></td>
                                    </tr>
                           <?php  } ?>
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
