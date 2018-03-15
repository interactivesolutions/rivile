<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands;

use Illuminate\Support\Facades\Storage;

/**
 * Class GetPdfInvoice
 * @package InteractiveSolutions\Rivile\Console\Commands
 */
class GetPdfInvoice extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:get-pdf-invoice {kodas_po : operation kode} {mod : dokument type RO - sell, PO - buy}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'PDF_INVOICE - get pdf invoice';

    /**
     * Initializing data
     */
    protected function init()
    {
        $this->filters = $this->argument('kodas_po');
        $this->mod = $this->argument('mod');
        $this->action = 'PDF_INVOICE';
        $this->xmlRootName = 'document';
        $this->actionMethod = self::ACTION_METHOD_GET;
    }

    /**
     * @param array $response
     */
    protected function handleResponse(array $response)
    {
        $file = 'invoice/' . $this->argument('kodas_po') . '.pdf';
        Storage::put($file, base64_decode(array_get($response, 'document')));

        $this->info('Invoice ' . $this->argument('kodas_po') . ' saved.');
    }
}
