<?php
use Codeception\Test\Unit;
use Tudublin\Calculator;

class NewCalculatorTest extends Unit
{
    /**
     * @dataProvider providerAddData
     */
    public function testAddWithProvider($num1, $num2, $expectedResult)
    {
        // arrange
        $calc = new Calculator();

        // act
        $result = $calc->add($num1, $num2);

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function providerAddData()
    {
        return [
            [1, 1, 2],
            [2, 2, 4],
            [5, 2, 7],
        ];
    }
}