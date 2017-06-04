<?php
/**
 * Test breed.list
 *
 * @package Petfinder
 * @subpackage Tests
 * @author Eric
 */
namespace SalernoLabs\Tests\Petfinder\Requests\Breed;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \SalernoLabs\Tests\Petfinder\Traits\TestHelper;

    /**
     * @param $animalType
     * @throws \SalernoLabs\Petfinder\Exceptions\Exception
     * @dataProvider dataProviderValidRequest
     */
    public function testValidRequest($animalType)
    {
        $request = new \SalernoLabs\Petfinder\Requests\Auth\GetToken($this->configuration);
        $data = $request->execute();
    }

    /**
     * @return array
     */
    public function dataProviderValidRequest()
    {
        return [
            ['barnyard'],
            ['bird'],
            ['cat'],
            ['dog'],
            ['horse'],
            ['pig'],
            ['reptile'],
            ['smallfurry']
        ];
    }
}