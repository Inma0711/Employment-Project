<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Offer;
use Tests\TestCase;

class OfferTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckThatReceivingSight()
    {

        $offers = Offer::factory(10)->create();

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
            ->assertJsonCount(10);
    }

    public function test_CheckIfCanDeleteEntryinOfferWithApi()
    {

        $offers = Offer::factory(2)->create();

        $response = $this->delete(route('apidestroy', 1));
        $this->assertDatabaseCount('offers', 1);

        $response = $this->get(route('apihome'));
        $response->assertJsonCount(1);
    }
}
