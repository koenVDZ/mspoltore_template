<?php
/**
 * @package     Wylia 2
 * @subpackage  Functions
 *
 * @copyright   Copyright (C) 2005 - 2020 Joomlashack. All rights reserved.
 *              All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

JLoader::import('joomla.environment.browser');

// get the bootstrap row mode ( row / row-fluid )
$gridMode = $this->params->get('bs_rowmode','row-fluid');
$containerClass = 'container';
if ($gridMode == 'row-fluid') {
    $containerClass = 'container-fluid';
}else{
    $fixedClass = ' fixed';
    $footerWrapperClass = ' container';
}

$responsivePage = $this->params->get('responsive','1');
$responsive = ' responsive';
if ($responsivePage == 0) {
    $responsive = ' no-responsive';
}

$sidebarClass= '';
if ($this->countModules('sidebar1') && $this->countModules('sidebar2')){
    $sidebarClass= ' sb1 sb2';
}elseif ($this->countModules('sidebar2')) {
        $sidebarClass = ' sb2';
}elseif ($this->countModules('sidebar1')) {
        $sidebarClass = ' sb1';
}