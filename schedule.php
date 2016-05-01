<?php
/**
 * Created by PhpStorm.
 * User: wacharapongnachiengmai
 * Date: 8/22/15 AD
 * Time: 20:44
 */
require_once "class/Page.php";

$page = new Page();

$page->showHead("กำหนดการแข่งขัน | NCU Mobile App 2016");
//insert body here
echo '
    <div class="fantom-subheader">
        <div class="container">
            <div class="sub-title-text">กำหนดการแข่งขัน</div>
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
                    <table class="fantom-table-2 fadeInUp animated">
                        <tr>
                            <th>กำหนดการ</th>
                            <th>วันที่</th>
                        </tr>
                        <tr>
                            <td>รับสมัครทีมเข้าแข่งขัน</td>
                            <td>ไม่เกินวันที่ 15 มกราคม 2559</td>
                        </tr>
                        <tr>
                            <td>อบมรม Advance jQuery</td>
                            <td>12 กุมภาพันธ์ 2559</td>
                        </tr>
                        <tr>
                            <td>การส่งหัวข้อการนำซอฟต์แวร์ไปใช้ประโยชน์ (Project Proposal)</td>
                            <td>19 กุมภาพันธ์ 2559</td>
                        </tr>
                        <tr>
                            <td>การแข่งขันในรอบชิงชนะเลิศ</td>
                            <td>26 กุมภาพันธ์ 2559</td>
                        </tr>
                    </table>
                    <div style="color: red">*** กำหนดการอาจมีการเปลี่ยนแปลงตามความเหมาะสม</div>
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