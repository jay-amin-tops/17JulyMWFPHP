<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Dashboard</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Library
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

                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Sr No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // echo "<pre>";
                        // print_r($AllUsersData);
                        // echo "</pre>";
                        $counter = 1;
                        foreach ($AllUsersData['Data'] as $key => $value) { 
                        //     echo "<pre>";
                        // print_r($value);
                         ?>
                            <tr>
                                <td><?php echo $counter;?></td>
                                <td><?php echo $value->username;?></td>
                                <td><?php echo $value->email;?></td>
                                <td>
                                    <?php 
                                    if ($value->role_id != 1) { ?> 
                                    <a href="edituser?userid=<?php echo $value->id;?>">Edit</a>
                                    <a href="deleteuser?userid=<?php echo $value->id;?>">Delete</a>
                                    <?php } ?>
                                
                                </td>
                            </tr>
                        <?php $counter++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>