<?php
/**
 * Created by PhpStorm.
 * User: wacharapongnachiengmai
 * Date: 8/22/15 AD
 * Time: 20:44
 */
require_once "class/Page.php";

$page = new Page();

$page->showHead("เกี่ยวกับการแข่งขัน | NCU Mobile App 2016");
//insert body here
echo '
    <div class="fantom-subheader">
        <div class="container">
            <div class="sub-title-text">เกี่ยวกับการแข่งขัน</div>
        </div>
    </div>
  <div class="fantom-white-block col-md-12 fantom-body-row">
    <div class="container">
    <h1 class="fantom-center-block fantom-heading">NCU Mobile App 2016</h1>
    </div>
  </div>
    <div class="fantom-bodycontent">
        <div class="container">
            <div class="col-md-9">

                <div class="fantom-body-block col-md-12">
                        <h3>ข้อมูลทั่วไป</h3>
                        <p>
                            คณะวิทยาศาสตร์และเทคโนโลยีได้จัดการอบรมและการแข่งขัน NCU Mobile App ซึ่งเกี่ยวข้องกับการพัฒนาซอฟต์แวร์บนอุปกรณ์เคลื่อนที่ด้วย Advanced JQuery ชิงถ้วยพระราชทานสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี ระดับมัธยมศึกษาตอนปลายจำนวน 40 ทีม ทีมละ 2 ท่าน และอาจารย์ผู้ควบคุม 1ท่าน
                        </p>
                        <p>
                            โดยจะทำการอบรมในการพัฒนาซอฟต์แวร์บนอุปกรณ์เคลื่อนที่ด้วย Advanced JQuery ก่อนการแข่งขัน ในวันที่ 22 มกราคม 2559 ณ มหาวิทยาลัยนอร์ท-เชียงใหม่ จากนั้นทางคณะกรรมการจัดการการแข่งขันจะทำการคัดเลือกจากหัวข้อการนำซอฟต์แวร์ไปใช้ประโยชน์ (Project Proposal) ที่ผู้เข้าแข่งขันทำการส่งผ่านระบบอินเทอร์เน็ตมายังเครื่อง Server ของคณะวิทยาศาสตร์และเทคโนโลยี โดยมีระยะเวลา 5 วันหลังจากทำการอบรม โดยคัดเลือกผู้เข้าแข่งขันในรอบชิงชนะเลิศจำนวน 20 ทีม
                        </p>
                        <p>
                            การแข่งขันในรอบชิงชนะเลิศในวันที่ 26 กุมภาพันธ์ 2559 ณ มหาวิทยาลัยนอร์ท-เชียงใหม่ ผู้ชนะการแข่งขันจะได้รับเงินรางวัลดังนี้
                        </p>
                        <div class="col-md-12 fantom-checklist fadeInLeft animated">
                            <div class="col-md-12">
                                <h5>ทีมชนะเลิศ</h5>
                                <ul>
                                    <li><a href="#">ได้รับพระราชทานถ้วยรางวัลจากสมเด็จพระรัตนราชสุดา ฯสยามบรมราชกุมารี</a></li>
                                    <li><a href="#">เงินรางวัลจำนวน 5,000 บาท (ต่อ 1 ทีม)</a></li>
                                    <li><a href="#">ทุนการศึกษาในคณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยนอร์ท-เชียงใหม่ ในหลักสูตร 4 ปี มูลค่า 240,000 บาท (ต่อท่าน)</a></li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <h5>ทีมรองชนะเลิศอันดับ 1</h5>
                                <ul>
                                    <li><a href="#">เงินรางวัล 3,000 บาท (ต่อ 1 ทีม)</a></li>
                                    <li><a href="#">ทุนการศึกษาในคณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยนอร์ท-เชียงใหม่ ในหลักสูตร 4 ปี มูลค่า 180,000 บาท (ต่อท่าน)</a></li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <h5>ทีมรองชนะเลิศอันดับ 2</h5>
                                <ul>
                                    <li><a href="#">เงินรางวัล 2,000 บาท (ต่อ 1 ทีม)</a></li>
                                    <li><a href="#">ทุนการศึกษาในคณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยนอร์ท-เชียงใหม่ ในหลักสูตร 4 ปี มูลค่า 120,000 บาท (ต่อท่าน)</a></li>
                                </ul>
                            </div>
                            <p>โดยทุนการศึกษาทุกรายการสามารถคงสิทธิ์ไว้ได้จนกระทั่งนักเรียนสำเร็จการศึกษาในระดับมัธยมปลาย</p>
                        </div>
                </div>

            </div>
            <div class="col-md-3 fantom-sidebar">';
$page->showNews();
$page->showStaff();
echo '</div>
        </div>
    </div>
';
//end of body
$page->showFoot1();
$page->showScripts();
$page->showFoot2();