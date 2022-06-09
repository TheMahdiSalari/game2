<?php

namespace App\Listeners;

use App\Events\FileCreatedEvent;
use App\Jobs\CreateThumbnail;
use App\Jobs\SendReminderEmail;
use GuzzleHttp\Promise\Create;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class FileCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        Log::info("file created listener constructor");
    }

    /**
     * Handle the event.
     *
     * @param FileCreatedEvent $event
     * @return void
     */
    public function handle(FileCreatedEvent $event)
    {
        if ($event->broadcastOn() == "private-channel-file-created") {
            CreateThumbnail::dispatch($event->model);
        }
    }
}
