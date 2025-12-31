<?php

namespace App\Jobs;

use App\Models\Invoice;
use App\Models\Order;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\SerializesModels;

class ProcessOrderJob implements ShouldQueue
{
    use Dispatchable, Queueable, SerializesModels;

    public $orderId;

    public function __construct($orderId)
    {
        $this->orderId = $orderId;
    }

    public function handle()
    {
        $order = Order::findOrFail($this->orderId);

        // Generate invoice
        Invoice::create([
            'order_id' => $order->id,
            'number' => 'INV-' . time(),
            'amount' => $order->total
        ]);

        // Mark order complete
        $order->update(['status' => 'completed']);

        // Send email
        SendInvoiceJob::dispatch($order->id);
    }
}

