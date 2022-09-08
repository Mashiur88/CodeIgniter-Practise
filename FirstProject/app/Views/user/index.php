<?php echo $this->extend('layouts/app') ?>
<?php echo $this->section('content') ?>
    <div class="container-fluid">
        <p class="text-center h1 p-0 m-0">User List</p>
        <div class="container-fluid">
            <div class="">
                <a class="link-*" href="<?php echo site_url('users/create') ?>"><button class="btn btn-outline-info shadow"><i class="fad fa-plus" style="font-size: 20px;font-weight: bolder;"></i>Create New User</button></a>
            </div>
            <div class="offset-md-11">
                <span class="text-right">
                    <a class="btn btn-sm btn-inline blue-soft btn-print tooltips vcenter" data-placement="left" target="_blank" href="<?php echo url_to('PdfController::index', 'print') ?>" title="PRINT">
                        <i class="fa fa-print shadow-sm" style="font-size: 20px"></i>
                    </a>
                    <a class="btn btn-sm btn-inline yellow btn-pdf tooltips vcenter" data-placement="left" target="_blank" href="<?php echo url_to('PdfController::index', 'pdf') ?>" title="DOWNLOAD">
                        <i class="fas fa-file-pdf shadow-sm" style="font-size: 20px"></i>
                    </a>
                </span>
            </div>
        </div>
        <table class="table table-bordered table-hover table-responsive table-striped mt-2 shadow">
            <thead class="table-info">
                <tr>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>UserName</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Status</th>
                    <td colspan="2" class="text-center"><b>Action</b></td>
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
                            <td class="text-center">
                                <button type="button" class="btn btn-info fullAddress" data-bs-toggle="modal" data-id="<?php echo $row['id'] ?>" data-bs-target="#exampleModal">
                                    Address
                                </button>
                            </td>
                            <td id='cxngstatus<?php echo $id; ?>'><?php echo $temp1 ?></td>
                            <td class="text-center"><a href="<?php echo url_to('UserController::edit', $row['id']) ?>"><i class="fas fa-edit"></i></a></td>
                            <td class="text-center"><a href="<?php echo url_to('UserController::delete', $row['id']) ?>"><i class="fa-solid fa-trash"></i></a></td>
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
        <?php
        // echo "<pre>";
        // print_r($pager);
        // exit;
        //  echo $pager->makeLinks($page, $pager->perPage, $pager->total,'front_full'); 
        echo $pager->links();
        ?>

    </div>
    <script>
        $(document).ready(function() {
            var options = {
                "closeButton": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };


            $('.fullAddress').click(function() {
                // var id = $(this).attr("data-id");
                var id = $(this).data("id");
                console.log(id);
                $.ajax({
                    type: 'POST',
                    url: "<?php echo url_to('UserController::viewAddress'); ?>",
                    data: {
                        'id': id
                    },
                    success: function(data) {
                        $('.modal-body').html(data.html);
                        toastr.success(data.heading, data.message, options);
                    },
                    error: function(jqXhr, ajaxOptions, thrownError) {
                        var errorsHtml = '';
                        if (jqXhr.status == 400) {
                            var errors = jqXhr.responseJSON.message;
                            $.each(errors, function(key, value) {
                                errorsHtml += '<li>' + value + '</li>';
                            });
                            toastr.error(errorsHtml, jqXhr.responseJSON.heading, options);
                        } else if (jqXhr.status == 401) {
                            toastr.error(jqXhr.responseJSON.message, '', options);
                        } else {
                            toastr.error('Error', 'Something went wrong', options);
                        }
                    }

                });

            });
        });
    </script>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>