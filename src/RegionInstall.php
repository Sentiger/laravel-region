<?php

namespace Yiche\Region;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RegionInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'yiche:region-install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '地区数据库安装';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $sql = dirname(__DIR__) . '/database/sql/region.sql';
        //
        $model     = new \Yiche\Region\Models\Region();
        $tableName = $model->getTable();
        if (Schema::hasTable($tableName)) {
            dd("{$tableName}表已经存在");
        }
        DB::unprepared(file_get_contents($sql));
    }
}
