<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Offer;
use Tests\TestCase;

class OfferTest extends TestCase
{   
    use RefreshDatabase;

   public function test_CheckThatReceivingSight(){

    $offers = Offer::factory(10)->create();

    $response = $this->get(route('apiHome'));
    $response->assertStatus(200)
             ->assertJsonCount(10);
   }


}
