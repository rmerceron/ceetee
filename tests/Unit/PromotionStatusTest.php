<?php

namespace Tests\Unit;

use App\PromotionStatus;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PromotionStatusTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testBasic()
    {
        $this->assertTrue(true);
    }

    public function testCreateOneStatus()
    {
        $status = new PromotionStatus([
            'libelle'=>'en attente'
        ]);
        $status->save();
        $this->assertEquals('en attente', $status->libelle);
    }

    public function testEditStatus()
    {
        $status = new PromotionStatus([
            'libelle'=>'en attente'
        ]);
        $status->save();
        $this->assertEquals('en attente', $status->libelle);
        $status->edit('envoyée');
        $this->assertEquals('envoyée', $status->libelle);
    }
}
