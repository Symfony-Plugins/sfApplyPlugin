<?php use_helper('Validation', 'I18N') ?>
<?php if (!$sf_user->isAuthenticated()): ?>
  <?php include_partial('sfApply/login-prompt') ?>
<?php else: ?>
  <?php include_partial('sfApply/logout-prompt') ?>
<?php endif ?>
