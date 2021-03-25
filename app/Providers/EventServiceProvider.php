<?php

namespace App\Providers;

use App\Events\DeviceConnected;
use App\Events\DeviceDisconnect;
use App\Events\InvoiceApproved;
use App\Events\InvoiceCreated;
use App\Listeners\SendInvoiceUser;
use App\Listeners\SendWelcomeWhatsApp;
use App\Listeners\SendWhatsAppAdmin;
use App\Listeners\SendWhatsAppInvoiceApproved;
use App\Listeners\SendWhatsAppInvoiceUser;
use App\Listeners\SendWhatsAppWelcomeMessageUser;
use App\Listeners\UserDeviceConnectedEmail;
use App\Listeners\UserDeviceDisconnectEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events\BcaMutationCreated;
use App\Listeners\CheckInvoice;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            SendWhatsAppAdmin::class,
            SendWelcomeWhatsApp::class
        ],

        InvoiceCreated::class => [
            SendInvoiceUser::class,
            SendWhatsAppInvoiceUser::class
        ],

        InvoiceApproved::class => [
            SendWhatsAppInvoiceApproved::class
        ],

        DeviceDisconnect::class => [
            UserDeviceDisconnectEmail::class
        ],

        DeviceConnected::class => [
            UserDeviceConnectedEmail::class,
            SendWhatsAppWelcomeMessageUser::class
        ],

        BcaMutationCreated::class => [
            CheckInvoice::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
