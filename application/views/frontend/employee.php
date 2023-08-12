
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">

        <?php if($this->session->flashdata('status')): ?>
        <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
            </svg>

            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <strong><?php echo $this->session->flashdata('status'); ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>
        
            <div class="card">
                <div class="card-header">
                    <h5>
                        How to insert data into database
                        <a href="<?php echo base_url('employee/add'); ?>" class="btn btn-primary float-end">Add Employee</a>
                    </h5>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $sl = 0;
                            foreach($employees as $employee): $sl++; ?>
                            <tr>
                                <th scope="row"><?php echo $sl; ?></th>
                                <td><?php echo $employee->fname; ?></td>
                                <td><?php echo $employee->lname; ?></td>
                                <td><?php echo $employee->phone; ?></td>
                                <td><?php echo $employee->email; ?></td>
                                <td>
                                    <a href="<?php echo base_url('employee/edit/'.$employee->id) ?>" class="btn btn-success btn-sm">Edit</a>
                                    <a href="<?php echo base_url('employee/delete/'.$employee->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure!')">Delete</a>
                                </td>
                            </tr>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    


