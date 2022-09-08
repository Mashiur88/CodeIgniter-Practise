<?php echo $this->extend('layouts/app') ?>
<?php echo $this->section('content') ?>
    <div class="container-fluid row my-5">
        <div class="container-fluid col-lg-10 bg-light shadow" style="width: 60% !important;">
            <h3>Update Form</h3>
            <?php
            if (!empty($user)) {  ?>
                <form action="<?php echo url_to('UserController::update'); ?>" method='POST' enctype='multipart/form-data'>
                    <input type="hidden" name="id" id="id" value="<?php echo $user['id']; ?>">
                    <img src="<?php echo base_url(); ?>/uploads/user_image/<?php echo $user['image'];?>" class="img-thumbnail"><br>
                    <label class="form-label">Image:</label>
                    <input class="form-control" type="file" name="image" id="image"><br>
                    <label class="form-label">First Name:</label>
                    <input class="form-control" type="text" name="fname" id="fname" value="<?php echo $user['first_name']; ?>"><br>
                    <label class="form-label">Last Name:</label>
                    <input class="form-control" type="text" name="lname" id="lname" value="<?php echo $user['last_name']; ?>"><br>
                    <label class="form-label">User Name:</label>
                    <input class="form-control" type="text" name="uname" id="uname" value="<?php echo $user['user_name']; ?>"><br>
                    <label class="form-label">Address:</label>
                    <textarea class="form-control" name="address" id="address"><?php echo $user['address']; ?></textarea><br>
                    <label class="form-label">Email:</label>
                    <input class="form-control" type="text" name="email" id="email" value="<?php echo $user['email']; ?>"><br>

                    <label class="form-label">Gender:</label>
                    <?php
                    if ($user['gender'] == 1) {
                    ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="1" checked><label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="2"><label class="form-check-label">Female</label><br>
                        </div>
                    <?php } else { ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="1"><label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="2" checked><label class="form-check-label">Female</label><br>
                        </div>
                    <?php } ?>
                    <label class="form-label">Status:</label>
                    <?php
                    if ($user['status'] == 1) {
                    ?>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="status" id="status" value="1" checked><label class="form-check-label">Active</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="status" id="status" value="0"><label class="form-check-label">Inactive</label><br>
                        </div>
                    <?php } else { ?>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="status" id="status" value="1"><label class="form-check-label">Active</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="status" id="status" value="0" checked><label class="form-check-label">Inactive</label><br>
                        </div>
                    <?php } ?>

                    <div class="col-md-12 text-center mb-3">
                        <input class="btn btn-secondary col-md-auto" type="submit" name="save" value="Update">
                    </div>
                <?php
            }
                ?>
                </form>
        </div>
    </div>
    <?php echo $this->endSection() ?>
