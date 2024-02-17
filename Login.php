<?php include './header.php'  ?>



    
        <div class="background login bg-dark">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <form>
            <h3>Login Here</h3>

            <label for="username">نام کاربری</label>
            <input type="text" placeholder="Email or Phone" id="username">

            <label for="password">رمز ورود</label>
            <input type="password" placeholder="Password" id="password">
            <br>
            <button class="">ورود</button>
            <div class="social radiuse-2">
                <div class="go ms-2"><i class="fab fa-google"></i> Google</div>
                <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
            </div>
        </form>

        <?php include './footer.php' ?>