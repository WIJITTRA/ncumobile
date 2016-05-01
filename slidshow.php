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

$page->showHead("NCU Mobile App 2016");
//insert body here
echo '
    <div class="fantom-subheader">
        <div class="container">
            <div class="sub-title-text">ภาพบรรยากาศในงาน</div>
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
                <div class="fantom-layer-slider">
                <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                  <div data-src="images/slides/s6.jpg"></div>
                  <div data-src="images/slides/s7.jpg"></div>
                  <div data-src="images/slides/s8.jpg"></div>
                  <div data-src="images/slides/s9.jpg"></div>
                  <div data-src="images/slides/s10.jpg"></div>
                  <div data-src="images/slides/s11.jpg"></div>
                  <div data-src="images/slides/s12.jpg"></div>
                  <div data-src="images/slides/s13.jpg"></div>
                  <div data-src="images/slides/s14.jpg"></div>
                  <div data-src="images/slides/s15.jpg"></div>
                  <div data-src="images/slides/s16.jpg"></div>
                  <div data-src="images/slides/s17.jpg"></div>
                  <div data-src="images/slides/s618.jpg"></div>
                  <div data-src="images/slides/s19.jpg"></div>
                  <div data-src="images/slides/s20.jpg"></div>
                </div>
              </div>
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
