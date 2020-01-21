<?php

namespace Tests\Unit;

use App\NotificationStatus;
use Tests\TestCase;

class NotificationStatusTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testBasique()
    {
        $this->assertTrue(true);
    }

    public function testCreateOneStatus()
    {
        $status = new NotificationStatus([
            'libelle'=>'envoyée'
        ]);
        $status->save();
        $this->assertEquals('envoyée', $status->libelle);
    }

    public function testEditStatus()
    {
        $status = new NotificationStatus([
            'libelle'=>'envoyée'
        ]);
        $status->save();
        $this->assertEquals('envoyée', $status->libelle);
        $status->edit('lue');
        $this->assertEquals('lue', $status->libelle);
    }
}
