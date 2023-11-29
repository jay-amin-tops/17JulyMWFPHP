<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">All Users</h5>
                            <a href="addnewuser">Add New</a>
                            <table class="table table-bordered table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Sr No</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Gender</th>
                                        <th>Profile Picture</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    
                                    // echo "<pre>";
                                    // print_r($allusers); 
                                    // echo "</pre>"; 
                                    foreach ($allusers['Data'] as $key => $value) { ?>
                                    <tr>
                                        <td><?php echo $value->id; ?></td>
                                        <td><?php echo $value->username; ?></td>
                                        <td><?php echo $value->email; ?></td>
                                        <td><?php echo $value->mobile; ?></td>
                                        <td><?php echo $value->gender; ?></td>
                                        <td> <img src="Assets/uploads/<?php echo $value->profile_pic; ?>" width="100px" alt=""></td>
                                        <td>
                                            
                                            <a href="edituser?userid=<?php echo $value->id; ?>">Edit</a>
                                            <a href="deleteuser?userid=<?php echo $value->id; ?>">Delete</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>