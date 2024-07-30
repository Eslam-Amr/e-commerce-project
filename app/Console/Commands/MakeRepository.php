<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeRepository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-repository';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}

// namespace App\Console\Commands;

// use Illuminate\Console\Command;
// use Illuminate\Support\Facades\File;

// class MakeRepository extends Command
// {
//     protected $signature = 'make:repository {name}';
//     protected $description = 'Create a new repository class';

//     public function __construct()
//     {
//         parent::__construct();
//     }

//     public function handle()
//     {
//         $name = $this->argument('name');
//         $repositoryPath = app_path('Repositories');
//         $repositoryClass = $name . 'Repository';

//         // Create the repositories directory if it doesn't exist
//         if (!File::exists($repositoryPath)) {
//             File::makeDirectory($repositoryPath, 0755, true);
//         }

//         $stub = file_get_contents(__DIR__ . '/stubs/repository.stub');
//         $stub = str_replace('{{class}}', $repositoryClass, $stub);

//         File::put($repositoryPath . '/' . $repositoryClass . '.php', $stub);

//         $this->info('Repository created successfully.');
//     }
// }
