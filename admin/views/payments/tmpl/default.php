<?php
defined('_JEXEC') or die;
JHtml::_('bootstrap.tooltip');
?>
<form action="<?php echo JRoute::_('index.php?option=com_payment'); ?>" method="post" name="adminForm" id="adminForm">
    <table class="table table-striped">
        <thead><?php echo $this->loadTemplate('head');?></thead>
        <tbody><?php echo $this->loadTemplate('body');?></tbody>
        <tfoot><?php echo $this->loadTemplate('foot');?></tfoot>
    </table>
    <div>
        <input type="hidden" name="task" value="" />
        <input type="hidden" name="boxchecked" value="0" />
        <?php echo JHtml::_('form.token'); ?>
    </div>
</form>
