<?php
/**
* @package   com_zoo
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<div class="uk-grid">
	<div class="uk-width-1-1">

		<div class="uk-panel uk-panel-box">
			<ul class="uk-grid">
			<?php

				// init vars
				$columns = $this->params->get('template.items_cols', 2);
				reset($this->items);

				// render rows
				while ((list($key, $item) = each($this->items))) {
					echo '<li class="uk-width-medium-1-'.$columns.'">'.$this->partial('item', compact('item')).'</li>';
				}
				if (!empty($this->items)) {
				}

			?>

		</div>

	</div>
</div>

<?php echo $this->partial('pagination'); ?>