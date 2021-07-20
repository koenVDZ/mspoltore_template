<?php
/**
 * @package     Wright
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2020 Joomlashack. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

// Access template parameters
$document = JFactory::getDocument();

// Don't modify this file!
// Set your variables overrides for variables-something.less.
// These variables overrides are defined on templateDetails.xml below 'style' field
$lessCustomizationVars = array (
    '@color_six'    => $document->params->get('color_six', '#f9e663'),
    '@color_seven'  => $document->params->get('color_seven', '#189F85')
);

// Check the selected variation style to use between @sansFontFamily and @serifFontFamily
if($document->params->get('styleVariation', 'modern') == 'modern') {
    $lessCustomizationVars['@baseFontFamily']   =  '\'Lato\', sans-serif';
    $lessCustomizationVars['@altFontFamily']    =  '\'Lato\', sans-serif';
}
else
{
    $lessCustomizationVars['@baseFontFamily']   =  '\'Roboto Slab\', serif';
    $lessCustomizationVars['@altFontFamily']    =  '\'Roboto Slab\', serif';
}

// Run the compiler - 'popstyle' is the default style
require_once dirname(__FILE__) . '/../wright/build/less/compiler.php';
$build = new WrightLessCompiler;
$build->start('popstyle', $lessCustomizationVars);