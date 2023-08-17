<?php

namespace App\Jobs;

use App\Models\StreamingLog;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessStreamLog implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $logData;

    public function __construct(array $logData)
    {
        $this->logData = $logData;
    }

    public function handle()
    {
        // Process and store the stream log data in the database
        StreamingLog::create([
            'episode_id' => $this->logData['episode_id'],
            'user_id' => $this->logData['user_id'],
            'ip_address' => $this->logData['ip_address'],
        ]);
    }
}
