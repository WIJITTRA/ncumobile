<?php
/**
 * Created by PhpStorm.
 * User: mossquito
 * Date: 2/18/15 AD
 * Time: 12:21
 * deception : การประกาศผลผู้เข้ารอบ ชิงชนะเลิศ
 */
require_once "class/Page.php";
$page = new Page();

$page->showHead("กำหนดการแข่งขัน | NCU Mobile App 2016");
//insert body here
echo '
    <div class="fantom-subheader">
        <div class="container">
            <div class="sub-title-text">ประกาศผลโรงเรียนทีผ่านเข้ารอบ นำเสนอผลงาน</div>
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
                <!-- main -->
                <h2 class="fantom-center-block fantom-heading">ประกาศผลในวันที่ 19 เดือน กุมภาพันธ์ พ.ศ.2559</h2>
                <!-- /main -->
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
