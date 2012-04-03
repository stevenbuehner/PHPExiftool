<?php

namespace PHPExiftool\Driver\Metadata;

/**
 * Test class for MetadataBag.
 * Generated by PHPUnit on 2012-04-03 at 11:50:52.
 */
class MetadataBagTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var MetadataBag
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new MetadataBag;
    }


    /**
     * @covers PHPExiftool\Driver\Metadata\MetadataBag::filterKeysByRegExp
     */
    public function testFilterKeysByRegExp()
    {
        $this->object->set('oneKey', 'oneValue');
        $this->object->set('oneSecondKey', 'anotherValue');
        $this->object->set('thirdKey', 'thirdValue');

        $this->assertEquals(2, count($this->object->filterKeysByRegExp('/one.*/')));
    }

}
