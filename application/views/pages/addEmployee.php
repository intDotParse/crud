<h2><?php echo $title; ?></h2>
<?php echo form_open('employee/add',array('class'=>'form')) ?>

<div class="form-group">
    <label for="name">Name: </label>
    <?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
    <input class="form-control" type="text" name="name" />
</div>

<div class="form-group">
    <label for="address">Address: </label>
    <?php echo form_error('address', '<div class="text-danger">', '</div>'); ?>
    <input class="form-control" type="text" name="address" />
</div>

<div class="form-group">
    <label for="email">Email: </label>
    <?php echo form_error('email', '<div class="text-danger">', '</div>'); ?><br>
    <input class="form-control" type="text" name="email" />
</div>
<button class="btn btn-info btn-block" type="submit">Add Employee</button>

</form>