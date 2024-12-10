<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Offer;
use App\Models\Progress;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProgressTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckThatIReceiveAllDataViaTheApi()
    {
        $offer = Offer::factory(10)->create();
        $progress = Progress::factory(5)->create();
        $response = $this->get(route('apiHomeProgresses'));

        $response->assertStatus(200)
            ->assertJsonCount(5);
    }

    public function test_CheckIfCanDeleteProgressWithApi() {
        $offer = Offer::factory(1)->create();
        $progress = Progress::factory(2)->create();

        $response = $this->delete(route('apiDestroyProgress', 1));
        $this->assertDatabaseCount('progress', 1);

        $response = $this->get(route('apiHomeProgresses'));
        $response->assertStatus(200)
            ->assertJsonCount(1);
    }
    
    public function test_CheckIfCanReceiveOneProgressInJsonFile() {
        $offer = Offer::factory()->create();
        $progress = $this->post(route('apiStoreProgress', $offer->id),[
            'comentary' => ['Esto es un ejemplo'],
        ]);
        
        $data = ['comentary' => 'Esto es un ejemplo'];

        $response = $this->get(route('apiShowProgress', 1));
        $response->assertStatus(200)
            ->assertJsonFragment($data);
    }
            
    public function test_CheckThatICreateDataInTheApi()
    {
        $offer = Offer::factory()->create();
        $response = $this->post(route('apiStoreProgress', $offer->id),[
            'comentary' => ['Esto es un ejemplo'],
        ]);

        $data = ['comentary' => 'Esto es un ejemplo'];

        $response = $this->get(route('apiHomeProgresses'));
        $response->assertStatus(200)
            ->assertJsonFragment($data);
    }

    public function test_CheckIfCanUpdateProgressWithApi() {
        $offer = Offer::factory()->create();
        
        $progress = $this->post(route('apiStoreProgress', $offer->id), [
            'comentary' => ['Esto es un ejemplo'],
        ]);
        $data = ['comentary' => 'Esto es un ejemplo'];

        $response = $this->get(route('apiHomeProgresses'));
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment($data);

        $response = $this->put(route('apiUpdateProgress', 1), [
            'comentary' => 'Esto es un ejemplo modificado',
            'offer_id' => $offer->id,
        ]);
        $data = ['comentary' => 'Esto es un ejemplo modificado'];

        $response = $this->get(route('apiHomeProgresses'));
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment($data);
    }
}
