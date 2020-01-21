<?php

namespace Tests\Unit;

use App\Address;
use App\Category;
use App\Gender;
use App\Notification;
use App\NotificationStatus;
use App\Promotion;
use App\PromotionPerimeter;
use App\PromotionStatus;
use App\PromotionType;
use App\Shop;
use App\State;
use App\User;
use App\UserType;
use Tests\TestCase;

class NotificationTest extends TestCase
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

    public function testCreateOneNotification()
    {
        $userType = new UserType([
            'libelle'=>'Commerçant',
            'icon'=>'/vendor/image/icon/01.png'
        ]);
        $userType->save();
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
        $gender = new Gender([
            'libelle'=>'male',
            'title'=>'Mr.',
        ]);
        $gender->save();
        $user = new User([
            'firstName'=>'test',
            'lastName'=>'user',
            'email'=>'test.user@test.fr',
            'username'=>'utest',
            'password'=>bcrypt('123456'),
            'phone'=>659812631,
            'birthday'=>'1986-12-08',
            'description'=>'user test',
            'image'=>'/public/image/user/0001.png',
            'latitude'=>48.256485,
            'longitude'=>-1.056223,
            'gender_id'=>$gender->id,
            'userType_id'=>$userType->id,
            'address_id'=>$address->id,
            'state_id'=>$state->id,
        ]);
        $user->save();
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
        $nStatus = new NotificationStatus([
            'libelle'=>'envoyée'
        ]);
        $nStatus->save();
        $notif = new Notification([
            'user_id'=>$user->id,
            'promotion_id'=>$promo->id,
            'traderPoints'=>10,
            'userPoints'=>10,
            'status_id'=>$nStatus->id
        ]);
        $notif->save();
        $this->assertEquals(10, $notif->traderPoints);
        $this->assertTrue($notif->user->is($user));
        $this->assertTrue($notif->promotion->is($promo));
        $this->assertTrue($notif->status->is($nStatus));
    }

    public function testEditNotification()
    {
        $userType = new UserType([
            'libelle'=>'Commerçant',
            'icon'=>'/vendor/image/icon/01.png'
        ]);
        $userType->save();
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
        $gender = new Gender([
            'libelle'=>'male',
            'title'=>'Mr.',
        ]);
        $gender->save();
        $user = new User([
            'firstName'=>'Pierre',
            'lastName'=>'user',
            'email'=>'pierre.user@test.fr',
            'username'=>'upierre',
            'password'=>bcrypt('123456'),
            'phone'=>659812961,
            'birthday'=>'1986-12-08',
            'description'=>'user test',
            'image'=>'/public/image/user/0001.png',
            'latitude'=>48.256485,
            'longitude'=>-1.056223,
            'gender_id'=>$gender->id,
            'userType_id'=>$userType->id,
            'address_id'=>$address->id,
            'state_id'=>$state->id,
        ]);
        $user->save();
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
        $nStatus = new NotificationStatus([
            'libelle'=>'envoyée'
        ]);
        $nStatus->save();
        $notif = new Notification([
            'user_id'=>$user->id,
            'promotion_id'=>$promo->id,
            'traderPoints'=>10,
            'userPoints'=>10,
            'status_id'=>$nStatus->id
        ]);
        $notif->save();
        $this->assertEquals(10, $notif->traderPoints);
        $notif->edit(
            $user->edit('Elise', 'Forine', 'elise.forine@test.fr', 'eforine', bcrypt('password'), 630498621,
                '1996-05-03', 'Stagiaire', '/vendor/image/user/0001.png', 46.474658223258275, -0.5473811759536516,
                $gender->edit('female', 'Mme.'),
                $userType->edit('basique', '/vendor/image/icon/02.png'),
                $address->edit(38, 'rue Pierre Lise', '','Angers', 49100, 46.474438223258275, -0.5474011759536516),
                $state->edit('inactif')),
            $promo->edit('2 bouquets acheter, le 3ème offert!', 'Pour l\'achat de 2 bouquets de 5 fleurs, le troisième vous es offert!',
                '/vendor/image/promo/0002.png', '2020-01-18', '2020-01-25', '2020-01-16 15:00:00', 2, '52gfDJ54quJ',
                $shop->edit('O\'fleurs!', 'Nouveau fleuriste', '/vendor/image/shop/0002.png', 248182766, '09:00:00', '20:00:00',
                    $category->edit('fleuriste', $state->edit('actif')),
                    $address->edit(38, 'rue Pierre Lise', '','Angers', 49100, 46.474438223258275, -0.5474011759536516),
                    $state->edit('inactif')),
                $status->edit('programmée'),
                $perimeter->edit(10, 3.00),
                $type->edit('offre')),
            40, 50,
            $status->edit('validée'));
        $this->assertEquals(40, $notif->traderPoints);
        $this->assertEquals('Elise', $user->firstName);
        $this->assertEquals('2 bouquets acheter, le 3ème offert!', $promo->title);
        $this->assertEquals('validée', $status->libelle);

    }
}
