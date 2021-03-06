<?php
/**
 * pet.get test
 *
 * @package Petfinder
 * @subpackage Tests
 * @author Eric
 */
namespace SalernoLabs\Tests\Petfinder\Requests\Pet;

class GetTest extends \PHPUnit\Framework\TestCase
{
    use \SalernoLabs\Tests\Petfinder\Traits\TestHelper;

    /**
     * Test query
     *
     * @throws \SalernoLabs\Petfinder\Exceptions\Exception
     */
    public function testQuery()
    {
        $query = new \SalernoLabs\Petfinder\Requests\Pet\Get($this->configuration);

        $data = $query
            ->setId(37372309)
            ->execute();

        $this->assertInstanceOf('\SalernoLabs\Petfinder\Responses\Pet', $data);
        $this->assertNotEmpty($data);
        $this->assertEquals(37372309, $data->id);
        $this->assertNotEmpty($data->description);
    }
}