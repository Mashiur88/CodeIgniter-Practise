<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>User</title>
    <style>
        table,
        td,
        tr,
        th {
            border: 1px solid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid;
        }
        td,p{
            text-align: center;
        }
        p{
            font-weight: 900;
            font-size: 2rem;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <p class="text-center h1 p-0 m-0">User List</p>
        <table class="table table-bordered table-hover table-responsive table-striped mt-2 shadow">
            <thead class="table-info">
                <tr>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>UserName</th>
                    <th>Gender</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($users)) {

                    foreach ($users as $row) {
                        if ($row["gender"] == 1) {
                            $temp = "male";
                        } else if ($row["gender"] == 2) {
                            $temp = "female";
                        }
                        if ($row["status"] == 0) {
                            $temp1 = "Inactive";
                        } else if ($row["status"] == 1) {
                            $temp1 = "Active";
                        }
                        $id = $row['id'];
                        $stat = $row['status'];
                ?>
                        <tr>
                            <td><?php echo $row["first_name"] ?></td>
                            <td><?php echo $row["last_name"] ?></td>
                            <td><?php echo $row["user_name"] ?></td>
                            <td><?php echo $temp ?></td>
                            <td id='cxngstatus<?php echo $id; ?>'><?php echo $temp1 ?></td>
                        </tr>
                    <?php } ?>
                <?php } else {  ?>
                    <tr>
                        <td colspan="7" class="text-center">No Data Found</td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function(event) {
                window.print();
            });
        </script>
</body>

</html>