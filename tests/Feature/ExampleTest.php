<?php

declare(strict_types=1);

test('Can visit /', function (): void {
    $this
        ->get('/')
        ->assertStatus(200);
});
