<?php
$attributes = array('id' => 'register_form');
?>
<div class="container-fluid">
    <h2>REGISTER</h2>
    <?php echo form_open('Auth/AuthController/register', $attributes) ?>

    <div class="form-group">
        <?php echo form_label('Name'); ?>
        <?php
        $data = array(
            'class' => 'form-control', 'name' => 'name', 'placeholder' => 'Enter Name',
        )
        ?>
        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Username'); ?>
        <?php
        $data = array(
            'class' => 'form-control', 'name' => 'username', 'placeholder' => 'Enter Username',
        )
        ?>
        <?php echo form_input($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Role'); ?>
        <?php
        $options = array(
            'admin' => 'Admin' ,
            'member' => 'Member'
        );
        $extra = array(
            'class' => 'form-control',
        );
        ?>
        <?php echo form_dropdown('role', $options, 'admin', $extra);?>
    </div>

    <div class="form-group">
        <?php echo form_label('Password'); ?>
        <?php
        $data = array(
            'class' => 'form-control', 'name' => 'password', 'placeholder' => 'Enter Password',
        )
        ?>
        <?php echo form_password($data); ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Confirm Password'); ?>
        <?php
        $data = array(
            'class' => 'form-control', 'name' => 'confirmPassword', 'placeholder' => 'Enter Password',
        )
        ?>
        <?php echo form_password($data); ?>
    </div>
    <?php echo form_close(); ?>
</div>