 </div>
 <!-- Logout Modal-->

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="public/admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="public/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="public/admin/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="public/admin/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
<script>

                        $(document).ready(function(){
                            $("#check").change(function(){
                                if ($(this).is(":checked")){
                                    $(".none").css('display','inline');
                                     $(".input").attr("required", true);
                                }else
                                  {
                                    $(".none").css('display','none');
                                      $(".input").attr("required", false);
                                  }
                            });
                        });
                    </script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>