<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Offer;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OfferTest extends TestCase
{   
    use RefreshDatabase;
    
    public function test_CheckIfCanReceiveAllOffersInView() {
        $this->withoutExceptionHandling();
        Offer::factory(3)->create();
        $response = $this->get('/');
        $response->assertStatus(200)
             ->assertViewIs('home');
     }
    /*  public function test_CheckIfCanReceiveOnOfferInView() {
         $this->withoutExceptionHandling();
         $offer = Offer::factory()->create([
             'title' => 'Título de ejemplo',
             'company' => 'Compañía de ejemplo',
             'status' => 'Aceptado',
         ]);
         $response = $this->get('/offers/' . $offer->id);
         $response->assertStatus(200)
             ->assertViewIs('show')
             ->assertViewHas('offer', $offer); 
     }*/
}
