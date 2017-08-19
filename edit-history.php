<?php
    include "header.php";
 ?>
 <section class="login-section">
 <section class="section-cover" style="background-image: url('img/cover.jpg');">
    <h1>ข้อมูลส่วนตัว</h1>
</section>
    <div class="container">
        <div class="inner-section">
        <h3><i class="fa fa-history" aria-hidden="true"></i> ประวัติการสั่งซื้อ</h3>
        <hr>
        <div class="row">
            <div class="col-sm-3 add-border-right">
                <ul class="edit-tab-menu">
                    <li><a href="#"><i class="fa fa-user"></i> แก้ไขข้อมูลผู้ใช้งาน</a></li>
                    <li><a href="#"><i class="fa fa-lock"></i> เปลี่ยนรหัสผ่าน</a></li>
                    <li class="active"><a href="#"><i class="fa fa-history"></i> ประวัติการสั่งซื้อ</a></li>
                    <li class="logout-tab"><a href="#"><i class="fa fa-sign-out"></i> ออกจากระบบ</a></li>
                </ul>
            </div><!-- tab menu -->
            <div class="col-sm-9">
                <div class="cover-table">
                <table class="table history-table table-striped">
                    <tr>
                        <th>หมายเลขใบสั่งซื้อ</th>
                        <th>สถานะ</th>
                        <th>ยอดการสั่งซื้อ (บาท)</th>
                        <th>สถานะการแจ้งโอนเงิน</th>
                        <th>ดูรายละเอียด</th>
                    </tr>
                    <tr>
                        <td>ORDER#11</td>
                        <td>ใบสั่งซื้อใหม่</td>
                        <td>2300</td>
                        <td><a href="#" class="trans-btn">แจ้งโอนเงิน</a></td>
                        <td><a href="#" class="view-btn">ดูรายละเอียด</a></td>
                    </tr>
                    <tr>
                        <td>ORDER#11</td>
                        <td>ใบสั่งซื้อใหม่</td>
                        <td>2300</td>
                        <td><a href="#" class="trans-btn">แจ้งโอนเงิน</a></td>
                        <td><a href="#" class="view-btn">ดูรายละเอียด</a></td>
                    </tr>
                </table>
                </div>
            </div>
        </div><!-- out row -->

        </div>
    </div>
 </section>

<?php
    include "footer.php";
 ?>
