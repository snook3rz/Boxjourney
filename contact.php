<?php
    include "header.php";
 ?>
 <section class="login-section">
 <section class="section-cover" style="background-image: url('img/cover.jpg');">
    <h1>ติดต่อเรา</h1>
</section>
    <div class="container">
        <div class="inner-section contact-section">
        <h3><i class="fa fa-map-marker red" aria-hidden="true"></i> ช่องทางการติดต่อ และสาขาของเรา</h3>
        <hr>
        <p>
            เปิดทุกวัน ติดต่อสอบถามรายละเอียด<br>
            สั่งสินค้า Call center  โทร.
              <a href="tel:02-9619177-8">02-9619177-8</a>
            , <a href="tel:0839665192">0839665192</a>
            , <a href="tel:0895595192">0895595192</a>
            <br>
            <i class="fa fa-envelope"></i>
            email : <a href="mailto:boxjourney@hotmail.com">boxjourney@hotmail.com</a><br>
            <i class="fa fa-facebook-official"></i>
            เฟสบุ๊ค <a href="http://www.facebook.com/boxjourney">fb.com/boxjourney</a><br>
            <i class="fa fa-at"></i>
            line id: <a href="#">@boxjourney</a>
        </p>

        <div class="map-box">
            <div class="left-map" id="map1"></div>
            <div class="map-description">
                <h1>
                    1.สาขา The Season Mall พหลโยธิน<br>
                    (ติดโรงพยาบาลพญาไท 2)
                </h1>
                <p>
                    ชั้น 2 ฝั่งบันไดเลื่อน : จันทร์-ศุกร์ เปิด 10.00-20.00 น. <br>
                    เสาร์-อาทิตย์ เปิด 10.00-18.00 น. <br>
                    เบอร์หน้าร้าน The seasons : 021112034
                </p>
                <a href="#">คลิกเพื่อดูแผนที่</a>
            </div>
        </div><!-- map box -->

        <div class="map-box">
            <div class="left-map" id="map2"></div>
            <div class="map-description">
                <h1>
                    2.สาขา The Season Mall พหลโยธิน<br>
                    (ติดโรงพยาบาลพญาไท 2)
                </h1>
                <p>
                    ชั้น 2 ฝั่งบันไดเลื่อน : จันทร์-ศุกร์ เปิด 10.00-20.00 น. <br>
                    เสาร์-อาทิตย์ เปิด 10.00-18.00 น. <br>
                    เบอร์หน้าร้าน The seasons : 021112034
                </p>
                <a href="#">คลิกเพื่อดูแผนที่</a>
            </div>
        </div><!-- map box -->

        <div class="map-box">
            <div class="left-map" id="map3"></div>
            <div class="map-description">
                <h1>
                    3.สาขา The Season Mall พหลโยธิน<br>
                    (ติดโรงพยาบาลพญาไท 2)
                </h1>
                <p>
                    ชั้น 2 ฝั่งบันไดเลื่อน : จันทร์-ศุกร์ เปิด 10.00-20.00 น. <br>
                    เสาร์-อาทิตย์ เปิด 10.00-18.00 น. <br>
                    เบอร์หน้าร้าน The seasons : 021112034
                </p>
                <a href="#">คลิกเพื่อดูแผนที่</a>
            </div>
        </div><!-- map box -->

        <br>
        <h3><i class="fa fa-envelope" aria-hidden="true"></i> ติดต่อเราผ่านทางอีเมล</h3>
        <hr>
        <form class="contact-form">
            <div class="row">
            <div class="col-sm-6">
                <label>ชื่อ - นามสกุล</label>
                <input type="name" name="contact-name" required>
            </div>
            <div class="col-sm-6">
                <label>เบอร์โทรติดต่อ</label>
                <input type="tel" name="contact-tel" required>
            </div>
            <div class="col-sm-6">
                <label>อีเมล (ถ้ามี)</label>
                <input type="email" name="contact-email">
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-12">
                <label>ข้อความ</label>
                <textarea name="contact-msg"></textarea>
            </div>
            <div class="col-sm-12">
                <button type="submit" class="regis-btn">ส่งข้อความ <i class="fa fa-paper-plane"></i></button>
            </div>

            </div><!-- row -->
        </form><!-- form -->

        </div>
    </div>
 </section>



<script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map1'), {
          zoom: 12,
          center: uluru,
          scrollwheel: false
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });

        var uluru2 = {lat: 22.363, lng: 55.044};
        var map2 = new google.maps.Map(document.getElementById('map2'), {
          zoom: 12,
          center: uluru2,
          scrollwheel: false
        });
        var marker2 = new google.maps.Marker({
          position: uluru2,
          map: map2
        });

        var uluru3 = {lat: 52.363, lng: 105.044};
        var map3 = new google.maps.Map(document.getElementById('map3'), {
          zoom: 12,
          center: uluru3,
          scrollwheel: false
        });
        var marker3 = new google.maps.Marker({
          position: uluru3,
          map: map3
        });
      }
</script>
<!-- google map script -->
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgpXblUgDqRTa0xK7CRmBZDApn1qYizP4&callback=initMap">
</script><!-- google map api -->
<?php
    include "footer.php";
 ?>
