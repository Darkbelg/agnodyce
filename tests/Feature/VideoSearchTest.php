<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VideoSearchTest extends TestCase
{
    /**
     * @return array[]
     */
    public function searchLocationValidation(): array
    {
        $location = "37.42307,-122.08427";
        $locationRadius = "5km";
        return [
            [
                'search?type=video&location=' . $location . '&maxResults=10',
                422,
                'locationRadius'
            ],
            [
                'search?type=video&maxResults=10&locationRadius=' . $locationRadius,
                422,
                'location'
            ],
            [
                'search?type=video&location=' . $location . '&maxResults=10&locationRadius=' . $locationRadius,
                200,
                ""
            ]
        ];
    }

    /**
     *
     */
    public function test_search()
    {
        $query = "CL +5 STAR+ Official Video";
        $response = $this->getJson('search?q=' . $query . '&maxResults=10&type=video');
        $response->assertSee('CL +5 STAR+ Official Video');
    }

    /**
     * @dataProvider searchLocationValidation
     * @param string $validateQuery
     * @param int $statusValidation
     * @param string $error
     */
    public function test_search_location(string $validateQuery, int $statusValidation, string $error)
    {
        $location = "37.42307,-122.08427";
        $locationRadius = "5km";
        $response = $this->getJson(
            $validateQuery
        );
        $response->assertStatus($statusValidation);
        if ($statusValidation != 200) {
            $response->assertJsonValidationErrors($error);
        }
    }
}
