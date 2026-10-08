<?php

test('the bienvenue route returns the view with student details', function () {
    $response = $this->get('/bienvenue');

    $response->assertStatus(200);
    $response->assertViewIs('bienvenue');
    $response->assertSee('Firas ben yacoub');
});
