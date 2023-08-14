<?php include('partials/menu.php'); ?> 
    <!-- Main-content starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Admin</h1>
            <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];//Displaying the session
                unset($_SESSION['add']);//Removiing the session
            }
            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];//Displaying the session
                unset($_SESSION['delete']);//Removiing the session
            }
            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];//Displaying the session
                unset($_SESSION['update']);//Removiing the session
            }
            if(isset($_SESSION['user-not-found']))
            {
                echo $_SESSION['user-not-found'];//Displaying the session
                unset($_SESSION['user-not-found']);//Removiing the session
            }
            if(isset($_SESSION['pwd-not-match']))
            {
                echo $_SESSION['pwd-not-match'];//Displaying the session
                unset($_SESSION['pwd-not-match']);//Removiing the session
            }
            if(isset($_SESSION['change-pwd']))
            {
                echo $_SESSION['change-pwd'];//Displaying the session
                unset($_SESSION['change-pwd']);//Removiing the session
            }
            ?>
            <br/>
            
            <!-- Button to Add Admin -->
            <a href="add-admin.php" class="btn-primary">Add Admin</a>
            
            <br><br>
            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>
                <?php
                    $sql="SELECT * FROM tbl_admin";

                    $res=mysqli_query($conn,$sql);
                    if($res== TRUE)
                    {
                        $count=mysqli_num_rows($res);//function to get all the rows in database
                        $sn=1;//create a variable and assign the value
                        if($count>0)
                        {
                            //we have data in database
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                //using while loop to get all the data from database
                                //get individual data
                                $id=$rows['id'];
                                $fullname=$rows['full_name'];
                                $username=$rows['username'];

                                //display the values in our table
                                ?>
                                <tr>
                                        <td><?php echo $sn++; ?>.</td>
                                        <td><?php echo $fullname; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
                                            <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>
                                        </td>
                                    </tr>
                                <?php
                            }
                        }
                    }
                ?>
            </table>
        </div>

    </div>
    <!-- Main-content ends -->

<?php include('partials/footer.php'); ?>

