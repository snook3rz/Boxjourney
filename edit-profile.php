<?php
    include "header.php";
 ?>
 <section class="login-section">
 <section class="section-cover" style="background-image: url('img/cover.jpg');">
    <h1>ข้อมูลส่วนตัว</h1>
</section>
    <div class="container">
        <div class="inner-section">
        <h3><i class="fa fa-address-card" aria-hidden="true"></i> ข้อมูลส่วนตัว</h3>
        <hr>
        <div class="row">
            <div class="col-sm-3 add-border-right">
                <ul class="edit-tab-menu">
                    <li class="active"><a href="#"><i class="fa fa-user"></i> แก้ไขข้อมูลผู้ใช้งาน</a></li>
                    <li><a href="#"><i class="fa fa-lock"></i> เปลี่ยนรหัสผ่าน</a></li>
                    <li><a href="#"><i class="fa fa-history"></i> ประวัติการสั่งซื้อ</a></li>
                    <li class="logout-tab"><a href="#"><i class="fa fa-sign-out"></i> ออกจากระบบ</a></li>
                </ul>
            </div><!-- tab menu -->
            <div class="col-sm-9">
                <form class="register-form edit-form">
                    <div class="row">
                        <div class="col-md-3">
                            <label>ชื่อผู้ใช้ :</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="username" value="username cant edit" disabled>
                        </div>

                        <div class="col-md-3">
                            <label>รหัสผ่าน :</label>
                        </div>
                        <div class="col-md-9">
                            <input type="password" name="password">
                        </div>

                        <div class="col-md-3">
                            <label>ชื่อ - นามสกุล :</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="fullname" value="fullname">
                        </div>

                        <div class="col-md-3">
                            <label>เบอร์โทรติดต่อ :</label>
                        </div>
                        <div class="col-md-9">
                            <input type="tel" name="tel" value="0980980988">
                        </div>

                        <div class="col-md-3">
                            <label>อีเมล :</label>
                        </div>
                        <div class="col-md-9">
                            <input type="email" name="email" value="e@mail.com">
                        </div>

                        <div class="col-md-3">
                            <label>ที่อยู่สำหรับจัดส่ง :</label>
                        </div>
                        <div class="col-md-9">
                            <textarea name="address">Example address</textarea>
                        </div>

                        <div class="col-md-3">
                            <label>แขวง/ตำบล :</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="province" value="province">
                        </div>

                        <div class="col-md-3">
                            <label>เขต/อำเภอ :</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="district" value="district">
                        </div>

                        <div class="col-md-3">
                            <label>จังหวัด :</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="city" value="city">
                        </div>

                        <div class="col-md-3">
                            <label>รหัสไปรษณีย์ :</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="postcode" value="11000">
                        </div>

                        <div class="col-md-3">
                            <label>รูปแบบใบกำกับภาษี :</label>
                        </div>

                        <div class="col-md-9">
                        <div class="radio-cover">
                            <input type="radio" name="reciept" value="small" class="hide-full"> ใบกำกับภาษีอย่างย่อ
                            <span class="br-mobile"></span>
                            <input type="radio" name="reciept" value="full" class="show-full" checked> ใบกำกับภาษีตัวเต็ม
                        </div>
                        </div>

                        <div class="hide-full-reciept">
                        <div class="col-md-12">
                        <h3><i class="fa fa-paperclip" aria-hidden="true"></i> ข้อมูลสำหรับใบกำกับภาษีเต็มรูปแปป</h3>
                        <hr>
                        </div>

                        <div class="col-md-3">
                            <label>ชื่อ :</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="re-fullname">
                        </div>

                        <div class="col-md-3">
                            <label>สาขา :</label>
                        </div>
                        <div class="col-md-9">
                            <div class="radio-cover">
                            <input type="radio" name="branch" value="big"> ใบกำกับภาษีอย่างย่อ
                            <span class="br-mobile"></span>
                            <input type="radio" name="branch" value="other" class="show-full"> สาขา
                            <input type="text" name="otherhas" class="branch-input">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label>เลขประจำตัวผู้เสียภาษี :</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="re-number">
                        </div>

                        <div class="col-md-3">
                            <label>ที่อยู่สำหรับจัดส่ง :</label>
                        </div>
                        <div class="col-md-9">
                            <textarea name="re-address"></textarea>
                        </div>

                        <div class="col-md-3">
                            <label>แขวง/ตำบล :</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="re-province">
                        </div>

                        <div class="col-md-3">
                            <label>เขต/อำเภอ :</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="re-district">
                        </div>

                        <div class="col-md-3">
                            <label>จังหวัด :</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="re-city">
                        </div>

                        <div class="col-md-3">
                            <label>รหัสไปรษณีย์ :</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="re-postcode">
                        </div>
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
