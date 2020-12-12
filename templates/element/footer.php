<?php use Cake\Core\Configure; ?>
<footer class="main-footer">
  <?php if (isset($layout) && $layout == 'top'): ?>
  <div class="container">
  <?php endif; ?>
    <div class="pull-right hidden-xs">
      <b>Version</b> <?php echo Configure::read('Version'); ?>
    </div>
    <strong>Copyright &copy; 2020 <a href="https://effrad.com">EFFRAD ITS </a>.</strong> All rights
    reserved.
  <?php if (isset($layout) && $layout == 'top'): ?>
  </div>
  <?php endif; ?>
</footer>