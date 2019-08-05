<?php
namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class CreateThreadsTest extends TestCase
{
	use DatabaseMigrations;
	/** @test */
	public function guests_may_not_create_threads()
	{
		$this->withExceptionHandling();
        $this->get('/threads/create')
            ->assertRedirect('/login');

		$this->post('/threads')
             ->assertRedirect('/login');

	}
    /** @test */
    // public function an_authenticated_user_can_create_new_forum_threads()
    // {
	// 	$this->signIn();
		
	// 	$thread = make('App\Thread');
		
	// 	$response = $this->post('/threads', $thread->toArray());
		
    //     $this->get($response->headers->get('Location'))
	// 		->assertSee($thread->title)
    //     	->assertSee($thread->body);
	// }
	
	public function guests_may_not_see_create_threads_page()
	{
		$this->get('/threads/create')
			->assertRedirect('/login');
	}

	// function a_thread_requires_a_title()
    // {
    //     $this->publishThread(['title' => null])
    //         ->assertSessionHasErrors('title');
    // }
    // /** @test */
    // function a_thread_requires_a_body()
    // {
    //     $this->publishThread(['body' => null])
    //         ->assertSessionHasErrors('body');
    // }
    /** @test */
    // function a_thread_requires_a_valid_theme()
    // {
    //     factory('App\Theme', 2)->create();
    //     $this->publishThread(['theme_id' => null])
    //         ->assertSessionHasErrors('theme_id');
    //     $this->publishThread(['theme_id' => 999])
    //         ->assertSessionHasErrors('theme_id');
	// }
	
	// protected function publishThread($overrides = [])
    // {
    //     $this->withExceptionHandling()->signIn();
    //     $thread = make('App\Thread', $overrides);
    //     return $this->post('/threads', $thread->toArray());
    // }

    // function guests_cannot_delete_threads()
    // {
    //     $this->withExceptionHandling();
    //     $thread = create('App\Thread');
    //     $response = $this->delete($thread->path());
    //     $response->assertRedirect('/login');
    // }
    /** @test */
    // function a_thread_can_be_deleted()
    // {
    //     $this->signIn();
    //     $thread = create('App\Thread');
    //     $reply = create('App\Reply', ['thread_id' => $thread->id]);
    //     $response = $this->json('DELETE', $thread->path());
    //     $response->assertStatus(204);
    //     $this->assertDatabaseMissing('threads', ['id' => $thread->id]);
    //     $this->assertDatabaseMissing('replies', ['id' => $reply->id]);
    // }

}