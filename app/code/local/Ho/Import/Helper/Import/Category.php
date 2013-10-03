<?php
/**
 * Ho_Import
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the H&O Commercial License
 * that is bundled with this package in the file LICENSE_HO.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.h-o.nl/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@h-o.com so we can send you a copy immediately.
 *
 * @category    Ho
 * @package     Ho_Import
 * @copyright   Copyright © 2012 H&O (http://www.h-o.nl/)
 * @license     H&O Commercial License (http://www.h-o.nl/license)
 * @author      Paul Hachmang – H&O <info@h-o.nl>
 *
 *
 */
class Ho_Import_Helper_Import_Category extends Mage_Core_Helper_Abstract
{
    /**
     * Generate an URL-key from multiple fields
     *
     * @param        $line
     * @param        $fields
     * @param string $glue
     * @param string $suffix
     *
     * @return string
     */
    public function getUrlKey($line, $fields, $glue = '-', $suffix = '')
    {
        $string = Mage::helper('ho_import/import')->getFieldCombine($line, $fields, $glue, $suffix);
        return Mage::getSingleton('catalog/product')->formatUrlKey($string).$suffix;
    }
}
