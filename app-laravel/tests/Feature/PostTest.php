<?php

namespace Tests\Feature;

use App\BlogPost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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

    public function testBlogExist() {

        // Arrange
        $post = new BlogPost();
        $post->title = 'New Title';
        $post->content = 'Content of the blog post';
        $post->save();

        // Act
        $response = $this->get('/posts');

        // Assert

        $response->assertSeeText('');

        $this->assertDatabaseHas('blog_posts', [
            'title' => 'New Title'
        ]);
    }

    public function testStorePost() {

        $params = [
            'title' => 'New Title',
            'content' => 'Content of the blog post'
        ];

        $this->get('/posts', $params)
            ->assertStatus(200)
            ->assertSessionHas('status');

        $this->assertEquals(session('status'), 'Blog post was created!');

    }

    public function testStoreError() {
        $params = [
            'title' => 'x',
            'content' => 'x'
        ];

        $this->get('/posts', $params)
            ->assertStatus(302)
            ->assertSessionHas('errors');

        $messages = session('erros')->getMessages();

        $this->assertEquals($messages['title'][0], 'This title should be at least 5');
        $this->assertEquals($messages['content'][0], 'This content should be at least 20');

    }
}
