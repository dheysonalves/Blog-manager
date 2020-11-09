<?php

namespace Tests\Feature;

use App\BlogPost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }

    public function testBlogExist()
    {

        // Arrange
        $post = new BlogPost();
        $post->title = 'New Title';
        $post->content = 'Content of the blog post';
        $post->save();

        // Act
        $response = $this->get('/posts');

        // Assert

        $response->assertSeeText('No comments yet');
        $response->assertSeeText('');

        $this->assertDatabaseHas('blog_posts', [
            'title' => 'New Title',
        ]);
    }

    public function testStorePost()
    {

        $params = [
            'title' => 'New Title',
            'content' => 'Content of the blog post',
        ];

        $this->post('/posts', $params)
            ->assertStatus(302)
            ->assertSessionHas('status');

        $this->assertEquals(session('status'), 'Blog post was created!');

    }

    public function testStoreError()
    {
        $params = [
            'title' => 'x',
            'content' => 'x',
        ];

        $this->post('/posts', $params)
            ->assertStatus(302)
            ->assertSessionHas('errors');

        $messages = session('errors')->getMessages();

        $this->assertEquals($messages['title'][0], 'The title must be at least 5 characters.');
        // $this->assertEquals($messages['content'][0], 'The content should be at least 20');
    }

    public function testUpdateValid()
    {
        $post = $this->createDummyBlogPost();

        $this->assertDatabaseHas('blog_posts', $post->toArray());

        $params = [
            'title' => 'A new named title',
            'content' => 'Content was changed'
        ];

        $this->put("/posts/{$post->id}", $params)
            ->assertStatus(302)
            ->assertSessionHas('status');

        $this->assertEquals(session('status'), 'Blog post was updated!');
        $this->assertDatabaseMissing('blog_posts', $post->toArray());
        $this->assertDatabaseHas('blog_posts', [
            'title' => 'A new named title'
        ]);
    }

    private function createDummyBlogPost(): BlogPost
    {
        $post = new BlogPost();
        $post->title = 'New title';
        $post->content = 'Content of the blog post';
        $post->save();

        return $post;
    }

    public function testBlogPostWithComments() {
        $post = $this->createDummyBlogPost();
        factory('App\Comment', 4)->create([
            'blog_post_id' => $post->id
        ]);

        $response = $this->get('/posts');

        $response->assertSeeText('4 comments');
    }
}
