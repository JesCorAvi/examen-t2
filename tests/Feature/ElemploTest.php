<?php

namespace Tests\Feature;

use App\Models\Elemplo;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ElemploTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test index method.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create();
        $this->actingAs($user);
    }

     public function testIndex()
    {
        $response = $this->get('/elemplos');

        $response->assertStatus(200);
        $response->assertViewIs('elemplos.index');
    }

    /**
     * Test create method.
     *
     * @return void
     */
    public function testCreate()
    {
        $response = $this->get('/elemplos/create');

        $response->assertStatus(200);
        $response->assertViewIs('elemplos.create');
    }

    /**
     * Test store method.
     *
     * @return void
     */
    public function testStore()
    {
        $response = $this->post('/elemplos', [
            'nombre' => 'Jesus',
        ]);

        $response->assertRedirect('/elemplos');

        $this->assertDatabaseHas('elemplos', [
            'nombre' => 'Jesus',
        ]);
    }

    /**
     * Test show method.
     *
     * @return void
     */

    public function testShow()
    {
/*
        $elemplo = Elemplo::factory()->create();

        $response = $this->get('/elemplos/'.$elemplo->id);

        $response->assertStatus(200);
        $response->assertViewIs('elemplos.show');
*/

    }

    /**
     * Test edit method.
     *
     * @return void
     */
    public function testEdit()
    {
        $elemplo = Elemplo::factory()->create();

        $response = $this->get('/elemplos/'.$elemplo->id.'/edit');

        $response->assertStatus(200);
        $response->assertViewIs('elemplos.edit');
    }

    /**
     * Test update method.
     *
     * @return void
     */
    public function testUpdate()
    {
        $elemplo = Elemplo::factory()->create();

        $response = $this->put('/elemplos/'.$elemplo->id, [
            'nombre' => 'jesus2',
        ]);

        $response->assertRedirect('/elemplos');

        $this->assertDatabaseHas('elemplos', [
            'id' => $elemplo->id,
            'nombre' => 'jesus2',
        ]);
    }

    /**
     * Test destroy method.
     *
     * @return void
     */
    public function testDestroy()
    {
        $elemplo = Elemplo::factory()->create();

        $response = $this->delete('/elemplos/'.$elemplo->id);

        $response->assertRedirect('/elemplos');

        $this->assertDatabaseMissing('elemplos', [
            'id' => $elemplo->id,
        ]);
    }
}
