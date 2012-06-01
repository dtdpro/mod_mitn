<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<ul class="latestnews<?php echo $params->get('moduleclass_sfx'); ?>">
<?php foreach ($list as $item) :  ?>
	<li class="latestnews<?php echo $params->get('moduleclass_sfx'); ?>">
		<a href="index.php?option=com_mitn&item=<?php echo $item->mitn_id; ?>&Itemid=<?php echo $params->get('archivelinkid'); ?>" class="mitn<?php echo $params->get('moduleclass_sfx'); ?>">
			<?php echo $item->mitn_title; ?></a> - <?php echo date('Y-m-d',strtotime($item->mitn_date)); ?>
	</li>
<?php endforeach; ?>
</ul>
<?php
if ($arshow) echo '<p align="right"><a href="index.php?option=com_mitn&Itemid='.$params->get('archivelinkid').'" class="button">'.$artit.'</a>';
?>
