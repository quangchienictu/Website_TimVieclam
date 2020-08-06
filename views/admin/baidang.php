 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bài đăng tuyển dụng
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tài khoản</th>
                                <th>Tên doanh nghiệp</th>
                                <th>Tỉnh</th>
                                <th>Địa điểm</th>
                                <th>Nghề nghiệp</th>
                                <th>Vị trí</th>
                                <th>Mô tả</th>
                                <th>Yêu cầu</th>
                                <th>Mức lương</th>
                                <th>Trạng thái</th>
                                <th>Thời gian đăng</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while ($row = $data->fetch_assoc()) {  ?>
                                    
                                     <tr class="odd gradeX" align="center">
                                        <td><?=$row['id']?></td>
                                        <td><?=$row['username']?></td>
                                        <td><?=$row['ten']?></td>
                                         <td><?=$row['tenTinh']?></td>
                                         <td><?=$row['diadiem']?></td>
                                        <td><?=$row['ten_nghe']?></td>
                                        <td><?=$row['vi_tri']?></td>
                                        <td><?=$row['mota']?></td>
                                        <td><?=$row['yeucau']?></td>
                                        <td><?=$row['mucluong']?></td>
                                        <td><?=$row['trangthai']?></td>
                                       <td><?=$row['thoi_gian_dang']?></td>
                                        <td class="center"><i class="fas fa-trash-alt fa-fw"></i> <a onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="?controller=admin&action=xoa-tuyendung&id=<?=$row['id']?>">Xóa</a></td>
                                    </tr>
                           <?php  } ?>
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
