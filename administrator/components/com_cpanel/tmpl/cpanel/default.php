<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_cpanel
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\Registry\Registry;

$user = JFactory::getUser();
?>

<div class="row">
	<?php $iconmodules = JModuleHelper::getModules('icon');
	if ($iconmodules) : ?>
		<div class="col-md-12">
			<?php
			// Display the submenu position modules
			foreach ($iconmodules as $iconmodule)
			{
				echo JModuleHelper::renderModule($iconmodule);
			}
			?>
		</div>
	<?php endif; ?>
</div>
<div class="row">
	<?php
	$cols = 0;
	foreach ($this->modules as $module)
	{
	    // hack to fix loading page with new factory in com_content
	    if ($module->id == '3' || $module->id == '4')
        {
            continue;
        }
		echo JModuleHelper::renderModule($module, array('style' => 'well'));
	}
	?>
</div>
