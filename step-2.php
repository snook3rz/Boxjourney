<?php
    include "header.php";
 ?>

 <section class="login-section">
    <div class="container">
        <div class="inner-section">
            <center class="step-cover">
            <div class="step-inline">
                <a href="#" class="step-box ">
                    <div class="step-left">
                    <i class="fa fa-credit-card-alt"></i>
                    </div>
                    <div class="step-right">
                    <p>STEP 1<br>วิธีการชำระเงิน</p>
                    </div>
                </a>
            </div><!-- 1 box -->
            <div class="step-inline dott">...</div>
            <div class="step-inline">
                <a href="#" class="step-box active">
                    <div class="step-left">
                    <i class="fa fa-truck"></i>
                    </div>
                    <div class="step-right">
                    <p>STEP 2<br>ที่อยู่การจัดส่ง</p>
                    </div>
                </a>
            </div><!-- 1 box -->
            <div class="step-inline dott">...</div>
            <div class="step-inline">
                <a href="#" class="step-box">
                    <div class="step-left">
                    <i class="fa fa-check"></i>
                    </div>
                    <div class="step-right">
                    <p>STEP 3<br>ยืนยันการสั่งซื้อ</p>
                    </div>
                </a>
            </div><!-- 1 box -->
            </center><!-- step -->

            <h3><i class="fa fa-map-marker"></i> ที่อยู่สำหรับการจัดส่ง</h3>
            <hr>
            <div class="row">
                <div class="col-lg-7">
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
                                <input type="radio" name="reciept" value="full" class="show-full" checked> ใบกำกับภาษีตัวเต็ม
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
                        </div><!-- row -->
                    </form><!-- shipping form -->
                </div><!-- left col-sm-7 -->
                <div class="col-lg-5">
                    <div class="header-table">สรุปการสั่งซื้อ</div>
                    <table class="table total-table">
                        <tr class="bg-gray">
                            <th>รายการ</th>
                            <th class="text-center">จำนวน</th>
                            <th class="text-right">ราคา</th>
                        </tr>
                        <tr>
                            <td>สินค้า 1</td>
                            <td class="text-center">4</td>
                            <td class="text-right">860 บาท</td>
                        </tr>
                        <tr>
                            <td>สินค้า 1</td>
                            <td class="text-center">4</td>
                            <td class="text-right">860 บาท</td>
                        </tr>
                        <tr>
                            <td><i><strong>VAT 7%</strong></i></td>
                            <td class="text-center"></td>
                            <td class="text-right"><i><strong>60 บาท</strong></i></td>
                        </tr>
                        <tr>
                            <td><i><strong>ค่าจัดส่ง</strong></i></td>
                            <td class="text-center"></td>
                            <td class="text-right"><i><strong>50 บาท</strong></i></td>
                        </tr>
                        <tr class="space-gray">
                            <td><i><strong>รวม</strong></i></td>
                            <td class="text-center"></td>
                            <td class="text-right"><i><strong>1860 บาท</strong></i></td>
                        </tr>
                    </table>
                    <h3><i class="fa fa-truck"></i> วิธีการจัดส่ง</h3>
                    <hr>
                    <input type="hidden" name="shipping-stype" id="shipping-type" value="store">
                        <div class="ship-type-box" id="shiptype1">
                            <img src="img/ems.jpg">  80 บาท - EMS ไปรษณีย์ไทย (1-2วัน)
                        </div>
                        <div class="ship-type-box" id="shiptype2">
                            <img src="img/kerry.jpg">  80 บาท - Kerry Express (1-2วัน)
                        </div>
                        <div class="ship-type-box active" id="shiptype3">
                            (แนะนำ) FREE ส่งจากทางร้านค้า (3-4วัน)
                        </div>
                    <button class="next-step">
                        ไปยังขั้นตอนต่อไป <i class="fa fa-chevron-right"></i>
                    </button>
                </div><!-- right col-sm-5 -->
            </div><!-- row -->

        </div><!-- inner section -->
    </div><!-- container -->
 </section>

<?php
    include "footer.php";
 ?>
