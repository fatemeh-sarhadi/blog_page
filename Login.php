<?php include './include/header.php'  ?>

    
        <div class="background login bg-dark">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <form method="post" action="./incs/db.php">
            <h3>Login Here</h3>

            <label for="username">نام کاربری</label>
            <input type="text" placeholder="Email or Phone" id="username">

            <label for="password">رمز ورود</label>
            <input type="password" placeholder="Password" id="password">
            <br>
            <button type="submit" value="send" class="">ورود</button>
        </form>

        <?php include './include/footer.php' ?>