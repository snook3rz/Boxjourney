<?php
    include "header.php";
 ?>

 <section class="login-section">
    <div class="container">
        <div class="inner-section">
            <center class="step-cover">
            <div class="step-inline">
                <a href="#" class="step-box active">
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
                <a href="#" class="step-box">
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

            <h3><i class="fa fa-shopping-cart"></i> ตะกร้าสินค้า</h3>
            <hr>
            <div class="row">
                <div class="col-lg-7">
                <form action="">
                    <table class="table cart-table">
                        <tr>
                            <th></th>
                            <th class="text-left">รายการ</th>
                            <th>ราคา</th>
                            <th>จำนวน</th>
                            <th width="100px">ราคารวม</th>
                        </tr>
                        <tr class="calculate">
                            <td><a href="#" class="del-item">-</a></td>
                            <td class="text-left ex-product">
                                <img src="img/product-1.jpg">
                                <p>
                                    ชื่อสินค้า<br>
                                    <span class="gray">สี:น้ำตาล</span>
                                </p>
                            </td>
                            <td>240/แพ็ค</td>
                            <td class="cart-config-number">
                            <a href="#" class="cart-del-qty">-</a>
                                <input type="number" name="cart-qty" class="cart-qty" min="1" value="5">
                            <a href="#" class="cart-plus-qty">+</a>
                            </td>
                            <td class="price">
                                <input type="hidden" class="one-price" name="one-price[1]" value="240">
                                <input type="text" class="total-price" name="price[1]" disabled value="1200">
                            </td>
                        </tr>
                        <tr class="calculate">
                            <td><a href="#" class="del-item">-</a></td>
                            <td class="text-left ex-product">
                                <img src="img/product-1.jpg">
                                <p>
                                    ชื่อสินค้า<br>
                                    <span class="gray">สี:น้ำตาล</span>
                                </p>
                            </td>
                            <td>240/แพ็ค</td>
                            <td class="cart-config-number">
                            <a href="#" class="cart-del-qty">-</a>
                                <input type="number" name="cart-qty" class="cart-qty" min="1" value="1">
                            <a href="#" class="cart-plus-qty">+</a>
                            </td>
                            <td class="price">
                                <input type="hidden" class="one-price" name="one-price[1]" value="240">
                                <input type="text" class="total-price" name="price[1]" disabled value="240">
                            </td>
                        </tr>
                        <tr class="calculate">
                            <td><a href="#" class="del-item">-</a></td>
                            <td class="text-left ex-product">
                                <img src="img/product-1.jpg">
                                <p>
                                    ชื่อสินค้า<br>
                                    <span class="gray">สี:น้ำตาล</span>
                                </p>
                            </td>
                            <td>240/แพ็ค</td>
                            <td class="cart-config-number">
                            <a href="#" class="cart-del-qty">-</a>
                                <input type="number" name="cart-qty" class="cart-qty" min="1" value="1">
                            <a href="#" class="cart-plus-qty">+</a>
                            </td>
                            <td class="price">
                                <input type="hidden" class="one-price" name="one-price[1]" value="240">
                                <input type="text" class="total-price" name="price[1]" disabled value="240">
                            </td>
                        </tr>
                        <tr class="calculate">
                            <td><a href="#" class="del-item">-</a></td>
                            <td class="text-left ex-product">
                                <img src="img/product-1.jpg">
                                <p>
                                    ชื่อสินค้า<br>
                                    <span class="gray">สี:น้ำตาล</span>
                                </p>
                            </td>
                            <td>240/แพ็ค</td>
                            <td class="cart-config-number">
                            <a href="#" class="cart-del-qty">-</a>
                                <input type="number" name="cart-qty" class="cart-qty" min="1" value="1">
                            <a href="#" class="cart-plus-qty">+</a>
                            </td>
                            <td class="price">
                                <input type="hidden" class="one-price" name="one-price[1]" value="240">
                                <input type="text" class="total-price" name="price[1]" disabled value="240">
                            </td>
                        </tr>
                    </table>
                </form>

                <h3><i class="fa fa-credit-card-alt"></i> วิธีการชำระเงิน</h3>
                <hr>
                <div class="payment">
                    <div class="payment-box">
                        <div class="pay-click">
                        <img src="img/bank.png">
                        <p>บัตรเครดิต / เดบิต</p>
                        </div>
                        <div class="pay-hide">
                            <div class="row">
                                <div class="col-sm-8 col-xs-4"><h4>ธนาคาร</h4></div>
                                <div class="col-sm-4 col-xs-8"><h4>เลขบัญชี</h4></div>
                                <div class="clearfix"></div>
                                <!-- head table -->
                                <div class="col-sm-2 col-xs-3"><img src="img/bank-1.jpg"></div>
                                <div class="col-sm-6 col-xs-9">
                                            กรุงเทพฯ​<br>
                                            สาขา คริสตัลดไซน์ เซนเตอร์<br>
                                            <i>ชื่อบัญชี บจก. บราเธอร์ แอนด์ บราเธอร์</i>
                                </div>
                                <div class="col-sm-4 col-sm-offset-0 col-xs-offset-3">405-5-49820-2</div>
                                <div class="clearfix"></div>
                                <hr>

                                <div class="col-sm-2 col-xs-3"><img src="img/bank-2.jpg"></div>
                                <div class="col-sm-6 col-xs-9">
                                            กสิกรไทย<br>
                                            สาขา คริสตัลดไซน์ เซนเตอร์<br>
                                            <i>ชื่อบัญชี บจก. บราเธอร์ แอนด์ บราเธอร์</i>
                                </div>
                                <div class="col-sm-4 col-sm-offset-0 col-xs-offset-3">405-5-49820-2</div>
                                <div class="clearfix"></div>
                                <hr>

                                <div class="col-sm-2 col-xs-3"><img src="img/bank-3.jpg"></div>
                                <div class="col-sm-6 col-xs-9">
                                            ไทยพาณิชย์<br>
                                            สาขา คริสตัลดไซน์ เซนเตอร์<br>
                                            <i>ชื่อบัญชี บจก. บราเธอร์ แอนด์ บราเธอร์</i>
                                </div>
                                <div class="col-sm-4 col-sm-offset-0 col-xs-offset-3">405-5-49820-2</div>
                                <div class="clearfix"></div>
                                <hr>

                                <div class="col-sm-2 col-xs-3"><img src="img/bank-4.jpg"></div>
                                <div class="col-sm-6 col-xs-9">
                                            กรุงศรีพร้อมเพย์<br>
                                            สาขา คริสตัลดไซน์ เซนเตอร์<br>
                                            <i>ชื่อบัญชี บจก. บราเธอร์ แอนด์ บราเธอร์</i>
                                </div>
                                <div class="col-sm-4 col-sm-offset-0 col-xs-offset-3">405-5-49820-2</div>
                                <div class="clearfix"></div>

                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="payment-box">
                        <div class="pay-click">
                        <img src="img/payment.png">
                        <p>บัตรเครดิต / เดบิต</p>
                        </div>
                        <div class="pay-hide">
                            ยังไม่เปิดใช้งาน
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="payment-box">
                        <div class="pay-click">
                        <img src="img/payment-2.png">
                        <p>Paypal</p>
                        </div>
                        <div class="pay-hide">
                            ยังไม่เปิดใช้งาน
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

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
                    <p class="mini-notice">
                        * ท่านจะได้รับส่วนลดตามยอดสั่งซื้อ ดังนี้<br>
                        ส่วนลด 0.00% เมื่อมียอดสั่งซื้อสินค้ารวมตั้งแต่  0.00  บาท ถึง  9,999.99  บาท <br>
                        ส่วนลด 10.00% เมื่อมียอดสั่งซื้อสินค้ารวมตั้งแต่  10,000.00  บาท ถึง  29,999.99  บาท <br>
                        ส่วนลด 15.00% เมื่อมียอดสั่งซื้อสินค้ารวมตั้งแต่  30,000.00  บาท ถึง  99,999.00  บาท <br>
                        ส่วนลด 15.00% เมื่อมียอดสั่งซื้อสินค้าตั้งแต่  99,999.00 บาทขึ้นไป
                    </p>
                    <div class="coupon-box">
                        <form>
                            <label>กรอกคูปองส่วนลด</label>
                            <input type="text" name="coupon">
                            <button type="submit">ยืนยัน</button>
                            <p class="ok">ยินดีด้วย คุณได้รับส่วนลด 10% !!</p>
                            <p class="fail">รหัสคูปองผิดพลาด หรือหมดอายุ</p>
                        </form>
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
