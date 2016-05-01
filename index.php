<?php
/**
 * Created by PhpStorm.
 * User: wacharapongnachiengmai
 * Date: 8/22/15 AD
 * Time: 20:44
 */
require_once "class/Page.php";

$page = new Page();

$page->showHead("NCU Mobile App 2016");
//insert body here
echo '
    <div class="fantom-layer-slider">
    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
      <div data-src="images/slides/s1.jpg">

      </div>
      <div data-src="images/slides/s4.jpg">

      </div>
      <div data-src="images/slides/s5.jpg">

      </div>
    </div>
  </div>
  <div class="fantom-white-block col-md-12 fantom-body-row">
    <div class="container">
    <h2 class="fantom-center-block fantom-heading">การแข่งขันชิงถ้วยพระราชทานสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี</h2>
      <h3 class="fantom-center-block fantom-sub-heading">NCU Mobile App 2016</h3>
    </div>
  </div>
    <div class="fantom-bodycontent">
        <div class="container">
            <div class="col-md-9">
                <div class="fantom-body-block col-md-12">
                    <h4>กำหนดการสำคัญ</h4>
                    <div>
                        <div class="col-md-12 fantom-alert-danger fantom-alert fadeInLeft animated">
                            <li><a href="slidshow.php">บรรยากาศในการอบรม</a>&nbsp;&nbsp;<img src="images/icon/icon_new.gif"></il>
                            <li><a href="newpage.php">ประกาศผลโรงเรียนทีผ่านเข้ารอบ นำเสนอผลงาน</a>&nbsp;&nbsp;<img src="images/icon/icon_new.gif"></il>
                            <li><a href="https://www.facebook.com/NCU-Mobile-APP-Contest-455258457996514/">ประกาศผลโรงเรียนทีผ่านเข้ารอบ นำเสนอผลงาน</a>&nbsp;&nbsp;<img src="images/icon/icon_new.gif"></il>

                      </div>
                    </div>
                </div>
                <div class="col-md-12">
                        <h4>หลักการและเหตุผล</h4>
                        <p>
                            เนื่องด้วยคณะวิทยาศาสตร์และเทคโนโลยีได้จัดการอบรมและการแข่งขัน NCU Mobile App ซึ่งเกี่ยวข้องกับการพัฒนาซอฟต์แวร์บนอุปกรณ์เคลื่อนที่ด้วย Advanced JQuery ชิงถ้วยพระราชทานสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี ระดับมัธยมศึกษาตอนปลายจำนวน 40 ทีม ทีมละ 2 ท่าน และอาจารย์ผู้ควบคุม 1ท่าน
                        </p>
                        <p>
                            ทีมชนะเลิศ ได้รับพระราชทานถ้วยรางวัลจากสมเด็จพระรัตนราชสุดา ฯสยามบรมราชกุมารี เงินรางวัลจำนวน 5,000 บาท ต่อ 1 ทีม และทุนการศึกษาในคณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยนอร์ท-เชียงใหม่ ในหลักสูตร 4 ปี มูลค่า 240,000 บาท ต่อท่าน
                        </p>
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
