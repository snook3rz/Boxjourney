<?php
    include "header.php";
 ?>

 <section class="login-section">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="inner-section product-tab-menu-right">
            <div class="nav-product">
                <a href="#">หน้าแรก</a> / <a href="#">กล่องชิฟฟอน</a> /
                <a href="#">กล่องชิฟฟอน 1</a> / สีธรรมชาติ
            </div>
            <h2>สีธรรมชาติ</h2>
            <div class="review-star">
                <i class="fa fa-star good"></i>
                <i class="fa fa-star good"></i>
                <i class="fa fa-star good"></i>
                <i class="fa fa-star good"></i>
                <i class="fa fa-star"></i>
                4 <span class="gray">( จากผู้ใช้งาน 33 คน )</span>
            </div>
            <a href="#" class="inner-like-box">
                <i class="fa fa-heart"></i> เพิ่มเป็นรายการที่ชอบ
            </a>
            <div class="clearfix"></div>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <div class="flexslider">
                      <ul class="slides">
                        <li data-thumb="img/product.jpg">
                          <div class="big-product" style="background-image: url('img/product.jpg');"></div>
                        </li>
                        <li data-thumb="img/product-1.jpg">
                          <div class="big-product" style="background-image: url('img/product-1.jpg');"></div>
                        </li>
                        <li data-thumb="img/product-2.jpg">
                          <div class="big-product" style="background-image: url('img/product-2.jpg');"></div>
                        </li>
                        <li data-thumb="img/product-3.jpg">
                          <div class="big-product" style="background-image: url('img/product-3.jpg');"></div>
                        </li>
                      </ul>
                    </div>
                </div><!-- col left -->
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-xs-4 pro-info">
                            <p>ชื่อสินค้า :</p>
                            <p>รหัสสินค้า :</p>
                            <p>รุ่นสินค้า :</p>
                            <p>จำนวนชิ้น :</p>
                            <p>ขนาดสินค้า :</p>
                        </div>
                        <div class="col-xs-8 pro-info light">
                            <p>กล่องชิฟฟอน สีธรรมชาติ</p>
                            <p>0808089</p>
                            <p>กล่องชิฟฟอน สีธรรมชาติ</p>
                            <p>20 ชิ้น / แพ็ค</p>
                            <p>กว้าง 11.5 x ยาว 10.5 x สูง 5.5 cm.</p>
                        </div>
                        <div class="col-xs-12 product-price">
                            <h3>80 บาท / แพ็ค / 20 ใบ</h3>
                            <span class="gray">( เหลือ 23 แพ็ค )</span>

                            <div class="product-cover">
                            <div class="product-drop">
                            เลือกสีอื่นๆ <i class="fa fa-chevron-down"></i>
                            </div><!-- product drop -->
                            <div class="product-drop-hide">

                                <div class="product-hide-item">
                                <div class="product-little-img" style="background-image: url('img/product-1.jpg');"></div>
                                <div class="product-text">
                                    <h3>กล่องชิฟฟอน</h3>
                                    <p>กว้าง 11.5 x ยาว 10.5 x สูง 5.5 cm.</p>
                                </div>
                                <div class="product-add">
                                    <form action="post" class="add-prod">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="qty[0]">
                                        <span class="glyphicon glyphicon-minus white"></span>
                                        </button>
                                        </span>
                                        <input type="text" name="qty[0]" class="qty form-control input-number" value="1" min="1" max="10">
                                        <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="qty[0]">
                                        <span class="glyphicon glyphicon-plus white"></span>
                                        </button>
                                        </span>
                                      </div>
                                      <button type="submit" class="little-buy">
                                      + <i class="fa fa-shopping-cart"></i>
                                      </button>
                                    </form>
                                </div>
                                </div><!-- 1 item -->
                                <div class="clearfix"></div>
                                <hr>
                                <div class="product-hide-item">
                                <div class="product-little-img" style="background-image: url('img/product-1.jpg');"></div>
                                <div class="product-text">
                                    <h3>กล่องชิฟฟอน</h3>
                                    <p>กว้าง 11.5 x ยาว 10.5 x สูง 5.5 cm.</p>
                                </div>
                                <div class="product-add">
                                    <form action="post" class="add-prod">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="qty[1]">
                                        <span class="glyphicon glyphicon-minus white"></span>
                                        </button>
                                        </span>
                                        <input type="text" name="qty[1]" class="qty form-control input-number" value="1" min="1" max="10">
                                        <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="qty[1]">
                                        <span class="glyphicon glyphicon-plus white"></span>
                                        </button>
                                        </span>
                                      </div>
                                      <button type="submit" class="little-buy">
                                      + <i class="fa fa-shopping-cart"></i>
                                      </button>
                                    </form>
                                </div>
                                </div><!-- 1 item -->
                            </div><!-- product hide -->
                            </div><!-- product cover -->

                            <form action="post" class="add-prod-main">
                            จำนวน :
                             <div class="input-group main-number">
                                 <span class="input-group-btn">
                                 <button type="button" class="btn btn-default btn-number"
                                         disabled="disabled" data-type="minus" data-field="qtymain">
                                 <span class="glyphicon glyphicon-minus white"></span>
                                 </button>
                                 </span>
                                 <input type="text" name="qtymain"
                                        class="qty form-control input-number"
                                        value="1" min="1" max="10">
                                 <span class="input-group-btn">
                                 <button type="button" class="btn btn-default btn-number"
                                         data-type="plus" data-field="qtymain">
                                 <span class="glyphicon glyphicon-plus white"></span>
                                 </button>
                                 </span>
                             </div>
                               <button type="submit" class="bigger-buy">
                               + <i class="fa fa-shopping-cart"></i> เพิ่มลงตะกร้า
                               </button>
                            </form>

                        </div>

                    </div><!-- inner row -->
                </div><!-- col right -->
            </div><!-- row -->

              <section class="bottom-product">
                <!-- Nav tabs -->
                  <ul class="nav nav-tabs info-tab" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#tab-info" aria-controls="home" role="tab" data-toggle="tab">
                            <i class="fa fa-info"></i> คำอธิบายสินค้า
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tab-review" aria-controls="profile" role="tab" data-toggle="tab">
                            <i class="fa fa-comment"></i> ความคิดเห็น
                        </a>
                    </li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active info-content" id="tab-info">
                        <p>
                            ขนาด กว้าง 11.5 x ยาว 15.5 x  สูง 6 cm. (4.5 x 6.125 x 2.375 นิ้ว)<br>
                            ราคา 80 บาท/แพ็ค<br>
                            จำนวน 20 ใบ/แพ็ค (ไม่สามารถคละสีใน 1 แพคได้ค่ะ)<br>
                             กล่องใส่อาหารว่าง จัดคอฟฟี่เบรค หรือใส่บราวนี่  <br>
                            สามารถใส่น้ำผลไม้กล่องหรือนมกล่องได้ค่ะ<br>
                            กระดาษฟูดส์เกรด เนื้อเนียนหนา 270 แกรม
                        </p>
                    </div><!-- info -->
                    <div role="tabpanel" class="tab-pane info-content" id="tab-review">
                        <div class="comment-first">
                            <div class="review-star">
                                <h4>คะแนนเฉลี่ยจากผู้ใช้งาน</h4>
                                <i class="fa fa-star good"></i>
                                <i class="fa fa-star good"></i>
                                <i class="fa fa-star good"></i>
                                <i class="fa fa-star good"></i>
                                <i class="fa fa-star"></i>
                                <h3 class="green points"><span class="bigger">4</span> จาก 5 คะแนน</h3>
                                <p class="gray">จากผู้ใช้งาน 33 คน</p>
                            </div>
                            <div class="add-comment-btn">แสดงความคิดเห็น</div>
                            <div class="clearfix"></div>
                        </div>
                        <hr>

                        <div class="add-comment">
                            <form method="POST" class="form-add-comment">
                            <div class="review-star">
                            ให้คะแนน :
                                <i class="fa fa-star star-1"></i>
                                <i class="fa fa-star star-2"></i>
                                <i class="fa fa-star star-3"></i>
                                <i class="fa fa-star star-4"></i>
                                <i class="fa fa-star star-5"></i>
                            </div>
                            <input type="hidden" name="star" id="star-show" value="0">
                            <textarea class="comment-u"></textarea>
                            <button type="submit" class="send-comment">ส่งความคิดเห็น</button>
                            </form>
                        </div>
                        <div class="clearfix"></div>

                        <!-- comment box -->
                        <div class="comment-box">
                            <div class="review-star">
                                <i class="fa fa-star good"></i>
                                <i class="fa fa-star good"></i>
                                <i class="fa fa-star good"></i>
                                <i class="fa fa-star good"></i>
                                <i class="fa fa-star"></i>
                                <p>คุ้มค่ามาก !!</p>
                                <span class="date-time-comment">1 มิถุนายน 2560</span>
                            </div>
                            <h4>โดย username</h4>
                            <p>
                                บริการดีมาก สินค้าคุณภาพยอดเยี่ยม ไร้ที่ติ ถูกใจมากๆ ถ้ามีโอกาสจะกลับมาใช้บริการอีกแน่นอน
                            </p>
                        </div>
                        <!-- comment box -->

                         <!-- comment box -->
                        <div class="comment-box">
                            <div class="review-star">
                                <i class="fa fa-star good"></i>
                                <i class="fa fa-star good"></i>
                                <i class="fa fa-star good"></i>
                                <i class="fa fa-star good"></i>
                                <i class="fa fa-star"></i>
                                <p>คุ้มค่ามาก !!</p>
                                <span class="date-time-comment">1 มิถุนายน 2560</span>
                            </div>
                            <h4>โดย username</h4>
                            <p>
                                บริการดีมาก สินค้าคุณภาพยอดเยี่ยม ไร้ที่ติ ถูกใจมากๆ ถ้ามีโอกาสจะกลับมาใช้บริการอีกแน่นอน
                            </p>
                        </div>
                        <!-- comment box -->

                         <!-- comment box -->
                        <div class="comment-box">
                            <div class="review-star">
                                <i class="fa fa-star good"></i>
                                <i class="fa fa-star good"></i>
                                <i class="fa fa-star good"></i>
                                <i class="fa fa-star good"></i>
                                <i class="fa fa-star"></i>
                                <p>คุ้มค่ามาก !!</p>
                                <span class="date-time-comment">1 มิถุนายน 2560</span>
                            </div>
                            <h4>โดย username</h4>
                            <p>
                                บริการดีมาก สินค้าคุณภาพยอดเยี่ยม ไร้ที่ติ ถูกใจมากๆ ถ้ามีโอกาสจะกลับมาใช้บริการอีกแน่นอน
                            </p>
                        </div>
                        <!-- comment box -->
                        <div class="page-block">
                        <center>
                            <ul class="pagination" id="pagination"></ul>
                        </center>
                        </div>
                    </div><!-- review -->
                  </div>
            </section><!-- bottom product -->

            <section class="link-product">
                <h3>สิ่งที่ใช้คู่กัน</h3>
                <hr>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="cate-product-box" style="background-image: url('img/box-bg.jpg');">
                            <div class="cate-product-name">กล่องชิฟฟอน</div>
                        </a>
                    </div><!-- 1 product -->
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="cate-product-box" style="background-image: url('img/box-bg.jpg');">
                            <div class="cate-product-name">กล่องชิฟฟอน</div>
                        </a>
                    </div><!-- 1 product -->
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="cate-product-box" style="background-image: url('img/box-bg.jpg');">
                            <div class="cate-product-name">กล่องชิฟฟอน</div>
                        </a>
                    </div><!-- 1 product -->
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="cate-product-box" style="background-image: url('img/box-bg.jpg');">
                            <div class="cate-product-name">กล่องชิฟฟอน</div>
                        </a>
                    </div><!-- 1 product -->
                </div><!-- row product -->
            </section><!-- link product -->
            </div>
        </div>
    </div>

    <section class="related-product">
        <h3>สินค้าที่เกี่ยวข้อง</h3>
        <hr>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="item item-box product-item">
                    <div class="like-btn"><i class="fa fa-heart"></i></div>
                    <div class="for-image" style="background-image: url('img/product-1.jpg');"></div>
                    <div class="description">
                        <h4>กล่องคราฟ สีธรรมชาติ</h4>
                        <span class="code">#09090909</span>
                        <p>กว้าง 13 x ยาว 13 x สูง 19.5 ซม.</p>
                        <p>จำนวนต่อแพ็ค 20 ชิ้น/แพ็ค</p>
                        <h2>180 / แพ็ค</h2>
                    </div>
                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i> เพิ่มลงตะกร้า</a>
                </div><!-- product -->
            </div><!-- 1 product -->
            <div class="col-md-3 col-sm-6">
                <div class="item item-box product-item">
                    <div class="like-btn"><i class="fa fa-heart"></i></div>
                    <div class="for-image" style="background-image: url('img/product-1.jpg');"></div>
                    <div class="description">
                        <h4>กล่องคราฟ สีธรรมชาติ</h4>
                        <span class="code">#09090909</span>
                        <p>กว้าง 13 x ยาว 13 x สูง 19.5 ซม.</p>
                        <p>จำนวนต่อแพ็ค 20 ชิ้น/แพ็ค</p>
                        <h2>180 / แพ็ค</h2>
                    </div>
                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i> เพิ่มลงตะกร้า</a>
                </div><!-- product -->
            </div><!-- 1 product -->
            <div class="col-md-3 col-sm-6">
                <div class="item item-box product-item">
                    <div class="like-btn"><i class="fa fa-heart"></i></div>
                    <div class="for-image" style="background-image: url('img/product-1.jpg');"></div>
                    <div class="description">
                        <h4>กล่องคราฟ สีธรรมชาติ</h4>
                        <span class="code">#09090909</span>
                        <p>กว้าง 13 x ยาว 13 x สูง 19.5 ซม.</p>
                        <p>จำนวนต่อแพ็ค 20 ชิ้น/แพ็ค</p>
                        <h2>180 / แพ็ค</h2>
                    </div>
                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i> เพิ่มลงตะกร้า</a>
                </div><!-- product -->
            </div><!-- 1 product -->
            <div class="col-md-3 col-sm-6">
                <div class="item item-box product-item">
                    <div class="like-btn"><i class="fa fa-heart"></i></div>
                    <div class="for-image" style="background-image: url('img/product-1.jpg');"></div>
                    <div class="description">
                        <h4>กล่องคราฟ สีธรรมชาติ</h4>
                        <span class="code">#09090909</span>
                        <p>กว้าง 13 x ยาว 13 x สูง 19.5 ซม.</p>
                        <p>จำนวนต่อแพ็ค 20 ชิ้น/แพ็ค</p>
                        <h2>180 / แพ็ค</h2>
                    </div>
                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i> เพิ่มลงตะกร้า</a>
                </div><!-- product -->
            </div><!-- 1 product -->

        </div><!-- row product -->
    </section><!-- related-product -->

    </div>
 </section>

<?php
    include "footer.php";
 ?>
