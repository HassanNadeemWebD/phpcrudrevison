<?php
include 'header.php';

$query = "SELECT * FROM `registration`";
$res = mysqli_query($conn, $query);

if ($res) {

    // print_r(mysqli_fetch_all($res));


?>

<section class="container">
    <div class="container">
        <h1>Registered Users</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Contact</th>
                    <th>Update/Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['fname'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['password'] ?></td>
                        <td><?php echo $row['contact'] ?></td>
                        <td>
                            <a  href="update.php?id=<?php echo $row['id'] ?>"> <button class="btn btn-primary">Update</button> </a>
                           <a href="delete.php?id=<?php echo $row['id'] ?>">  <button class="btn btn-danger">Delete</button> </a>
                    
                    </td>

                    </tr>
                <?php } }?>
            </tbody>
        </table>
    </div>






</section>


<?php
include 'footer.php'

    ?>