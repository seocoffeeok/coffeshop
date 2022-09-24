<?php

namespace Domain\User\Commands;

use Domain\User\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class UserCreateCommand extends Command
{
    protected $signature = 'user:create';

    protected $description = 'Create new user command';

    public function handle(): int
    {
        $name = $this->ask('Name');
        $email = $this->ask('Email');
        $password = $this->ask('Password');

        User::query()->create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $this->info('Your login: ' . $email);
        $this->info('Your password: ' . $password);

        return 0;
    }
}
