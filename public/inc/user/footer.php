</div>


    <footer class="container-fluid bg-blue text-white py-3">
        <div class="row gap-2">

            <div class="col-sm order-sm-1">
                <h1 class="h1">About Us</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nesciunt repellendus itaque,
                    laborum
                    saepe
                    enim maxime, delectus, dicta cumque error cupiditate nobis officia quam perferendis consequatur
                    cum
                    iure
                    quod facere.</p>
            </div>
            <div class="col-sm order-sm-2">
                <h1 class="h1">Links</h1>
                <div class="links d-flex gap-2 flex-wrap">
                <?php if(isset($_SESSION['user_login'])){?>
                    <a href="../user/index.php" class="link text-white">Home</a>
                    <a href="../user/majors.php" class="link text-white">Majors</a>
                    <a href="../doctor/doctors.php" class="link text-white">Doctors</a>
                    <a href="../user/contact.php" class="link text-white">Contact</a>
                    <a href="../../handelers/user/auth/logout.php" class="link text-white">logout</a>
                    <?php }else{ ?>
                    <a href="register.php" class="link text-white">Register</a>
                    <a href="login.php" class="link text-white">login</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
        integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../../public/assets/scripts/home.js"></script>
</body>

</html>