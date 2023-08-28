<?php

namespace Tests\Feature\Livewire\User;

use App\Livewire\User\Dashboard;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Dashboard::class)
            ->assertStatus(200);
    }
}
