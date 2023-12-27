<?php

namespace App\Console\Commands;

use App\Models\Customer;
use App\Models\Expense;
use App\Models\ExpenseCategory;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Sale;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Console\Command;

class GenerateData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate fake data for the application';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Refreshing database...');
        // clear all models
        $this->call('migrate:refresh');

        // generate first user
        $this->info('Generating first user...');
        User::factory()->create([
            'name' => 'Demo user',
            'email'=> 'demo@reports.com',
            'password' => bcrypt('password')
        ]);

        // generate 10 users
        $this->info('Generating 100 users...');
        User::factory()->count(100)->create();

        // generate vendors, customers, products, expense categories
        $this->info('Generating vendors, customers, products, expense categories...');
        Vendor::factory()->count(100)->create();
        Customer::factory()->count(100)->create();
        Product::factory()->count(100)->create();
        ExpenseCategory::factory()->count(15)->create();

        // generate expenses, purchases and sales
        $this->info('Generating expenses, purchases and sales...');
        Purchase::factory()->count(100)->create();
        Sale::factory()->count(900)->create();
        Expense::factory()->count(300)->create();

        // data generation completed
        $this->info('Data generation completed!');
    }
}
