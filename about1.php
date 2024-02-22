<?php include './include/header.php'; 
include './incs/db.php';

?>


<?php

$userId = (int) filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$db = new mysqli('localhost', 'root', '', 'personal_website');

$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->bind_param('i', $userId); // Bind the user ID as an integer
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
} else {
    echo "User not found.";
}

<div class="about1">
  <!-- About1
        ============================================= -->
  <section class="section about1 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 text-center mb-5 mb-sm-0">
          <img class="img-fluid shadow-lg rounded-circle pt-5 pb-3" src="./assets/img/DSC3414.JPG" title="I'm Fatemeh Sarhadi" alt="">
          <div class="media pt-4">
            <ul class="text-center " style="list-style-type: none; ">
              <li style="margin-right: 26px; ">
                <a class="cursor-pointer text-muted p-2" href="https://github.com/fatemeh-sarhadi">
                  <img class="box" aria-posinset="relative " width="34px " height="32px " src="./assets/img/icons8-github.svg">
                </a>

                <a class="cursor-pointer text-muted p-2" href="https://www.linkedin.com/in/fatemeh-sarhadi/">
                  <img class="box " aria-posinset="relative " width="34px " height="32px " src="./assets/img/icons8-linkedin.svg">
                </a>
                <a class="cursor-pointer p-2" href="#">
                  <img class="box " aria-posinset="relative " width="34px " height="32px " src="./assets/img/icons8-telegram.svg">
                </a>

              </li>
            </ul>
          </div>

        </div>
        <div class="col-sm-7 text-right ps-lg-4 pt-md-5 text-white">
          <b class="text-white text-align-start pt-sm-5">درباره من </b>
          <div class="d-flex">
            <div class="line5-footer"></div>
            <div class="line4-footer"></div>
          </div>
          <!-- <h2 class="text-white text-align-start pt-sm-5">درباره من </h2> -->
          <h3 class="text-6 text-light mb-4 pt-4"> <span class="text-info">من توسعه دهنده وب
              هستم.</span></h3>
          <p class="fs-3"> من یک توسعه دهنده وب هستم که علاقه زیادی به ایجاد وب سایت های جذاب و کاربر پسند
            دارم. درحال
            حاضر دانشجو رشته علوم کامپیوتر در دانشگاه صنعتی بیرجند هستم .</p>
          <p class="fs-3">من دائماً در حال یادگیری و پیگیری آخرین روندهای توسعه وب هستم . فردی با انگیزه بالا
            هستم که در
            محیط سریع رشد می کنم</p>
          <a href="./assets/pdf/resume.pdf" download>
            <button class="btn btn-outline-warning"> دانلود رزومه </button>
            <a>
        </div>
      </div>
    </div>
  </section>

  <!-- About end -->

  <!-- portfolio  -->

  <div class="container-fluid my-portfolio mt-5 mb-3 ">
    <div class="row py-5 mx-5">
      <section class="mb-3 mt-4 mb-lg-0 col-12 col-lg-6">
        <div class="d-flex align-items-center">
          <span class="line5-footer "></span>
          <span class="line4-footer"></span>
          <h3 class="story text-white"> پروژه های من </h3>
        </div>
      </section>
    </div>
    <div class="text-center d-flex flex-wrap justify-content-evenly">
      <div class="card-article border-0 shadow-lg" style="width: 22rem;">
        <div class="card-thumbnail">
          <img src="./assets/img/Screenshot.png" class="img-article card-img-top pb-2" alt="...">
        </div>

        <div class="card-body-article text-white p-3">
          <h5 class="card-title"> پروژه دنجی
          </h5>
          <p class="card-text"> این پروژه تیمی انجام شده با استفاده از html , css , javascript , bootstrap انجام شده .
          </p>
          <div class="d-flex justify-content-between  p-3 ">
            <span class=""><img class="calendar" src="./assets/img/calendar.png">
              31 دی 1402
            </span>
            <a class="edame text-decoration-none text-white" href="./gallery1.html">ادامه مطلب <img class="arrow" src="./assets/img/arrow-left.png"></a>
          </div>

        </div>
      </div>
      <div class="card-article border-0 shadow-lg" style="width: 22rem;">
        <div class="card-thumbnail">
          <img src="./assets/img/Screenshot (2).png" class="img-article card-img-top   pb-2" alt="...">
        </div>
        <div class="card-body-article text-white p-3">
          <h5 class="card-title"> پروژه بوت استرپ</h5>
          <p class="card-text">این پروژه تنها با فریم ورک Bootstrap 5 انجام شده . </p>

          <div class="d-flex justify-content-between p-3">
            <span class=""><img class="calendar" src="./assets/img/calendar.png">
              29 شهریور 1402
            </span>
            <a class="edame text-decoration-none text-white" href="#">ادامه مطلب <img class="arrow cursor-pointer" src="./assets/img/arrow-left.png"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- contact me -->
  <!-- contact me -->
  <!--------------- start main ------------>
  <div class="container mt-3 w-100">
    <!------------- start form_contact ------------->
    <div class="row py-2 pb-5 ps-3">
      <div class="col-lg-7 rounded-1 p-2 mb-0">
        <div class="form-contact d-flex pb-10 text-info">
          <div class="me-2">
            <img src="../assets/images/Group805(1).png" alt="">
          </div>
          <div> <b class="text-white text-align-end pt-sm-5">تماس با من </b>
            <div class="d-flex">
              <div class="line5-footer"></div>
              <div class="line4-footer"></div>
            </div>
          </div>


        </div>

        <form action="#">
          <div class="row">
            <div class="col-6 pb-10">
              <div class="pb-3 pt-3">
                <input type="text" placeholder="نام و نام خانوادگی (اختیاری)"
                  class="w-100 border border-0 rounded-3 my-1 p-2 fw-bold" style="background-color: #F6F9FC; height: 40px;">
              </div>
              <div class="pb-3">
                <input type="text" placeholder="ایمیل (اجباری)" class="w-100 p-2 border border-0 rounded-3 my-1 fw-bold"
                  style="background-color: #F6F9FC; height: 40px;">
              </div>
              <div class="pb-3">
                <input type="text" placeholder="شماره تماس (اجباری)" class="w-100 p-2 border border-0 rounded-3 my-1 fw-bold"
                  style="background-color: #F6F9FC; height: 40px;">
              </div>
            </div>
            <div class="col-6 pb-10">

              <div>
                <textarea type="text" placeholder="متن پیام خود را وارد کنید (اجباری)"
                  class="border border-0 rounded-3 w-100 my-1 p-2 fw-bold"
                  style="background-color: #F6F9FC; height: 200px;"></textarea>
                <div class=" text-start px-4 border-3 justify-content-center ">
                  <button type="submit " class="btn btn-outline-warning"><b>ارسال پیام </b></button>
                </div>
              </div>

            </div>

          </div>
        </form>
      </div><!--------- end of form_contact ------->
      <div class="col-lg-5 text-white pt-md-5">
        <div class="d-flex align-items-center">
          <div class="d-flex position-relative">
            <div class="rounded-circle d-flex justify-content-center align-items-center">
              <img src="./assets/img/map.png" alt="" class="position-absolute">
            </div>

          </div>
          <div class="text-end ms-2 p-2">
            <b>آدرس من</b>
            <p>خراسان جنوبی- بیرجند- خیابان غفاری- پارک علم و فناوری خراسان جنوبی</p>
          </div>
        </div>
        <div class="d-flex align-items-center pb-10">
          <div class="d-flex position-relative" style="width:60px; height: 60px;">
            <div class="rounded-circle d-flex justify-content-center align-items-center">
              <img src="./assets/img/sms.png" alt="" class="position-absolute">
            </div>
          </div>
          <div class="text-end ms-2">
            <b>ایمیل من</b>
            <p>rahasdi80@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include './include/footer.php' ?>