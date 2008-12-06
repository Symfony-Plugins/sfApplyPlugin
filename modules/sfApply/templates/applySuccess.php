<?php use_helper('Validation') ?>
<?php echo form_tag('sfApply/apply', array('name' => 'sfApplyApply', 'id' => 'sfApplyApply')) ?>
<div class="apply_row">
<label for="username">Username: </label>
<div class="apply_row_content">
<?php echo form_error('username') ?>
<?php echo input_tag('username', '', array("maxlength" => 16)) ?>
</div>
</div>
<div class="apply_row">
<label for="fullname">Full Name: </label>
<div class="apply_row_content">
<?php echo form_error('fullname') ?>
<?php echo input_tag('fullname') ?>
</div>
</div>
<div class="apply_row">
<label for="email">Email: </label>
<div class="apply_row_content">
<?php echo form_error('email') ?>
<?php echo input_tag('email') ?>
</div>
</div>
<div class="apply_row">
<label for="email2">Confirm Email: </label>
<div class="apply_row_content">
<?php echo input_tag('email2') ?>
</div>
</div>
<div class="apply_row">
<?php echo form_error('password') ?>
<label for="password">Desired Password:</label>
<div class="apply_row_content">
<?php echo input_password_tag('password') ?>
</div>
</div>
<div class="apply_row">
<label for="password2">Confirm Password:</label>
<div class="apply_row_content">
<?php echo input_password_tag('password2') ?>
</div>
</div>
<div class="apply_submit_row">
<label></label>
<?php echo submit_tag('Create My Account') ?> or 
<?php echo button_to('Cancel', '@homepage') ?>
</div>
</form>

