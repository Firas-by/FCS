<?php

test('the version route returns laravel and php versions', function () {
    $response = $this->get('/version');

    $response->assertStatus(200);
    $response->assertSee('Laravel '.app()->version().' - PHP '.PHP_VERSION);
});
