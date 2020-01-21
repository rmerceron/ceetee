<?php

namespace Tests\Unit;

use App\Category;
use App\State;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testBasique()
    {
        $this->assertTrue(true);
    }

    public function testCreateOneCategory()
    {
        $state = new State([
            'libelle'=>'actif'
        ]);
        $state->save();
        $category = new Category([
            'libelle'=>'cave',
            'state_id'=>$state->id
        ]);
        $category->save();
        $this->assertCount(1, Category::all());
        $this->assertEquals('cave', $category->libelle);
        $this->assertTrue($category->state->is($state));
    }

    public function testEditCategory()
    {
        $state = new State([
            'libelle'=>'actif'
        ]);
        $state->save();
        $state2 = new State([
            'libelle'=>'inactif'
        ]);
        $state2->save();
        $category = new Category([
            'libelle'=>'cave',
            'state_id'=>$state->id
        ]);
        $category->save();
        $this->assertEquals('cave', $category->libelle);
        $this->assertTrue($category->state->is($state));
        $category->edit('fleuriste', $state2->id);
        $this->assertEquals('fleuriste', $category->libelle);
        $this->assertTrue($category->state->is($state));
    }
}
