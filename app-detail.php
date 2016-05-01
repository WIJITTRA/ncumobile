<?php
/**
 * Created by PhpStorm.
 * User: wacharapongnachiengmai
 * Date: 8/22/15 AD
 * Time: 20:44
 */
require_once "class/Page.php";
require_once "class/db_connect.php";
$db = new DB_CONNECT();

$page = new Page();

$page->showHead("รายชื่อผู้สมัครแข่งขัน | NCU Mobile App 2016");
//insert body here
echo '
    <div class="fantom-subheader">
        <div class="container">
            <div class="sub-title-text">รายชื่อผู้สมัครการแข่งขัน</div>
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

                <div class="fantom-body-block col-md-12">';
$qText = "SELECT * FROM teams WHERE team_id='" . $_GET["tid"] . "'; ";
$result = mysql_query($qText);
$rs=mysql_fetch_assoc($result);
echo '            <table class="fantom-table-2">
                            <tr>
                                <th>ชื่อทีม :</th><th>' . $rs["team_name"] . '</th>
                            </tr>
                            <tr>
                                <td>สถาบัน/โรงเรียน :</td>
                                <td>' . $rs["team_school"] . '</td>
                            </tr>
                            <tr>
                                <td>ผู้เข้าแข่งขันคนที่ 1 :</td>
                                <td>' . $rs["team_std1"] . '</td>
                            </tr>
                            <tr>
                                <td>ผู้เข้าแข่งขันคนที่ 2 :</td>
                                <td>' . $rs["team_std2"] . '</td>
                            </tr>
                            <tr>
                                <td>อาจารย์ที่ปรึกษา :</td>
                                <td>' . $rs["team_teacher"] . '</td>
                            </tr>
                            <tr>
                                <td>Tel. :</td>
                                <td>' . $rs["team_tel"] . '</td>
                            </tr>
                            <tr>
                                <td>E-mail :</td>
                                <td>' . $rs["team_email"] . '</td>
                            </tr>
                            <tr>
                                <td>Pay Slip :</td>';
if ($rs["pay_slip"]=="-") {
    echo '                  <td>-</td>';
}
else {
    echo '                             <td><a href="' . $rs["pay_slip"] . '" target="_blank">' . $rs["pay_slip"] . '</a></td>';
}
echo '                           </tr>
                    </table>
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