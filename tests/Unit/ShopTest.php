<?php

namespace Tests\Unit;

use App\Address;
use App\Category;
use App\Shop;
use App\State;
use Tests\TestCase;

class ShopTest extends TestCase
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

    public function testCreateOneShop()
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
        $state = new State([
            'libelle'=>'actif'
        ]);
        $state->save();
        $category = new Category([
            'libelle'=>'cave',
            'state_id'=>$state->id
        ]);
        $category->save();
        $shop = new Shop([
            'corporateName'=>'Le Bon Vin!',
            'description'=>'Cave créée en 2003',
            'image'=>'/vendor/image/shop/0001.png',
            'phone'=>241382467,
            'startHours'=>'08:30:00',
            'endHours'=>'19:30:00',
            'category_id'=>$category->id,
            'address_id'=>$address->id,
            'state_id'=>$state->id
        ]);
        $shop->save();
        $this->assertEquals('Le Bon Vin!', $shop->corporateName);
        $this->assertTrue($shop->category->is($category));
        $this->assertTrue($shop->address->is($address));
        $this->assertTrue($shop->state->is($state));
    }

    public function testEditShop()
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
        $state = new State([
            'libelle'=>'actif'
        ]);
        $state->save();
        $category = new Category([
            'libelle'=>'cave',
            'state_id'=>$state->id
        ]);
        $category->save();
        $shop = new Shop([
            'corporateName'=>'Le Bon Vin!',
            'description'=>'Cave créée en 2003',
            'image'=>'/vendor/image/shop/0001.png',
            'phone'=>241382467,
            'startHours'=>'08:30:00',
            'endHours'=>'19:30:00',
            'category_id'=>$category->id,
            'address_id'=>$address->id,
            'state_id'=>$state->id
        ]);
        $shop->save();
        $this->assertEquals('Le Bon Vin!', $shop->corporateName);
        $this->assertTrue($shop->category->is($category));
        $this->assertTrue($shop->address->is($address));
        $this->assertTrue($shop->state->is($state));
        $shop->edit('O\'fleurs!', 'Nouveau fleuriste', '/vendor/image/shop/0002.png', 248182766, '09:00:00', '20:00:00',
            $category->edit('fleuriste', $state->edit('actif')),
            $address->edit(38, 'rue Pierre Lise', '','Angers', 49100, 46.474438223258275, -0.5474011759536516),
            $state->edit('inactif'));
        $this->assertEquals('O\'fleurs!', $shop->corporateName);
        $this->assertEquals('fleuriste', $category->libelle);
        $this->assertEquals(49100, $address->postalCode);
        $this->assertEquals('inactif', $state->libelle);

    }
}
