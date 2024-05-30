<?php

use App\Models\Post;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can store a name', function () {
    // Arrange: Prepare data
    $data = [
        'name' => 'Test Title',
    ];

    // Act: Store the data
    $post = Product::create($data);

    // Assert: Verify the data was stored
    expect($post)->toBeInstanceOf(Product::class);
    expect($post->name)->toBe($data['name']);
});

