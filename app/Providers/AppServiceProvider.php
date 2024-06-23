<?php

namespace App\Providers;

use App\Models\Core;
use App\Models\Maintenance;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */


    public function boot(): void
    {
        if (Schema::hasTable('maintenances')) {
            $maintenance = Maintenance::query()
                ->select(['is_active', 'is_discovery'])
                ->first();
//            view()->share([
//                'discovery' => $maintenance->is_discovery,
//                'maintenance' => $maintenance->is_active,
//            ]);

            if ($maintenance) {
                view()->share([
                    'discovery' => $maintenance->is_discovery,
                    'maintenance' => $maintenance->is_active,
                ]);
            } else {
                view()->share([
                    'discovery' => false,
                    'maintenance' => false,
                ]);
            }

            if (Schema::hasTable('cores')) {
                $data = Core::query()
                    ->select(
                        [
                            'about',
                            'clients',
                            'contact',
                            'footer',
                            'header',
                            'hero',
                            'newsletter',
                            'portfolio'
                        ]
                    )->first();
                if($data)
                {
                    view()->share([
                        'about_core' => $data->about,
                        'clients_core' => $data->clients,
                        'contact_core' => $data->contact,
                        'footer_core' => $data->footer,
                        'header_core' => $data->header,
                        'hero_core' => $data->hero,
                        'newsletter_core' => $data->newsletter,
                        'portfolio_core' => $data->portfolio,
                    ]);
                } else {
                    view()->share([
                        'about_core' => false,
                        'clients_core' => false,
                        'contact_core' => false,
                        'footer_core' => false,
                        'header_core' => false,
                        'hero_core' => false,
                        'newsletter_core' => false,
                        'portfolio_core' => false,
                    ]);
                }
            }
        }
    }
}
