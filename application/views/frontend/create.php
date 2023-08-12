<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h5>
                        Insert employee data into database
                        <a href="<?php echo base_url('employee'); ?>" class="btn btn-danger float-end">Back</a>
                    </h5>
                </div>
                
                <div class="card-body">
                    <form action="<?php echo base_url('employee/store') ?>" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">First Name</label>
                            <input type="text" name="first_name" id="" class="form-control">
                            <small class="text-danger"><?php echo form_error('first_name'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Last Name</label>
                            <input type="text" name="last_name" id="" class="form-control">
                            <small class="text-danger"><?php echo form_error('last_name'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Phone Number</label>
                            <input type="text" name="phone" id="" class="form-control">
                            <small class="text-danger"><?php echo form_error('phone'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" id="" class="form-control">
                            <small class="text-danger"><?php echo form_error('email'); ?></small>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>