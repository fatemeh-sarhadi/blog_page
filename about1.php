<?php include './include/header.php';
include './incs/db.php';

?>


<?php

$userId = (int) filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$db = new mysqli('localhost', 'root', '', 'personal_website');

/* get data from users */
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->bind_param('i', $userId); // Bind the user ID as an integer
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
} else {
  echo "User not found.";
}


/* get data from general_info */
$slgeneral = "SELECT * FROM general_info WHERE id = ?";
$stmt2 = $db->prepare($slgeneral);
$stmt2->bind_param('i', $userId); // Bind the user ID as an integer
$stmt2->execute();
$result_info = $stmt2->get_result();

if ($getrow = $result_info->fetch_assoc()) {
} else {
  echo "User not found.";
}


/* get data from portfolio */
$sqlpr = "SELECT p.*
FROM users AS u
INNER JOIN portfolio_contributor AS pc ON u.id = pc.user_id
INNER JOIN portfolio AS p ON pc.portfolio_id = p.id
WHERE u.id = ?";

$stmt3 = $db->prepare($sqlpr);
$stmt3->bind_param("i", $userId);
$stmt3->execute();
$resultpr = $stmt3->get_result();

if ($resultpr->num_rows > 0) {
  $rowPr = $resultpr;
} else {
  echo "No projects found for user ID: " . $userId;
}

?>

<div class="about1">
  <!-- About1 -->
  <section class="section about1 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 text-center mb-5 mb-sm-0">
          <img class="img-fluid shadow-lg pt-5 pb-3" src="<?= $row['img'] ?>" title="I'm Fatemeh Sarhadi" alt="">
          <div class="media pt-4">
            <ul class="text-center " style="list-style-type: none; ">
              <li style="margin-right: 26px; ">
                <a class="cursor-pointer text-muted p-2" href="<?= $getrow['github'] ?>">
                  <img class="box" aria-posinset="relative " width="34px " height="32px " src="./assets/img/icons8-github.svg">
                </a>

                <a class="cursor-pointer text-muted p-2" href="<?= $getrow['linkedin'] ?>">
                  <img class="box " aria-posinset="relative " width="34px " height="32px " src="./assets/img/icons8-linkedin.svg">
                </a>
                <a class="cursor-pointer p-2" href="<?= $getrow['tel'] ?>">
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
          <h3 class="text-6 text-light mb-4 pt-4"> <span class="text-info">
              <?= $row['name'] ?></span></h3>
          <p class="fs-3"> <?= $getrow['about'] ?> </p>
          <a href="<?= $users->resume ?>" download>
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
      <?php foreach ($rowPr as $pr) : ?>
        <div class="card-article border-0 shadow-lg" style="width: 22rem;">
          <div class="card-thumbnail">
            <img src=" <?= $pr['project_link'] ?>" class="img-article card-img-top pb-2" alt="...">
          </div>

          <div class="card-body-article text-white p-3">
            <h5 class="card-title">
              <?= $pr['title'] ?>
            </h5>
            <p class="card-text"> <?= $pr['description'] ?>
            </p>
            <div class="d-flex justify-content-between  p-3 ">
              <span class=""><img class="calendar" src="./assets/img/calendar.png">
                31 دی 1402
              </span>
              <a class="edame text-decoration-none text-white" href="gallery.php?id=<?= $pr['id'] ?>">ادامه مطلب <img class="arrow" src="./assets/img/arrow-left.png"></a>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>



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
                <input type="text" placeholder="نام و نام خانوادگی (اختیاری)" class="w-100 border border-0 rounded-3 my-1 p-2 fw-bold" style="background-color: #F6F9FC; height: 40px;">
              </div>
              <div class="pb-3">
                <input type="text" placeholder="ایمیل (اجباری)" class="w-100 p-2 border border-0 rounded-3 my-1 fw-bold" style="background-color: #F6F9FC; height: 40px;">
              </div>
              <div class="pb-3">
                <input type="text" placeholder="شماره تماس (اجباری)" class="w-100 p-2 border border-0 rounded-3 my-1 fw-bold" style="background-color: #F6F9FC; height: 40px;">
              </div>
            </div>
            <div class="col-6 pb-10">

              <div>
                <textarea type="text" placeholder="متن پیام خود را وارد کنید (اجباری)" class="border border-0 rounded-3 w-100 my-1 p-2 fw-bold" style="background-color: #F6F9FC; height: 200px;"></textarea>
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
            <p><?= $getrow["addres"] ?></p>
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
            <p><?= $row["email"]?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>