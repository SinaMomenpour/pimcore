<?php 
/**
 * Pimcore
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.pimcore.org/license
 *
 * @category   Pimcore
 * @package    Object_Class
 * @copyright  Copyright (c) 2009-2013 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     New BSD License
 */

class Object_Class_Layout_Fieldset extends Object_Class_Layout {

    /**
     * Static type of this element
     *
     * @var string
     */
    public $fieldtype = "fieldset";


    /**
     * Width of input field labels
     * @var int
     */
    public $labelWidth = 100;


    /**
     * @param int $labelWidth
     */
    public function setLabelWidth($labelWidth)
    {
        if(!empty($labelWidth)) {
            $this->labelWidth = intval($labelWidth);
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getLabelWidth()
    {
        return $this->labelWidth;
    }
}
