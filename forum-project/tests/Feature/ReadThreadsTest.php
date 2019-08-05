<?php
namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class ThreadsTest extends TestCase
{
        use DatabaseMigrations;
        
    public function setUp():void
    {
        parent::setUp();
        $this->thread = factory('App\Thread')->create();
    }
    /** @test */
    public function a_user_can_view_all_threads()
    {
        $response = $this->get('/threads')
            ->assertSee($this->thread->title);
    }
    /** @test */
    public function a_user_can_read_a_single_thread()
    {
        $response = $this->get($this->thread->path())
            ->assertSee($this->thread->title);
    }
    /** @test */
    public function a_user_can_read_replies_that_are_associated_with_a_thread()
    {
        $reply = factory('App\Reply')
            ->create(['thread_id' => $this->thread->id]);
        $this->get($this->thread->path())
            ->assertSee($reply->body);
    }
    function a_user_can_filter_threads_according_to_a_theme()
    {
        $theme = create('App\Theme');
        $threadInTheme = create('App\Thread', ['theme_id' => $theme->id]);
        $threadNotInTheme = create('App\Thread');
        $this->get('/threads/' . $theme->slug)
            ->assertSee($threadInTheme->title)
            ->assertDontSee($threadNotInTheme->title);
    }

    function a_user_can_filter_threads_by_any_username()
    {
        $this->signIn(create('App\User', ['name' => 'Felipe']));
        $threadbyFelipe = create('App\Thread', ['user_id' => auth()->id()]);
        $threadNotFelipe = create('App\Thread');
        $this->get('threads?by=JohnDoe')
            ->assertSee($threadbyFelipe->title)
            ->assertDontSee($threadNotFelipe->title);
    }
}