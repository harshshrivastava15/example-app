<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BaiganTest extends TestCase
{
    /**
     * A basic feature test baigan.
     */
    public function testBaiganOK(): void
    {
        $response = $this->get('/veggies/baigan');

        $response->assertStatus(200);
    }

    /**
     * Feature to test all veggies
     */
    public function testVeggiesOK(): void
    {
      $response = $this->get('/veggies/bhindi');

      $response->assertStatus(200);
    }

    /**
     * Feature to test seeing aaloo gobhi
     */
    public function testVeggiesSeeAalooGobhi(): void
    {
      $response = $this->get('/veggies/aaloo');

      $response->assertSee("aaloo");

      $response = $this->get('/veggies/gobhi');

      $response->assertSee("gobhi");
    }

    /**
     * Feature to test seeing baigan, bhindi, aaloo, gobhi but reject
     * pyaas, adrak, lassan
     */
    public function testVeggiesAdrakLassan(): void
{
    $response = $this->get('/veggies/baigan');
    $this->assertStringContainsStringIgnoringCase("baigan", $response->getContent());

    $response = $this->get('/veggies/bhindi');
    $this->assertStringContainsStringIgnoringCase("bhindi", $response->getContent());

    $response = $this->get('/veggies/aaloo');
    $this->assertStringContainsStringIgnoringCase("aaloo", $response->getContent());

    $response = $this->get('/veggies/gobhi');
    $this->assertStringContainsStringIgnoringCase("gobhi", $response->getContent());

    // Reject pyaaz adrak lassan xkjbcjhbvxcj
    $response = $this->get('/veggies/pyaaz');
    $response->assertStatus(404);

    $response = $this->get('/veggies/adrak');
    $response->assertStatus(404);

    $response = $this->get('/veggies/lassan');
    $response->assertStatus(404);

    $response = $this->get('/veggies/jvhjvsdfsfvsj');
    $response->assertStatus(404);
}




    /**
     * Feature to test seeing all veggies
     */
    public function testVeggiesSeeAll(): void
    {
      $response = $this->get('/veggies');

      $response->assertStatus(200);

      $response->assertSeeInOrder(['Baigan', 'Bhindi', 'Aaloo', 'Gobhi']);

    }
}
