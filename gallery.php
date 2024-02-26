<?php
include './include/header.php';
?>

<?php
$project_id = (int) filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$db = new mysqli('localhost', 'root', '', 'personal_website');

/* get data from users */
$sql = "SELECT * FROM galleries WHERE portfolio_id = ?";
$stmt = $db->prepare($sql);
$stmt->bind_param('i', $project_id);
$stmt->execute();

// Fetch the first record as an associative array
$row = $stmt->get_result();

if ($row->num_rows > 0) {
    $getData = $row;
} else {
    echo "No projects found for user ID: " . $project_id;
}

$db->close();

?>

<div class=" py-4 bg-dark">

    <?php foreach ($getData as $item) : ?>
        <div class="responsive col-lg-4 col-sm-6">
            <div class="gallery">
                <a target="_blank" href="./assets/img/7.png">
                    <img src=" <?= $item['link'] ?>" alt="Forest" width="600" height="400">
                </a>
                <div class="desc text-light"> <b> <?= $item['caption'] ?></b> </div>
            </div>
        </div>

    <?php endforeach; ?>

    <div class="clearfix"></div>
    <div class="p-4 ">
        <div class="cap text-justify">
            <h1 class="fs-3 text-light text-end"> توضیح پروژه</h1>
            <p class="text-light pt-2">این پروژه فرانت برای طراحی یک وبسایت مدرن و جذاب بوده است. از رنگ‌ها و فونت‌های
                مدرن و زیبا استفاده شده است که به سایت زنده‌ای و جذابیت بخشیده است. طراحی UI/UX این سایت به گونه‌ای است
                که تجربه کاربری بهینه و دلپذیری را برای بازدیدکنندگان فراهم می‌کند. همچنین از تصاویر با کیفیت و مناسب
                برای نمایش محصولات و خدمات استفاده شده است که باعث جلب توجه و افزایش محبوبیت سایت می‌شود. در کل، این
                پروژه فرانت نشان دهنده تلاش، حرفه‌ایت و ابتکار در طراحی وب می‌باشد.</p>
        </div>
    </div>
</div>

<?php
include './include/footer.php';
?>