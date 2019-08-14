<?php
namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class ThemeTest extends TestCase
{
    use DatabaseMigrations;
    
    /** @test */
    public function a_theme_has_threads()
    {
        $theme = create('App\Theme');
        $thread = create('App\Thread', ['theme_id' => $theme->id]);
        $this->assertTrue($theme->threads->contains($thread));
    }
}