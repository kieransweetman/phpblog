<header>
    <nav class='bg-[#618779] w-full '>
        <div class="flex flex-row w-full justify-evenly ">
            <a href="">
                <img src="./assets/falco-ar21.svg" alt="">
            </a>


            <ul class="flex flex-row justify-end items-center gap-5 text-gray-900">
                <li><a href="?page=home" name='Home' class="">Home</a></li>
                <?php
                if (isset($_SESSION['user'])) {
                ?> <li><a href="?page=logout" name='logout'>Log Out</a></li>
                <?php
                } else {
                ?> <li><a href="?page=login" name="login">Login</a></li> <?php
                                                                        }
                                                                            ?>

                <li><a href="?page=contact" name='page'>Contact</a></li>
            </ul>
        </div>
    </nav>
</header>