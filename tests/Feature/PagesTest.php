<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
    public function test_home_page_returns_ok(): void
    {
        $this->get('/')->assertStatus(200);
    }

    public function test_home_page_contains_expected_content(): void
    {
        $this->get('/')
            ->assertSee('learning DevOps')
            ->assertSee('Current Environment')
            ->assertSee('PHP Version');
    }

    public function test_about_page_returns_ok(): void
    {
        $this->get('/about')->assertStatus(200);
    }

    public function test_about_page_contains_expected_content(): void
    {
        $this->get('/about')
            ->assertSee('About')
            ->assertSee('Background')
            ->assertSee('Why DevOps?')
            ->assertSee('Goals');
    }

    public function test_skills_page_returns_ok(): void
    {
        $this->get('/skills')->assertStatus(200);
    }

    public function test_skills_page_contains_expected_content(): void
    {
        $this->get('/skills')
            ->assertSee('Skills')
            ->assertSee('PHP')
            ->assertSee('Laravel')
            ->assertSee('Docker')
            ->assertSee('GitHub Actions');
    }

    public function test_unknown_route_returns_404(): void
    {
        $this->get('/nonexistent')->assertStatus(404);
    }

    public function test_home_page_links_to_skills(): void
    {
        $this->get('/')->assertSee(route('skills'));
    }
}
