<?php
/**
 * Created by PhpStorm.
 * User: wacharapongnachiengmai
 * Date: 8/22/15 AD
 * Time: 20:44
 */
require_once "class/Page.php";

$page = new Page();

$page->showHead("สถานที่ | NCU Mobile App 2016");
//insert body here
echo '
    <div class="fantom-subheader">
        <div class="container">
            <div class="sub-title-text">สถานที่</div>
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

                <div class="col-md-12">
                    <h4>มหาวิทยาลัยนอร์ท-เชียงใหม่</h4>
                    <p>
                        169 หมู่ 3 ตำบลหนองแก๋ว อำเภอหางดง จังหวัดเชียงใหม่ 50230
โทรศัพท์ 0-5381-9849, โทรสาร 0-5381-9849
                    </p>
                    <div class="fantom-googlemap-1 col-md-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15119.946693388489!2d98.911093!3d18.664594!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x14eb4cc4ef0deef3!2sNorth-Chiang+Mai+University!5e0!3m2!1sen!2sth!4v1449115776388" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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