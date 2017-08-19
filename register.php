<?php
    include "header.php";
 ?>
 <section class="login-section">
 <section class="section-cover" style="background-image: url('img/cover.jpg');">
    <h1>สมัครสมาชิก</h1>
</section>
    <div class="container">
        <div class="inner-section">
        <h3><i class="fa fa-address-card" aria-hidden="true"></i> ข้อมูลส่วนตัว</h3>
        <hr>
        <form class="register-form">
            <div class="row">
                <div class="col-sm-4">
                    <label>ชื่อผู้ใช้ :</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="username">
                </div>

                <div class="col-sm-4">
                    <label>รหัสผ่าน :</label>
                </div>
                <div class="col-sm-8">
                    <input type="password" name="password">
                </div>

                <div class="col-sm-4">
                    <label>รหัสผ่านอีกครั้ง :</label>
                </div>
                <div class="col-sm-8">
                    <input type="password" name="re-password">
                </div>

                <div class="col-sm-4">
                    <label>ชื่อ - นามสกุล :</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="fullname">
                </div>

                <div class="col-sm-4">
                    <label>เบอร์โทรติดต่อ :</label>
                </div>
                <div class="col-sm-8">
                    <input type="tel" name="tel">
                </div>

                <div class="col-sm-4">
                    <label>อีเมล :</label>
                </div>
                <div class="col-sm-8">
                    <input type="email" name="email">
                </div>

                <div class="col-sm-4">
                    <label>ที่อยู่สำหรับจัดส่ง :</label>
                </div>
                <div class="col-sm-8">
                    <textarea name="address"></textarea>
                </div>

                <div class="col-sm-4">
                    <label>แขวง/ตำบล :</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="province">
                </div>

                <div class="col-sm-2">
                    <label>เขต/อำเภอ :</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="district">
                </div>

                <div class="col-sm-4">
                    <label>จังหวัด :</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="city">
                </div>

                <div class="col-sm-2">
                    <label>รหัสไปรษณีย์ :</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="postcode">
                </div>

                <div class="col-sm-4">
                    <label>รูปแบบใบกำกับภาษี :</label>
                </div>

                <div class="col-sm-8">
                <div class="radio-cover">
                    <input type="radio" name="reciept" value="small" class="hide-full"> ใบกำกับภาษีอย่างย่อ
                    <span class="br-mobile"></span>
                    <input type="radio" name="reciept" value="full" class="show-full"> ใบกำกับภาษีตัวเต็ม
                </div>
                </div>

                <div class="hide-full-reciept">
                <div class="col-sm-12">
                <h3><i class="fa fa-paperclip" aria-hidden="true"></i> ข้อมูลสำหรับใบกำกับภาษีเต็มรูปแปป</h3>
                <hr>
                </div>

                <div class="col-sm-4">
                    <label>ชื่อ :</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="re-fullname">
                </div>

                <div class="col-sm-4">
                    <label>สาขา :</label>
                </div>
                <div class="col-sm-8">
                    <div class="radio-cover">
                    <input type="radio" name="branch" value="big"> ใบกำกับภาษีอย่างย่อ
                    <span class="br-mobile"></span>
                    <input type="radio" name="branch" value="other" class="show-full"> สาขา
                    <input type="text" name="otherhas" class="branch-input">
                    </div>
                </div>

                <div class="col-sm-4">
                    <label>เลขประจำตัวผู้เสียภาษี :</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="re-number">
                </div>

                <div class="col-sm-4">
                    <label>ที่อยู่สำหรับจัดส่ง :</label>
                </div>
                <div class="col-sm-8">
                    <textarea name="re-address"></textarea>
                </div>

                <div class="col-sm-4">
                    <label>แขวง/ตำบล :</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="re-province">
                </div>

                <div class="col-sm-2">
                    <label>เขต/อำเภอ :</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="re-district">
                </div>

                <div class="col-sm-4">
                    <label>จังหวัด :</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="re-city">
                </div>

                <div class="col-sm-2">
                    <label>รหัสไปรษณีย์ :</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="re-postcode">
                </div>
                </div>

                <div class="col-sm-12">
                    <button type="submit" class="regis-btn"><i class="fa fa-user"></i> สมัครสมาชิก</button>
                </div>

            </div><!-- row -->



        </form><!-- register form -->
        </div>
    </div>
 </section>

<?php
    include "footer.php";
 ?>
