<?php use_helper('Validation') ?>
<?php echo form_tag('sfApply/reset', array('name' => 'sfApplyReset', 'id' => 'sfApplyReset')) ?>
<div class="apply-notice">
<p>
Thanks for confirming your email address. You may now change your
password using the form below.
</p>
</div>
<div class="apply_row">
<?php echo form_error('password') ?>
<label for="password">Desired New Password:</label>
<div class="apply_row_content">
<?php echo input_password_tag('password') ?>
</div>
</div>
<div class="apply_row">
<label for="password2">Confirm New Password:</label>
<div class="apply_row_content">
<?php echo input_password_tag('password2') ?>
</div>
</div>
<div class="apply_submit_row">
<label></label>
<?php echo submit_tag('Reset My Password') ?>, or 
<?php echo button_to('Cancel', 'sfApply/resetCancel') ?>
</div>
</form>

