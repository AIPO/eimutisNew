<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AlbumTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_only_admin_can_upload_images()
    {
        $response = $this->get('/artworks');
       // $this->json('post', 'api/');

        $response->assertStatus(200);
    }
}
