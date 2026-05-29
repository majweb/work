<?php

namespace App\Jobs;

use App\Models\Transaction;
use App\Models\User;
use App\Services\BuyHelper;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class GenerateInvoiceJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        protected Transaction $transaction,
        protected User $user
    ) {
    }

    /**
     * Execute the job.
     */
    public function handle(BuyHelper $buyHelper): void
    {
        try {
            if ($this->transaction->cart_data) {
                $buyHelper->generateInvoiceAndPdf(
                    $this->transaction->cart_data,
                    $this->transaction->price,
                    $this->transaction->foundation_id,
                    $this->user
                );
            }
        } catch (\Exception $e) {
            Log::error('Invoice generation failed in Job: ' . $e->getMessage(), [
                'transaction_id' => $this->transaction->id,
                'user_id' => $this->user->id
            ]);

            throw $e;
        }
    }
}
