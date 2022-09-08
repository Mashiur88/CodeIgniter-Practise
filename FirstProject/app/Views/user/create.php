<?php echo $this->extend('layouts/app') ?>
<?php echo $this->section('content') ?>
    <div class="container-fluid row my-5">
        <div class="container-fluid col-lg-10 bg-light shadow" style="width: 60% !important;">
            <h3>Registration From</h3>
            <form action="<?php echo url_to('UserController::store'); ?>" method='POST' enctype="multipart/form-data">
                <label class="form-label">First Name:</label>
                <input class="form-control" type="text" name="fname" id="fname"><br>
                <label class="form-label">Last Name:</label>
                <input class="form-control" type="text" name="lname" id="lname"><br>
                <label class="form-label">User Name:</label>
                <input class="form-control" type="text" name="uname" id="uname"><br>
                <label class="form-label">Password:</label>
                <input class="form-control" type="password" name="password" id="password"><br>
                <label class="form-label">Email:</label>
                <input class="form-control" type="text" name="email" id="email"><br>
                <label class="form-label">Image:</label>
                <input class="form-control" type="file" name="image" id="image"><br>
                <!-- <div class="address">
                    <div id="state">
                        <label class="form-label">Division</label>
                        <select class="form-select" id="division" name="division" onchange="showDistrict(this.value)">
                            <option value='0'>Select Division</option>
                            <?php
                            // foreach ($divisions as $div) {
                            //     echo "<option value=" . $div['id'] . ">" . $div['name'] . "</option>";
                            // }
                            ?>
                        </select><br>
                    </div>
                    <div id="zilla">
                        <label class="form-label">District</label>
                        <select class="form-select" name="district" id="district" onchange="showThana(this.value)">
                            <option value='0'>Select District</option>
                        </select><br>
                    </div>
                    <div id="upazilla">
                        <label class="form-label">Thana</label>
                        <select class="form-select" name="thana" id="thana">
                            <option value='0'>Select Thana</option>
                        </select><br>
                    </div>
                </div><br> -->
                <label class="form-label">Address:</label>
                <textarea class="form-control" name="address" id="address" placeholder="Enter Text Here.."></textarea><br>
                <!--         <label>Hobby:</label>
            <input type="checkbox" name="hobby" id="hobby" value="Gardening">Gardening<br>
            <input type="checkbox" name="hobby1" id="hobby1" value="Gaming">Gaming<br>
            <input type="checkbox" name="hobby2" id="hobby2" value="Drawing">Drawing<br>  -->

                <label class="form-label">Gender:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="gender" id="gender" value="1"><label class="form-check-label">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="gender" id="gender1" value="2"><label class="form-check-label">Female</label><br>
                </div>

                <label class="form-label">Status:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="status" id="status" value="1"><label class="form-check-label">Active</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="status" id="status1" value="0"><label class="form-check-label">Inactive</label><br>
                </div>
                <div class="col-md-12 text-center mb-3">
                <input class="btn btn-secondary col-md-auto" type="submit" name="save" value="Sign Up">
                </div>

            </form>
        </div>
    </div>
    <?php echo $this->endSection() ?>