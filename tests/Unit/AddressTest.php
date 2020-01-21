<?php

namespace Tests\Unit;

use App\Address;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AddressTest extends TestCase
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

    public function testCreateOneAddress()
    {
        $address = new Address([
            'number'=>16,
            'libelle'=>'rue du Plessi',
            'additionalAddress'=>'bis',
            'city'=>'Angers',
            'postalCode'=>49000,
            'latitude'=>47.474438223258275,
            'longitude'=>-0.5474051759536516
        ]);
        $address->save();
        $this->assertCount(1, Address::all());
        $this->assertEquals('Angers', $address->city);
    }

    public function testEditOneAddress()
    {
        $address = new Address([
            'number'=>16,
            'libelle'=>'rue du Plessi',
            'additionalAddress'=>'bis',
            'city'=>'Angers',
            'postalCode'=>49000,
            'latitude'=>47.474438223258275,
            'longitude'=>-0.5474051759536516
        ]);
        $address->save();
        $this->assertEquals(49000, $address->postalCode);
        $address->edit(38, 'rue Pierre Lise', '','Angers', 49100, 46.474438223258275, -0.5474011759536516);
        $this->assertEquals(49100, $address->postalCode);
    }
}
