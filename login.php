<?php
    include "header.php";
 ?>

 <section class="login-section">
    <div class="container">
        <div class="inner-section">
            <div class="login-block">
            <div class="img-block">
                <img src="img/login-img.png">
            </div>

            <form class="login-form">
                <label>ชื่อผู้ใช้งาน</label>
                <input type="text" name="username" placeholder="ชื่อผู้ใช้งาน">
                <label>รหัสผ่าน</label>
                <input type="password" name="password" placeholder="รหัสผ่าน">
                <a href="#" class="forget">ลืมรหัสผ่าน ?</a>
                <button type="submit" class="login-btn">เข้าสู่ระบบ <i class="fa fa-chevron-right"></i></button>
            </form>
            <!-- login form -->

            </div>
        </div>
    </div>
 </section>

<?php
    include "footer.php";
 ?>
