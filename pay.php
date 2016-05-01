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

$msg = "ท่านได้ส่งหลักฐานเรียบร้อยแล้ว หลังจากที่ทางทีมงานตรวจสอบแล้วจะแจ้งให้ท่านทราบผ่านทาง e-mail ครับ<br>ขอบคุณครับ";
//upload file
$target_dir = "payslip/";
$target_file_name = substr(str_shuffle(md5(time())),0,15);
$path = $_FILES['team-pay']['name'];
$target_file_ext = pathinfo($path, PATHINFO_EXTENSION);
$target_file = $target_dir . $target_file_name . "." . $target_file_ext;
$uploadOk = 1;

// Check if file already exists
if (file_exists($target_file)) {
    $msg .= "Sorry, file already exists.<br>";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $msg .= "Sorry, your file was not uploaded.<br>";
// if everything is ok, try to upload file
} else {
    if (!move_uploaded_file($_FILES["team-pay"]["tmp_name"], $target_file))
        $msg .= "Upload File Not Success<br>";
}

$sqlText = "INSERT INTO `pays` (`pay_id`, `team_name`, `team_school`, `pay_file`) VALUES (NULL, '" . $_POST["team-name"] . "', '" . $_POST["team-school"] . "', '" . $target_file . "'); ";
mysql_query($sqlText);

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
                        <div class="alert alert-info flipInX animated">' . $msg . '
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
$page->showFoot2();