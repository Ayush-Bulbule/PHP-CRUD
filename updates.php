<!doctype html>
<html lang="en">

<head>
    <title>PHP- Update</title>
    <?php include 'links.php' ?>
    <?php include 'css/style.css' ?>
</head>

<body>
    <div class="user-ragistration">
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                    <h3>Welcome</h3>
                    <p>You are 30 seconds away from earning your own money!</p>
                    <a href="display.php">Check Details</a>
                </div>
                <div class="col-md-9 register-right">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Apply as a Employee</h3>
                            <form action="" method="post">
                                <div class="row register-form">

                                    <?php
                                    include 'connection.php';

                                    $ids = $_GET['id'];

                                    $showQuery = "select * from job_applications where id={$ids}";

                                    $showdata = mysqli_query($con, $showQuery);

                                    $res = mysqli_fetch_array($showdata);

                                    if (isset($_POST['submit'])) {
                                        $ids = $_GET['id'];
                                        $name = $_POST['name'];
                                        $email = $_POST['email'];
                                        $mobile = $_POST['mobile'];
                                        $jobpost = $_POST['jobpost'];
                                        $refer = $_POST['refer'];
                                        $degree = $_POST['degree'];

                                        // echo "update $ids";

                                        $updateQuery = "UPDATE `job_applications` SET `id`='$ids',`name`='$name',`degree`='$degree',`mobile`='$mobile',`email`='$email',`refer`='$refer',`jobpost`='$jobpost' WHERE id=$ids";

                                        $result =  mysqli_query($con, $updateQuery);

                                        if ($res) {
                                    ?>
                                            <script>
                                                alert("Data Updated Successfully");
                                            </script>
                                        <?php
                                        } else {
                                        ?>
                                            <script>
                                                alert("Data Update Failed!!");
                                            </script>
                                    <?php
                                        }
                                    }
                                    ?>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $res['name']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email" value="<?php echo $res['email']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="mobile" placeholder="Phone" value="<?php echo $res['mobile']; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="refer" placeholder="Any Refer" value="<?php echo $res['refer']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="jobpost" class="form-control" placeholder="Job Post" value="<?php echo $res['jobpost']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="degree" selected="<?php echo $res['degree']; ?>">
                                                <option class="hidden" selected disabled>Select your degree</option>
                                                <option>B.Sc/Diploma</option>
                                                <option>B.Tech</option>
                                                <option>M.Tech</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <input type="submit" name="submit" class="btnRegister" value="Register" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3 class="register-heading">Apply as a Hirer</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                    </div>


                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option class="hidden" selected disabled>Please select your Sequrity Question</option>
                                            <option>What is your Birthdate?</option>
                                            <option>What is Your old Phone Number</option>
                                            <option>What is your Pet Name?</option>
                                        </select>
                                    </div>

                                    <input type="submit" class="btnRegister" value="Register" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




</body>

</html>