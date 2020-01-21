<?php

namespace Tests\Unit;

use App\UserType;
use Tests\TestCase;

class UserTypeTest extends TestCase
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
        $type = new UserType([
            'libelle'=>'Commerçant',
            'icon'=>'/vendor/image/icon/trader.png'
        ]);
        $type->save();
        $this->assertEquals('Commerçant', $type->libelle);
    }
}
