<?php
/**
 * Created by PhpStorm.
 * User: wacharapongnachiengmai
 * Date: 8/22/15 AD
 * Time: 20:44
 */
require_once "class/Page.php";

$page = new Page();

$page->showHead("สมัครการแข่งขัน | NCU Mobile App 2016");
//insert body here
echo '
    <div class="fantom-subheader">
        <div class="container">
            <div class="sub-title-text">สมัครการแข่งขัน</div>
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
                        <div class="alert alert-success flipInX animated">
                             ท่านได้ทำการส่งใบสมัครเรียบร้อยแล้ว
                        </div>
                        <p>
                            กรุณาชำระเงินค่าลงทะเบียนการแข่งขัน ตามรายละเอียดดังนี้
                        </p>
                        <div class="fantom-alert fantom-alert-info flipInY animated">
                            <h5>ธนาคารกสิกรไทย</h5>
                            <p>ชื่อบัญชี : มหาวิทยาลัยนอร์ท-เชียงใหม่ (กองทุนทั่วไป)</p>
                            <p>เลขที่บัญชี : 471-2-06174-5</p>
                            <p>ค่าลงทะเบียน : 1,000 บาท (หนึ่งพันบาท)</p>
                        </div>
                        <p>
                            จากนั้นส่งหลักฐานการชำระเงินโดยการถ่ายรูปหรือ Scan <a href="register.php">ส่งมาที่นี่</a>
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