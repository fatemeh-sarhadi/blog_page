<?php include './include/header.php' ?>
<body>
    <!-- add header -->

    <!-- center -->

    <div class="home">
        <div class="row main4-f pt-3 mb-3 backgrand text-center d-flex align-items-center justify-content-center">
            <div class=" text-center d-flex align-items-center justify-content-center">
                <div class="linere d-flex justify-content-center align-items-center">
                    <span class="line1">

                    </span>
                    <span class="line">

                    </span>
                    <h2 class="about text-white"> درباره ما </h2>
                    <span class="line2">

                    </span>
                    <span class="line3">

                    </span>

                </div>
            </div>
            <!-- Explanatory text -->
            <div class="text-muted fs-5 pt-3 text-justify text-center ">
                <b class="text-secondary"> "با اشتراک گذاشتن دانش و تجربیاتمان، می‌توانیم از تجربیات یکدیگر بهره‌مند شویم و مهارت‌های جدیدی را
                    یاد بگیریم" </b>
            </div>
        </div>
        <div class=" container px-4 py-5 d-block text-center text-white">
            <div class="row justify-content-center d-flex ">
               
                <?php foreach($users as $user): ?>
               <div class=" col-lg-4 ">
                    <img src=<?php echo $user->img ?>  class=" bd-placeholder-img rounded-circle img-border " width=" 140 " height="
                                                140 " xmlns=" " role=" img " aria-label=" Placeholder:
                                                140x140 " preserveAspectRatio=" xMidYMid slice " focusable=" false ">
                    <h2><?php echo $user['name']?></h2>
                    <p><?php echo $user['job']?></p>
                    <a href="./about1.html"><button type="button" class="btn btn-outline-info"><b>رزومه من </b> </button></a>
                </div>  
                 <?php endforeach;?>
            </div>
        </div>
      <!--  /////////////////////end center -->
   <!-- add footer -->
         
    </div>
    <?php include './include/footer.php' ?>