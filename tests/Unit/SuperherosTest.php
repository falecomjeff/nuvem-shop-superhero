<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SuperherosTest extends TestCase
{
    /**
     * HTTP test. Check if initial page is ok.
     *
     * @return void
     */
    public function testHttpInitialPage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testCreateSuperhero()
    {
    	$faker = \Faker\Factory::create('pt_BR');

        $data = [
	        'nickname'           => $faker->sentence,
	        'real_name'          => $faker->paragraph,
	        'origin_description' => $faker->sentence,
	        'superpowers'        => $faker->sentence,
	        'catch_phrase'       => $faker->sentence,
      	];

  		$this->post(route('superhero.store'), $data)
	        ->assertStatus(302);
    }
}
