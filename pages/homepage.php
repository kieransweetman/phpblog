<script src="./pages/scripts/newsapi.js">

</script>
<style>

</style>


<div>
    <div>
        <p>Welcome, <?php if (isset($_COOKIE['user'])) {
                        echo $_COOKIE['user'];
                    } else {
                        echo " Stranger";
                    } ?></p>
    </div>

    <div>
        <button class="border-2 px-2 py-2 bg-[#618779] rounded-md"><a href="?page=users" class="h-full w-full">Show Users</a></button>
    </div>
</div>
<div id="news" class="w-[35%] h-[50%] overflow-y-scroll absolute right-0 top-20 text-center flex flex-col justify-center items-center ">
    <h1 class=' sticky top-0  bg-[#415896] rounded-lg w-[50%] block'>The News</h1>
</div>