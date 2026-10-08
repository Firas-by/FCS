<?php

test('the heure page displays the frozen time and date', function () {
    $this->travelTo('2026-10-01 14:05:00');

    $response = $this->get('/heure');

    $response
        ->assertViewIs('heure')
        ->assertSee('14:05')
        ->assertSee('01/10/2026');
});
