<?php
/**
 * Hello World! Module Entry Point
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://dev.joomla.org/component/option,com_jd-wiki/Itemid,31/id,tutorials:modules/
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */ 

// no direct access
defined('_JEXEC') or die; ?>
<ul >
<?php if($params->get('id') == 'all'): ?>
	<?php foreach ($coco_bookfeed->node as $node) : ?>
	   	<li><h4><?php echo $node->title ?></h4>
        <div>
	    <?php if($params->get('cover') == 1) :?>
    		<?php echo $node->coversmall; ?>
		<?php endif; ?>	
		<?php if($params->get('cover') == 2) :?>
      		<?php echo $node->coverbig; ?>
		<?php endif; ?>	
		</div>
	    <p><small>
	    <?php echo $node->pdf.' '.$node->language.' ('.$node->count.' ' . JText::_('MOD_COCO_BOOKFEED_DOWNLOADS') . ')'; ?> 
    	</small></p>
		</li>
	<?php endforeach; ?>
<?php else: ?>	
    <?php $id = $params->get('id'); ?>
	<?php foreach ($coco_bookfeed->node as $node): ?> 
        <?php if($id == $node->id) : ?>
        	<h4><?php echo $node->title ?></h4>
        	<div>
	      	<?php if($params->get('cover') == 1) :?>
          		<?php echo $node->coversmall; ?>
		    <?php endif; ?>	
		    <?php if($params->get('cover') == 2) :?>
          		<?php echo $node->coverbig; ?>
		    <?php endif; ?>	
	  		</div>
	   		<p><small>
			<?php echo $node->pdf.' '.$node->language.' ('.$node->count.' ' . JText::_('MOD_COCO_BOOKFEED_DOWNLOADS') . ')'; ?> 
			</small></p>
	    <?php endif; ?>	
	<?php endforeach; ?>
<?php endif; ?>	
</ul>
<?php if($params->get('sponsorlink')): ?>
  <p><a href="http://cocoate.com/sponsoring" target="_blank"><?php echo JText::_('MOD_COCO_BOOKFEED_SPONSORLINK'); ?></a></p>
<?php endif; ?>