<?php

namespace Tests\Unit;

use App\State;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StateTest extends TestCase
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

    public function testCreateOneState()
    {
        $state = new State([
            'libelle'=>'actif'
        ]);
        $state->save();
        $this->assertEquals('actif', $state->libelle);
    }
}
