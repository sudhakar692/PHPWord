<?php
/**
 * This file is part of PHPWord - A pure PHP library for reading and writing
 * word processing documents.
 *
 * PHPWord is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPWord/contributors.
 *
 * @link        https://github.com/PHPOffice/PHPWord
 * @copyright   2010-2016 PHPWord contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

namespace PhpOffice\PhpWord\SimpleType;

use PhpOffice\PhpWord\SimpleType\FootnoteProperties;

/**
 * Test class for PhpOffice\PhpWord\SimpleType\FootnoteProperties
 *
 * @coversDefaultClass \PhpOffice\PhpWord\SimpleType\FootnoteProperties
 * @runTestsInSeparateProcesses
 */
class FootnotePropertiesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test setting style with normal value
     */
    public function testSetGetNormal()
    {
        $footnoteProp = new FootnoteProperties();
        $footnoteProp->setPos(FootnoteProperties::POSITION_DOC_END);
        $footnoteProp->setNumFmt(FootnoteProperties::NUMBER_FORMAT_LOWER_ROMAN);
        $footnoteProp->setNumStart(2);
        $footnoteProp->setNumRestart(FootnoteProperties::RESTART_NUMBER_EACH_PAGE);

        $this->assertEquals(FootnoteProperties::POSITION_DOC_END, $footnoteProp->getPos());
        $this->assertEquals(FootnoteProperties::NUMBER_FORMAT_LOWER_ROMAN, $footnoteProp->getNumFmt());
        $this->assertEquals(2, $footnoteProp->getNumStart());
        $this->assertEquals(FootnoteProperties::RESTART_NUMBER_EACH_PAGE, $footnoteProp->getNumRestart());
    }

    /**
     * Test throws exception if wrong position given
     * 
     * @expectedException \InvalidArgumentException
     */
    public function testWrongPos()
    {
        $footnoteProp= new FootnoteProperties();
        $footnoteProp->setPos(FootnoteProperties::NUMBER_FORMAT_LOWER_ROMAN);
    }

    /**
     * Test throws exception if wrong number format given
     * 
     * @expectedException \InvalidArgumentException
     */
    public function testWrongNumFmt()
    {
        $footnoteProp= new FootnoteProperties();
        $footnoteProp->setNumFmt(FootnoteProperties::POSITION_DOC_END);
    }

    /**
     * Test throws exception if wrong number restart given
     * 
     * @expectedException \InvalidArgumentException
     */
    public function testWrongNumRestart()
    {
        $footnoteProp= new FootnoteProperties();
        $footnoteProp->setNumRestart(FootnoteProperties::NUMBER_FORMAT_LOWER_ROMAN);
    }
}
