<?php
/* @var $this VisitorsController */
/* @var $data Visitors */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_visitor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_visitor), array('view', 'id'=>$data->id_visitor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip_visitor')); ?>:</b>
	<?php echo CHtml::encode($data->ip_visitor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('browser_agent')); ?>:</b>
	<?php echo CHtml::encode($data->browser_agent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_visited')); ?>:</b>
	<?php echo CHtml::encode($data->date_visited); ?>
	<br />


</div>