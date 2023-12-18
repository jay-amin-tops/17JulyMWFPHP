<!-- main content start -->
<div class="main-content">

    <!-- content -->
    <div class="container-fluid content-top-gap">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="admindahboard">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users</li>
            </ol>
        </nav>
        <div class="welcome-msg pt-3 pb-4">
            <h1>Hi <span class="text-primary text-capitalize"><?php echo $_SESSION['UserData']->username;  ?></span>, Welcome back</h1>
            <p>Very detailed & featured admin.</p>
        </div>


        <!-- chatting -->
        <div class="data-tables">
            <div class="row">
                <div class="col-lg-12 chart-grid mb-4">
                    <div class="card card_border p-4">
                        <div class="card-header chart-grid__header pl-0 pt-0">
                            All Users
                        </div>
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <td>User Name</td>
                                    <td>Email</td>
                                    <td>Mobile</td>
                                    <td>Image</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <?php foreach ($allUsers['Data'] as $key => $value) { ?>
                                <tr>
                                    <td><?php echo $value->username; ?></td>
                                    <td><?php echo $value->email; ?></td>
                                    <td><?php echo $value->mobile; ?></td>
                                    <td><?php echo $value->mobile; ?></td>
                                    <td> 
                                        <!-- <i class="fa fa-pencil"></i>  -->
                                        <a href="edituser?userid=<?php echo $value->id; ?>"><i class="fa fa-edit"></i></a>  

                                        <?php 
                                        // echo $_SESSION['UserData']->id;
                                        if ($value->id !== $_SESSION['UserData']->id) {  ?>
                                        <a href="deleteuser?userid=<?php echo $value->id; ?>"><i class="fa fa-trash"></i></a>  
                                        <?php }
                                        ?>

                                        </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- //chatting -->
    </div>
    <!-- //content -->
</div>
<!-- main content end-->