<?php

namespace Tests\Unit;

use App\PromotionPerimeter;
use Tests\TestCase;

class PromotionPerimeterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testBasic()
    {
        $this->assertTrue(true);
    }

    public function testCreateOnePerimeter()
    {
        $perimeter = new PromotionPerimeter([
            'distance'=>5,
            'price'=>2.00
        ]);
        $perimeter->save();
        $this->assertEquals(5, $perimeter->distance);
    }

    public function testEditPerimeter()
    {
        $perimeter = new PromotionPerimeter([
            'distance'=>5,
            'price'=>2.00
        ]);
        $perimeter->save();
        $this->assertEquals(5, $perimeter->distance);
        $perimeter->edit(10, 3.50);
        $this->assertEquals(10, $perimeter->distance);
    }
}
