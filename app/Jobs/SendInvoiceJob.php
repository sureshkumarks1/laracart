<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class SendInvoiceJob implements ShouldQueue
{
    public function __construct(public int $orderId) {}

    public function handle()
    {
        // Mail::to(...)->send(...)
        Log::info("Invoice sent for order {$this->orderId}");
    }
}

