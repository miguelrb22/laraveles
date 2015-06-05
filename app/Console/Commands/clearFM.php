<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

class clearFM extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'laverdad';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Borrar las publicidades caducadas';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->comment(PHP_EOL.Inspiring::quote().PHP_EOL);
    }

}
