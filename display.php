<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'links.php' ?>
    <?php include 'css/style.css' ?>
</head>

<body>
    <h2 class="text-center">List Of All Applications</h2>

    <div class="center-div container">
        <div class="table-responsive mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sr.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Degree</th>
                        <th>JobPost</th>
                        <th>Refer</th>
                        <th colspan="2">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'connection.php';

                    $selcetquery = "select * from job_applications";

                    $query = $query = mysqli_query($con, $selcetquery);
                    while ($res = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $res['id']; ?></td>
                            <td><?php echo $res['name']; ?></td>
                            <td><?php echo $res['email']; ?></td>
                            <td><?php echo $res['mobile']; ?></td>
                            <td><?php echo $res['degree']; ?></td>
                            <td><?php echo $res['jobpost']; ?></td>
                            <td><?php echo $res['refer']; ?></td>
                            <td><?php echo "
                                            <i class='fa fa-edit' style='color:blue;''>
                                            </i>"; ?></td>
                            <td><?php echo "
                                            <i class='fa fa-trash ms-3' style='color:red;''>
                                            </i>"; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>