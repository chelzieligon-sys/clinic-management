<?php

use App\Models\User;

test('guests are redirected to login when they visit the dashboard', function () {
    $this->get('/dashboard')
        ->assertRedirect(route('login'));
});

test('authenticated users can view the dashboard', function () {
    $this->actingAs(User::factory()->create())
        ->get('/dashboard')
        ->assertOk()
        ->assertSee('Clinic Management System')
        ->assertSee('Dashboard')
        ->assertSeeVolt('layout.navigation');
});
