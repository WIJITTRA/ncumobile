<?php
/**
 * Created by PhpStorm.
 * User: wacharapongnachiengmai
 * Date: 8/22/15 AD
 * Time: 20:44
 */
require_once "class/Page.php";

$page = new Page();

$page->showHead("การลงทะเบียน | NCU Mobile App 2016");
//insert body here
echo '
    <div class="fantom-subheader">
        <div class="container">
            <div class="sub-title-text">การลงทะเบียน</div>
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
                    <div class="col-md-12">
                        <p>
                            การการแข่งขัน NCU Mobile App โดยเป็นการแข่งขันการพัฒนาซอฟต์แวร์บนอุปกรณ์เคลื่อนที่ด้วย Advanced JQuery
                            ชิงถ้วยพระราชทานสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี ในระดับมัธยมศึกษาตอนปลาย โดยจะทำการรับสมัครผู้เข้าแข่งขันแบบเป็นทีม จำนวน
                            40 ทีม โดยในแต่ละทีมจะประกอบไปด้วยนักเรียนในระดับมัธยมศึกษาตอนปลายจำนวน 2 คน และอาจารย์ผู้ควบคุมจำนวน 1 ท่าน
                        </p>
                        <p>
                            ในการนี้ทางคณะวิทยาศาสตร์และเทคโนโลยีจึงใคร่ขอเชิญชวนท่านผู้สนใจเข้าร่วมการอบรมแข่งขันดังกล่าว โดยจะมีค่าใช้จ่ายเกี่ยวกับเอกสารการอบรม
                            ค่าอาหารกลางวันและอาหารว่าง สำหรับทีมที่เข้าร่วมการแข่งขัน ทีมละ 1,000 บาท ในวันอบรม ซึ่งค่าใช้จ่ายดังกล่าวท่านสามารถเบิกค่าใช้จ่ายจากหน่วยงานของท่านได้
                        </p>
                        <p>
                            ท่านสามารถทำการสมัครแบบออนไลน์ ด้านล่างนี้ ก่อนวันที่ 15 มกราคม 2559
                        </p>
                        <p>
                            หลังจากที่ได้ทำการส่งใบสมัครแล้ว กรุณาชำระเงินค่าลงทะเบียนการแข่งขัน ตามรายละเอียดดังนี้
                        </p>
                        <div class="fantom-alert fantom-alert-info flipInY animated">
                            <h5>ธนาคารกสิกรไทย</h5>
                            <p>ชื่อบัญชี : มหาวิทยาลัยนอร์ท-เชียงใหม่ (กองทุนทั่วไป)</p>
                            <p>เลขที่บัญชี : 471-2-06174-5</p>
                            <p>ค่าลงทะเบียน : 1,000 บาท (หนึ่งพันบาท)</p>
                        </div>
                        <p>
                            จากนั้นส่งหลักฐานการชำระเงินโดยการถ่ายรูปหรือ Scan ส่งมาในระบบด้านล่างนี้ หลังจากที่ทีมงานตรวจสอบความถูกต้องแล้ว จะแจ้งผลการสมัครให้ท่านทราบทางอีเมล์ที่ท่านได้ระบุมาครับ
                        </p>
                    </div>

                </div>
                <div class="fantom-tab tab-left col-md-12">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#reg" class="primary-color" data-toggle="tab" data-icon="&#xe1b5;">สมัคร</a></li>
                      <li><a href="#pay" class="primary-color" data-toggle="tab" data-icon="&#xe1b5;">ส่งหลักฐานโอนเงิน</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="reg">
                            <p>
                                <button type="button" class="fantom-button-radius-large primary-color" id="reg-btn">กรอกใบสมัคร</button>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="pay">
                            <h5>ส่งหลักฐานการชำระเงินค่าสมัครแข่งขัน</h5>
                            <form method="post" action="pay.php" enctype="multipart/form-data" id="pay-form" name="pay-form">
                                <div>ชื่อทีม:</div>
                                <div><input type="text" class="form-control fantom-textbox" placeholder="ระบุชื่อทีมเป็นภาษาไทยหรือภาษาอังกฤษ" id="team-name" name="team-name"></div>
                                <div>สถาบัน/โรงเรียน:</div>
                                <div><input type="text" class="form-control fantom-textbox" placeholder="ระบุชื่อสถาบันหรือโรงเรียน" id="team-school" name="team-school"></div>
                                <div>ภาพหลักฐานการชำระเงิน: (ไฟล์ JPG หรือ GIF หรือ PNG)</div>
                                <div><input type="file"  id="team-pay" name="team-pay" accept="image/*"></div>
                                <div><button type="button" class="fantom-button-radius-large primary-color" id="pay-btn">ส่งหลักฐานการชำระเงิน</button></div>
                            </form>
                        </div>
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
echo '<script src="js/reg.js"></script>\n';
$page->showFoot2();