<?php

namespace Tests\Unit;

use App\Address;
use App\Gender;
use App\State;
use App\User;
use App\UserType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
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

    public function testCreateOneUser()
    {
        $gender = new Gender([
            'libelle'=>'male',
            'title'=>'Mr.',
        ]);
        $gender->save();
        $type = new UserType([
            'libelle'=>'Commerçant',
            'icon'=>'/vendor/image/icon/01.png'
        ]);
        $type->save();
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
        $user = new User([
            'firstName'=>'Michel',
            'lastName'=>'user',
            'email'=>'michel.user@test.fr',
            'username'=>'umichel',
            'password'=>bcrypt('123456'),
            'phone'=>623812631,
            'birthday'=>'1986-12-08',
            'description'=>'user test',
            'image'=>'/public/image/user/0001.png',
            'latitude'=>48.256485,
            'longitude'=>-1.056223,
            'gender_id'=>$gender->id,
            'userType_id'=>$type->id,
            'address_id'=>$address->id,
            'state_id'=>$state->id,
        ]);
        $user->save();
        $this->assertEquals('Michel', $user->firstName);
//        $this->assertTrue($user->userType->is($type));
//        $this->assertTrue($user->gender->is($gender));
        $this->assertTrue($user->address->is($address));
        $this->assertTrue($user->state->is($state));
    }

    public function testEditUser()
    {
        $gender = new Gender([
            'libelle'=>'male',
            'title'=>'Mr.',
        ]);
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
        $user = new User([
            'firstName'=>'Jean',
            'lastName'=>'user',
            'email'=>'jean.user@test.fr',
            'username'=>'ujean',
            'password'=>bcrypt('123456'),
            'phone'=>659292631,
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
        $this->assertEquals('Jean', $user->firstName);
        $user->edit('Elise', 'Forine', 'elise.forine@test.fr', 'eforine', bcrypt('password'), 630498621,
            '1996-05-03', 'Stagiaire', '/vendor/image/user/0001.png', 46.474658223258275, -0.5473811759536516,
            $gender->edit('female', 'Mme.'),
            $userType->edit('basique', '/vendor/image/icon/02.png'),
            $address->edit(38, 'rue Pierre Lise', '','Angers', 49100, 46.474438223258275, -0.5474011759536516),
            $state->edit('inactif'));
        $this->assertEquals('Elise', $user->firstName);
        $this->assertEquals('basique', $userType->libelle);
        $this->assertEquals(49100, $address->postalCode);
        $this->assertEquals('inactif', $state->libelle);
    }
}
