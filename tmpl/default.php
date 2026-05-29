<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_blockssvg
 *
 * @copyright   Copyright (C) NPEU 2026.
 * @license     MIT License; see LICENSE.md
 */

\defined('_JEXEC') or die;

?>

<?php if ($module->showtitle): ?>
<<?php echo $params->get('header_tag'); ?>><?php echo $module->title; ?></<?php echo $params->get('header_tag'); ?>>
<?php endif; ?>
<div class="blocks-container blockssvg-container">
    <p><?php echo $module->content; ?></p>
</div>