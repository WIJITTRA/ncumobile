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

                <div class="fantom-body-block col-md-12">
                        <table class="fantom-table-2">
                            <tr>
                                <th>ชื่อทีม</th><th>สถาบัน/โรงเรียน</th><th></th>
                            </tr>';
$qText = "SELECT * FROM teams ORDER BY team_id; ";
$result = mysql_query($qText);
while ($rs=mysql_fetch_assoc($result)) {
    echo '                            <tr>
                                <td>' . $rs["team_name"] . '</td>
                                <td>' . $rs["team_school"] . '</td>
                                <td><a href="app-detail.php?tid=' .$rs["team_id"].'" target="_blank">
                                    <ul class="fantom-icon">
                                        <li class="fantom-hex-small">
                                            <div class="fantom-hexicon icon-doc-text"></div>
                                        </li>
                                    </ul></a></td>
                            </tr>';
}
echo '                      </table>
                    <div class="col-md-12">รวม ' . mysql_num_rows($result) . ' ทีม</div>
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