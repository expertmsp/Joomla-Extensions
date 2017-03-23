<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;?>
<ul class="social-icons">
    <?php if($facebook!=''){?>
        <li><a href="<?php echo $facebook; ?>" target="blank"title="facebook" ><span class="btn-facebook">facebook</span></a></li>
    <?php } if ($twitter!=''){ ?>
        <li><a href="<?php echo $twitter?>" target="blank" title="Twitter"><span class="btn-twitter">Twitter</span></a></li>
    <?php } if ($gplus!=''){ ?>
        <li><a href="<?php echo $gplus?>" target="blank" title="Google Plus"><span class="btn-google">Google Plus</span></a></li>
    <?php } if ($instagram!=''){ ?>
        <li><a href="<?php echo $instagram?>" target="blank" title="Instagram"><span class="btn-instagram">Instagram</span></a></li>
    <?php } if ($youtube!=''){ ?>
        <li><a href="<?php echo $youtube?>" target="blank" title="Youtube"><span class="btn-youtube">Youtube</span></a></li>
    <?php } if ($param_1!=''){ ?>
        <li><a href="<?php echo $param_1?>" target="blank" title="param-1" ><span class="btn-vimeo"></span></a></li>
    <?php } ?>
</ul>