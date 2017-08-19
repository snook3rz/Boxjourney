<?php
    include "header.php";
 ?>
 <section class="login-section">
 <section class="section-cover" style="background-image: url('img/cover.jpg');">
    <h1>แจ้งการชำระเงิน</h1>
</section>
    <div class="container">
        <div class="inner-section">
        <h3><i class="fa fa-money" aria-hidden="true"></i> อัพโหลดหลักฐานการชำระเงิน</h3>
        <hr>
            <div class="up-box">
                <form>
                    <label>อัพโหลดหลักฐาน (ไม่เกิน xx mb)</label>
                    <input type="file" name="file" required>

                    <label>วันที่โอน</label>
                    <input type="datetime-local" name="date">

                    <label>โอนเข้าธนาคาร</label>
                    <select required>
                        <option value="">-- เลือกธนาคาร --</option>
                        <option value="1">กสิกรไทย 405-5-49820-2</option>
                        <option value="2">กรุงเทพฯ 405-5-49820-2</option>
                        <option value="3">ไทยพาณิชย์ 405-5-49820-2</option>
                        <option value="4">กรุงศรีพร้อมเพย์ 405-5-49820-2</option>
                    </select>

                    <label>รายการที่ต้องการชำระ</label>
                    <select required>
                        <option value="">-- เลือกรายการที่ต้องการชำระ --</option>
                        <option value="1">ORDER 1234</option>
                        <option value="2">ORDER 1234</option>
                        <option value="3">ORDER 1234</option>
                    </select>

                    <label>จำนวนเงิน</label>
                    <input type="text" name="amount" required>

                    <label>หมายเหตุ</label>
                    <textarea></textarea>
                    <button type="submit">ส่งหลักฐานการชำระเงิน</button>
                </form>
            </div>
        </div>
    </div>
 </section>

<?php
    include "footer.php";
 ?>
