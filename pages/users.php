<div class='text-center'>
    <h1 class="text-lg">User List</h1>

    <table class="table-auto">
        <thead>
            <tr>
                <th>User Names</th>
                <th>Password</th>
            </tr>

        </thead>
        <tbody>

            <?php
            foreach ($users as $user) {
                echo "<tr>";
                echo "<td>" . $user['name'] . "</td><td>" . $user['password'] . "</td>";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>



</div>