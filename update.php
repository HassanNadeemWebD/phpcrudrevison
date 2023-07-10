<?php include 'header.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $query = "SELECT * from `registration` where `id` = '$id' ";

    $res = mysqli_query($conn, $query);

    if (mysqli_num_rows($res) < 1) {

        echo "<script> window.location.href = 'index.php' </script>";


    } else {



        $data = mysqli_fetch_assoc($res);





        ?>



        <section class="container">

            <h1>Update Info</h1>
            <form action="update.php" method="post">

                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="form6Example1" name="fname" class="form-control"
                                value="<?php echo $data['fname'] ?>" required />
                            <label class="form-label" for="form6Example1">Full Name</label>
                        </div>
                    </div>


                    <div class="form-outline mb-4">
                        <input type="email" id="form6Example5" name="email" value="<?php echo $data['email'] ?>"
                            class="form-control" required />
                        <label class="form-label" for="form6Example5">Email</label>
                    </div>

                    <!-- Number input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="form6Example6" name="password" value="<?php echo $data['password'] ?>"
                            class="form-control" />
                        <label class="form-label" for="form6Example6">Password</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="number" id="form6Example6" name="contact" value="<?php echo $data['contact'] ?>"
                            class="form-control" />
                        <label class="form-label" for="form6Example6">Contact</label>
                    </div>


                    <button type="submit" name="update" class="btn btn-primary btn-block mb-4">update</button>
            </form>










        </section>




        <?php
    }

}

if (isset($_POST['update'])) {



    $id = $_POST['id'];
    $query = "UPDATE `registration` SET `fname` = '$_POST[fname]', `email` =  '$_POST[email]', `password` =  '$_POST[password]' ,
 `contact` =  '$_POST[contact]'
 WHERE `registration`.`id` = $id";

    $response = mysqli_query($conn, $query);
    if($response){

        echo "<script>Swal.fire(
            'Success!',
            'You have been registered !',
            'success'
        ); window.location.href = 'index.php' </script>";
    
    
    
    }


}
?>






<?php include 'footer.php';
?>