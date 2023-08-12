<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Update employee data into database
                        <a href="<?php echo base_url('employee'); ?>" class="btn btn-danger float-end">Back</a>
                    </h5>
                </div>
                
                <div class="card-body">
                    <form action="<?php echo base_url('employee/update/'.$employee->id) ?>" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">First Name</label>
                            <input type="text" name="first_name" id="" value="<?php echo $employee->fname ?>" class="form-control">
                            <small class="text-danger"><?php echo form_error('first_name'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Last Name</label>
                            <input type="text" name="last_name" id="" value="<?php echo $employee->lname ?>" class="form-control">
                            <small class="text-danger"><?php echo form_error('last_name'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Phone Number</label>
                            <input type="text" name="phone" id="" value="<?php echo $employee->phone ?>" class="form-control">
                            <small class="text-danger"><?php echo form_error('phone'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" id="" value="<?php echo $employee->email ?>" class="form-control">
                            <small class="text-danger"><?php echo form_error('email'); ?></small>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>