 <?php


  function loginConfirmation($user)
  {
    if ($user) {
      echo "<div class='p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800' role='alert'>
        <span class='font-medium'>Success!</span>";
      echo "<br>" . "Hello, " . $_POST['name'];
    } else {
      echo "<div class='p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800' role='alert'>
        <span class='font-medium'>Danger alert!</span> <br> <p>Unknown User, " . $_POST['name'] . ".</p>
      </div>";
    }
    // header("refresh:1;url=index.php");
  }

  loginConfirmation($user);


  ?>
 </div>