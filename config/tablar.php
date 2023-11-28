<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    | Here you can change the default title of your admin panel.
    |
    */

    'title' => 'MasterSisVent',
    'title_prefix' => '',
    'title_postfix' => '',
    'bottom_title' => 'Tablar',
    'current_version' => 'v4.0',


    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    */

    'logo' => '<b>Tab</b>LAR',
    'logo_img_alt' => 'Admin Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can set up an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'assets/logo1.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 400,
            'height' => 400,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look at the layout section here:
    |
    */

    'layout' => 'fluid-vertical',
    
    //boxed, combo, condensed, fluid, fluid-vertical, horizontal, navbar-overlap, navbar-sticky, rtl, vertical, vertical-right, vertical-transparent

    'layout_light_sidebar' => true,
    'layout_light_topbar' => false,
    'layout_enable_top_header' => true,

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions, you can look at the admin panel classes here:
    |
    */

    'classes_body' => '',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions, you can look at the urls section here:
    |
    */

    'use_route_url' => true,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password.request',
    'password_email_url' => 'password.email',
    'profile_url' => false,
    'setting_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Display Alert
    |--------------------------------------------------------------------------
    |
    | Display Alert Visibility.
    |
    */
    'display_alert' => false,

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    |
    */

    'menu' => [
        // Navbar items:
        [
            'text' => 'Home',
            'icon' => 'ti ti-dashboard',
            'url' => 'home'
        ],

        [
            'text' => 'Almacen',
            'url' => '#',
            'icon' => 'ti ti-package',
            'active' => ['Almacen'],
            'submenu' => [
                [
                    'text' => 'Categorias',
                    'url' => '/categories',
                    'icon' => 'ti ti-article',
                ],
                [
                    'text' => 'Presentacion',
                    'url' => '/presentations',
                    'icon' => 'ti ti-article',
                ],
                [
                    'text' => 'Marca',
                    'url' => '/brands',
                    'icon' => 'ti ti-article',
                ],
                [
                    'text' => 'Producto',
                    'url' => '#',
                    'icon' => 'ti ti-article',
                ]
                
            ],
        ],

        [
            'text' => 'Compras',
            'url' => '#',
            'icon' => 'ti ti-truck',
            'active' => ['support2'],
            'submenu' => [
                [
                    'text' => 'Proveedores',
                    'url' => '#',
                    'icon' => 'ti ti-article',
                ],
                [
                    'text' => 'Realizar Compra',
                    'url' => '#',
                    'icon' => 'ti ti-article',
                ],
                [
                    'text' => 'Consultar Compras por Fecha',
                    'url' => '#',
                    'icon' => 'ti ti-article',
                ],
                [
                    'text' => 'Consultar Compras por Mes',
                    'url' => '#',
                    'icon' => 'ti ti-article',
                ],
                [
                    'text' => 'Historial de Precios',
                    'url' => '#',
                    'icon' => 'ti ti-article',
                ]
            ],
        ],

        [
            'text' => 'Cotización',
            'url' => '#',
            'icon' => 'ti ti-clipboard',
            'active' => ['support3'],
            'submenu' => [
                [
                    'text' => 'Ticket',
                    'url' => 'support3',
                    'icon' => 'ti ti-article',
                ]
            ],
        ],
        [
            'text' => 'Ventas',
            'url' => '#',
            'icon' => 'ti ti-shopping-cart',
            'active' => ['support3'],
            'submenu' => [
                [
                    'text' => 'Ticket',
                    'url' => 'support3',
                    'icon' => 'ti ti-article',
                ]
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    |
    */

    'filters' => [
        TakiElias\Tablar\Menu\Filters\GateFilter::class,
        TakiElias\Tablar\Menu\Filters\HrefFilter::class,
        TakiElias\Tablar\Menu\Filters\SearchFilter::class,
        TakiElias\Tablar\Menu\Filters\ActiveFilter::class,
        TakiElias\Tablar\Menu\Filters\ClassesFilter::class,
        TakiElias\Tablar\Menu\Filters\LangFilter::class,
        TakiElias\Tablar\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Vite
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Vite support.
    |
    | For detailed instructions you can look the Vite here:
    | https://laravel-vite.dev
    |
    */

    'vite' => true,
];
