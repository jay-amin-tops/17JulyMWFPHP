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
                            <div class="row">
                                <div class="col-10">

                                    All Users
                                </div>
                                <div class="col-2 text-right">
                                    <a class="btn btn-sm btn-primary" href="addnewuser">Add New</a>
                                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <td>User Name</td>
                                    <td>Email</td>
                                    <td>Mobile</td>
                                    <td>Gender</td>
                                    <td>Image</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <?php foreach ($allUsers['Data'] as $key => $value) { ?>
                                <tr>
                                    <td><?php echo $value->username; ?></td>
                                    <td><?php echo $value->email; ?></td>
                                    <td><?php echo $value->mobile; ?></td>
                                    <td><?php echo $value->gender; ?></td>
                                    <td><?php echo $value->prof_pic; ?></td>
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