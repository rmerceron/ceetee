<?php

namespace Tests\Unit;

use App\PromotionType;
use Tests\TestCase;

class PromotionTypeTest extends TestCase
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

    public function testCreateOneType()
    {
        $type = new PromotionType([
            'libelle'=>'info'
        ]);
        $type->save();
        $this->assertEquals('info', $type->libelle);
    }

    public function testEditType()
    {
        $type = new PromotionType([
            'libelle'=>'info'
        ]);
        $type->save();
        $this->assertEquals('info', $type->libelle);
        $type->edit('offre');
        $this->assertEquals('offre', $type->libelle);
    }
}
