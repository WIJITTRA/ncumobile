<?php
/**
 * Created by PhpStorm.
 * User: wacharapongnachiengmai
 * Date: 8/22/15 AD
 * Time: 20:44
 */
require_once "class/Page.php";

$page = new Page();

$page->showHead("แบบฟอร์มการสมัคร | NCU Mobile App 2016");
//insert body here
echo '
    <div class="fantom-subheader">
        <div class="container">
            <div class="sub-title-text">แบบฟอร์มการสมัคร</div>
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
                    <form role="form" id="submitform" method="post" action="submit_abs.php">
                        <div class="alert alert-warning flipInX animated">
                            <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a> กรุณากรอกข้อมูลต่อไปนี้ให้ครบทุกช่อง
                        </div>

                        <table class="fantom-table-2">
                            <tr>
                                <td width="20%">ชื่อทีม :</td>
                                <td width="80%">
                                    <input type="text" class="form-control fantom-textbox" placeholder="ระบุชื่อทีมเป็นภาษาไทยหรือภาษาอังกฤษ" id="team-name" name="team-name">
                                    <div class="alert alert-danger flipInX animated" id="alert-team-name" hidden="hidden">
                                        <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a> กรุณาระบุชื่อทีม
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td width="20%">ชื่อสถาบัน/โรงเรียน :</td>
                                <td width="80%">
                                    <input type="text" class="form-control fantom-textbox" placeholder="ระบุชื่อสถาบันหรือโรงเรียน" id="team-school" name="team-school">
                                    <div class="alert alert-danger flipInX animated" id="alert-team-school" hidden="hidden">
                                        <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a> กรุณาระบุ
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%">ชื่อผู้เข้าแข่งขันคนที่ 1 :</td>
                                <td width="80%">
                                    <input type="text" class="form-control fantom-textbox" placeholder="ระบุชื่อผู้เข้าแข่งขันคนที่ 1" id="team-std1" name="team-std1">
                                    <div class="alert alert-danger flipInX animated" id="alert-team-std1" hidden="hidden">
                                        <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a> กรุณาระบุ
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%">ชื่อผู้เข้าแข่งขันคนที่ 2 :</td>
                                <td width="80%">
                                    <input type="text" class="form-control fantom-textbox" placeholder="ระบุชื่อผู้เข้าแข่งขันคนที่ 2" id="team-std2" name="team-std2">
                                    <div class="alert alert-danger flipInX animated" id="alert-team-std2" hidden="hidden">
                                        <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a> กรุณาระบุ
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%">อาจารย์ที่ปรึกษา :</td>
                                <td width="80%">
                                    <input type="text" class="form-control fantom-textbox" placeholder="ระบุชื่ออาจารย์ที่ปรึกษา" id="team-teacher" name="team-teacher">
                                    <div class="alert alert-danger flipInX animated" id="alert-team-teacher" hidden="hidden">
                                        <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a> กรุณาระบุ
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%">หมายเลขโทรศัพท์ :</td>
                                <td width="80%">
                                    <input type="text" class="form-control fantom-textbox" placeholder="ระบุหมายเลขโทรศัพท์สำหรับติดต่อ" id="team-tel" name="team-tel">
                                    <div class="alert alert-danger flipInX animated" id="alert-team-tel" hidden="hidden">
                                        <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a> กรุณาระบุ
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%">e-mail :</td>
                                <td width="80%">
                                    <input type="text" class="form-control fantom-textbox" placeholder="ระบุ e-mail หลักสำหรับการติดต่อ" id="team-email" name="team-email">
                                    <div class="alert alert-danger flipInX animated" id="alert-team-email" hidden="hidden">
                                        <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a> กรุณาระบุ
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%">รหัสผ่าน :</td>
                                <td width="80%">
                                    <input type="password" class="form-control fantom-textbox" id="team-password-1" name="team-password-1">
                                    <div class="alert alert-danger flipInX animated" id="alert-team-password-1" hidden="hidden">
                                        <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a> กรุณาระบุ
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%">ยืนยันรหัสผ่าน :</td>
                                <td width="80%">
                                    <input type="password" class="form-control fantom-textbox" id="team-password-2" name="team-password-2">
                                    <div class="alert alert-danger flipInX animated" id="alert-team-password-2" hidden="hidden">
                                        <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a> กรุณาระบุ
                                    </div>
                                    <div class="alert alert-danger flipInX animated" id="alert-team-password-3" hidden="hidden">
                                        <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a> รหัสผ่านไม่ตรงกัน
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="20%"></td>
                                <td width="80%"><button type="button" class="fantom-button-medium primary-color" id="submit-app-btn">ส่งใบสมัคร</button></td>
                            </tr>
                        </table>
                    </form>
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
echo '<script src="js/application.js"></script>\n';
$page->showFoot2();