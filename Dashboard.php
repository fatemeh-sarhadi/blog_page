<?php  
include "./include/header.php";
include './incs/db.php';
include './include/admin.php'
?>

  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav hidden-xs ">
        <ul class="nav nav-pills nav-stacked">
          <li class="active"><a href="#section1">داشبورد</a></li>
          <li><a href="#section2">ویرایش اطلاعات شخصی</a></li>
          <li><a href="#section3">پروژه های من</a></li>
          <li><a href="#section3">افزودن پروژه</a></li>
          <li><a href="#section4">ویرایش پروژه</a></li>
        </ul><br>
      </div>
      <br>

      <div class="col-sm-9">
        <div class="well">
          <h4>داشبورد</h4>
          <p>Some text..</p>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <div class="well">
              <h4>کاربران</h4>
              <p>1 Million</p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="well">
              <h4>صفحات</h4>
              <p>100 Million</p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="well">
              <h4>اخبار</h4>
              <p>10 Million</p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="well">
              <h4>تخفیفات</h4>
              <p>30%</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php
  include "./include/footer.php"
  ?> 