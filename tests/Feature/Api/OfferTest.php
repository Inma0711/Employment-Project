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

        $response = $this->get(route('apiHome'));
        $response->assertStatus(200)
            ->assertJsonCount(10);
    }

    public function test_CheckIfCanDeleteEntryinOfferWithApi()
    {

        $offers = Offer::factory(1)->create();

        $response = $this->delete(route('apiDestroy', 1));
        $this->assertDatabaseCount('offers', 1);

        $response = $this->get(route('apiHome'));
        $response->assertJsonCount(1);
    }

    public function test_CheckIfCanCreateNewEntryInOfferCheckWithJsonFile()
    {
        $response = $this->post(route('apiStore'), [
            'title' => 'Diseñador Web',
            'company' => 'Mi Empresa',
            'offerStatus' => 'Aceptado'
        ]);

        $response = $this->get(route('apiHome'));
        $response->assertStatus(200)
            ->assertJsonCount(1);
    }

    public function test_CheckIfCanUpdateEntryInOfferWithJsonFile()
    {
        $response = $this->post(route('apiStore'), [
            'title' => 'Junior Java',
            'company' => 'La presa',
            'offerStatus' => 'Aceptado'
        ]);

        $data = ['title' => "Junior Java"];
        $response = $this->get(route('apiHome'));
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment($data);

        $response = $this->put(route('apiUpdate', 1), [
            'title' => 'Ingeniero',
            'company' => 'Empresita',
            'offerStatus' => 'Denegado'
        ]);

        $data = ['title' => "Ingeniero"];
        $response = $this->get(route('apiHome'));
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment($data);
    }

    public function test_CheckIfCanReceiveOneOfferInJsonFile() {
        $offer = $this->post(route('apiStore'),[
            'title' => 'Desarrollador Junior',
            'company' => 'Super Company',
            'offerStatus' => 'Denegado',
        ]);

        $data = ['title' => 'Desarrollador Junior'];

        $response = $this->get(route('apiShowOffer', 1));
        $response->assertStatus(200)
            ->assertJsonFragment($data);
    }
}
