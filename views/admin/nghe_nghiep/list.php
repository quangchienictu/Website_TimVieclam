 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nghề nghiệp
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Mã nghề</th>
                                <th>Tên nghề</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while ($row = $data->fetch_assoc()) {  ?>
                                    
                                     <tr class="odd gradeX" align="center">
                                        <td><?=$row['id']?></td>
                                        <td><?=$row['ma_nghe']?></td>
                                        <td><?=$row['ten_nghe']?></td>
                                         <td class="center"><i class="fas fa-wrench fa-fw"></i><a href="?controller=admin&action=sua-nghe&id=<?=$row['id']?>"> Sửa</a></td>
                                        <td class="center"><i class="fas fa-trash-alt fa-fw"></i> <a onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="?controller=admin&action=xoa-nghe&id=<?=$row['id']?>">Xóa</a></td>
                                    </tr>
                           <?php  } ?>
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
