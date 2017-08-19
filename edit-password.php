<?php
    include "header.php";
 ?>
 <section class="login-section">
 <section class="section-cover" style="background-image: url('img/cover.jpg');">
    <h1>ข้อมูลส่วนตัว</h1>
</section>
    <div class="container">
        <div class="inner-section">
        <h3><i class="fa fa-lock" aria-hidden="true"></i> เปลี่ยนรหัสผ่าน</h3>
        <hr>
        <div class="row">
            <div class="col-sm-3 add-border-right">
                <ul class="edit-tab-menu">
                    <li><a href="#"><i class="fa fa-user"></i> แก้ไขข้อมูลผู้ใช้งาน</a></li>
                    <li class="active"><a href="#"><i class="fa fa-lock"></i> เปลี่ยนรหัสผ่าน</a></li>
                    <li><a href="#"><i class="fa fa-history"></i> ประวัติการสั่งซื้อ</a></li>
                    <li class="logout-tab"><a href="#"><i class="fa fa-sign-out"></i> ออกจากระบบ</a></li>
                </ul>
            </div><!-- tab menu -->
            <div class="col-sm-9">
                <form class="register-form edit-form">
                    <div class="row">
                        <div class="col-md-3">
                            <label>รหัสผ่านเดิม :</label>
                        </div>
                        <div class="col-md-9">
                            <input type="password" name="old-password">
                        </div>

                        <div class="col-md-3">
                            <label>รหัสผ่านใหม่ :</label>
                        </div>
                        <div class="col-md-9">
                            <input type="password" name="new-password">
                        </div>

                        <div class="col-md-3">
                            <label>รหัสผ่านใหม่อีกครั้ง :</label>
                        </div>
                        <div class="col-md-9">
                            <input type="password" name="re-new-password">
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="regis-btn"><i class="fa fa-floppy-o"></i> บันทึก</button>
                        </div>
                    </div><!-- row -->
                </form><!-- register form -->
            </div>
        </div><!-- out row -->

        </div>
    </div>
 </section>

<?php
    include "footer.php";
 ?>
