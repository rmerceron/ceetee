<?php

namespace Tests\Unit;

use App\Address;
use App\Category;
use App\Promotion;
use App\PromotionPerimeter;
use App\PromotionStatus;
use App\PromotionType;
use App\Shop;
use App\State;
use Tests\TestCase;

class PromotionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testCreateOnePromotion()
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
        $status = new PromotionStatus([
            'libelle'=>'en attente'
        ]);
        $status->save();
        $perimeter = new PromotionPerimeter([
            'distance'=>5,
            'price'=>2.00
        ]);
        $perimeter->save();
        $type = new PromotionType([
            'libelle'=>'info'
        ]);
        $type->save();
        $promo = new Promotion([
            'title'=>'50% sur les bordelais',
            'description'=>'50% de réduction sur les bordelais millésimes',
            'image'=>'/vendor/image/promo/0001.png',
            'startDate'=>'2020-01-16',
            'endDate'=>'2020-01-20',
            'sendingPeriod'=>'2020-01-15 18:00:00',
            'limit'=>0,
            'qrcode'=>'FGDGsf25gf',
            'shop_id'=>$shop->id,
            'status_id'=>$status->id,
            'perimeter_id'=>$perimeter->id,
            'type_id'=>$type->id
        ]);
        $promo->save();
        $this->assertEquals('50% sur les bordelais', $promo->title);
        $this->assertTrue($promo->shop->is($shop));
        $this->assertTrue($promo->status->is($status));
        $this->assertTrue($promo->perimeter->is($perimeter));
        $this->assertTrue($promo->type->is($type));
    }

    public function testEditPromotion()
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
        $status = new PromotionStatus([
            'libelle'=>'en attente'
        ]);
        $status->save();
        $perimeter = new PromotionPerimeter([
            'distance'=>5,
            'price'=>2.00
        ]);
        $perimeter->save();
        $type = new PromotionType([
            'libelle'=>'info'
        ]);
        $type->save();
        $promo = new Promotion([
            'title'=>'50% sur les bordelais',
            'description'=>'50% de réduction sur les bordelais millésimes',
            'image'=>'/vendor/image/promo/0001.png',
            'startDate'=>'2020-01-16',
            'endDate'=>'2020-01-20',
            'sendingPeriod'=>'2020-01-15 18:00:00',
            'limit'=>0,
            'qrcode'=>'FGDGsf25gf',
            'shop_id'=>$shop->id,
            'status_id'=>$status->id,
            'perimeter_id'=>$perimeter->id,
            'type_id'=>$type->id
        ]);
        $promo->save();
        $this->assertEquals('50% sur les bordelais', $promo->title);
        $this->assertTrue($promo->shop->is($shop));
        $this->assertTrue($promo->status->is($status));
        $this->assertTrue($promo->perimeter->is($perimeter));
        $this->assertTrue($promo->type->is($type));
        $promo->edit('2 bouquets acheter, le 3ème offert!', 'Pour l\'achat de 2 bouquets de 5 fleurs, le troisième vous es offert!',
            '/vendor/image/promo/0002.png', '2020-01-18', '2020-01-25', '2020-01-16 15:00:00', 2, '52gfDJ54quJ',
            $shop->edit('O\'fleurs!', 'Nouveau fleuriste', '/vendor/image/shop/0002.png', 248182766, '09:00:00', '20:00:00',
                $category->edit('fleuriste', $state->edit('actif')),
                $address->edit(38, 'rue Pierre Lise', '','Angers', 49100, 46.474438223258275, -0.5474011759536516),
                $state->edit('inactif')),
            $status->edit('programmée'),
            $perimeter->edit(10, 3.00),
            $type->edit('offre'));
        $this->assertEquals('2 bouquets acheter, le 3ème offert!', $promo->title);
        $this->assertEquals('O\'fleurs!', $shop->corporateName);
        $this->assertEquals('programmée', $status->libelle);
        $this->assertEquals(10, $perimeter->distance);
        $this->assertEquals('offre', $type->libelle);
    }
}
