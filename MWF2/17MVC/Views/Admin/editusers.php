<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Dashboard</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admindashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="allusers">Users</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Edit User
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <?php

                // echo "<pre>";
                // print_r($UserDataByIdRes);
                // echo "</pre>";

                ?>

                <form method="post">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" value="<?php echo $UserDataByIdRes['Data'][0]->username; ?>" class="form-control" name="username" id="username">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="submit" value="Update" class="btn btn-primary" name="btn-update" id="btn-update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>