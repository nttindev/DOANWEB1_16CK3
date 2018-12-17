
<?php
require_once __DIR__."/layout/header.php";
?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Quản trị admin
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>Home</a>
                                    <h1>Hôm nay bán được </h1>
                                    <?$dondathang=new DonDatHangBus();
                                    $dondathang->thongkedoanhthu(); ?>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- chart-->
                    
                    <!-- /.row -->
 <?php require_once __DIR__."/layout/footer.php" ?>