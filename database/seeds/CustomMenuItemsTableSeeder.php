<?php
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class CustomMenuItemsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (file_exists(base_path('routes/web.php'))) {
            require base_path('routes/web.php');
            /*
            |--------------------------------------------------------------------------
            | Admin Menu
            |--------------------------------------------------------------------------
             */
            $menu = Menu::where('name', 'admin')->firstOrFail();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Dashboard',
                'url' => '',
                'route' => 'voyager.dashboard',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => null,
                'parent_id' => null,
                'order' => 1,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Orders',
                'url' => '/admin/orders',
                'route' => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => 'voyager-documentation',
                    'color' => null,
                    'parent_id' => null,
                    'order' => 2,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Products',
                'url' => '/admin/products',
                'route' => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => 'voyager-bag',
                    'color' => null,
                    'parent_id' => null,
                    'order' => 3,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Categories',
                'url' => '/admin/category',
                'route' => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => 'voyager-categories',
                    'color' => null,
                    'parent_id' => null,
                    'order' => 4,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Coupons',
                'url' => '/admin/coupons',
                'route' => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => 'voyager-tag',
                    'color' => null,
                    'parent_id' => null,
                    'order' => 5,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Category Products',
                'url' => '/admin/category-product',
                'route' => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => 'voyager-window-list',
                    'color' => null,
                    'parent_id' => null,
                    'order' => 6,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Roles',
                'url' => '',
                'route' => 'voyager.roles.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => null,
                'parent_id' => null,
                'order' => 7,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Users',
                'url' => '',
                'route' => 'voyager.users.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => null,
                'parent_id' => null,
                'order' => 8,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Media',
                'url' => '',
                'route' => 'voyager.media.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => null,
                'parent_id' => null,
                'order' => 9,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Posts',
                'url' => '',
                'route' => 'voyager.posts.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-news',
                'color' => null,
                'parent_id' => null,
                'order' => 10,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Pages',
                'url' => '',
                'route' => 'voyager.pages.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => null,
                'parent_id' => null,
                'order' => 11,
            ])->save();
            $toolsMenuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Tools',
                'url' => '',
            ]);
            $toolsMenuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => null,
                'parent_id' => null,
                'order' => 12,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Settings',
                'url' => '',
                'route' => 'voyager.settings.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => null,
                'parent_id' => null,
                'order' => 13,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Categories',
                'url' => '',
                'route' => 'voyager.categories.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => null,
                'parent_id' => null,
                'order' => 14,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Menu Builder',
                'url' => '',
                'route' => 'voyager.menus.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => null,
                'parent_id' => $toolsMenuItem->id,
                'order' => 1,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Database',
                'url' => '',
                'route' => 'voyager.database.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => null,
                'parent_id' => $toolsMenuItem->id,
                'order' => 2,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Compass',
                'url' => '',
                'route' => 'voyager.compass.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => null,
                'parent_id' => $toolsMenuItem->id,
                'order' => 3,
            ])->save();
            /*
            |--------------------------------------------------------------------------
            | Main Menu
            |--------------------------------------------------------------------------
             */
            $menu = Menu::where('name', 'main')->firstOrFail();

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Shop',
                'url' => '',
                'route' => 'products',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 15,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'About',
                'url' => '#',
                'route' => 'about',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 16,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Blog',
                'url' => '#',
                'route' => 'blog',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 17,
                ])->save();
            }
             /*
            |--------------------------------------------------------------------------
            | Footer Info & Policy
            |--------------------------------------------------------------------------
             */

            $menu = Menu::where('name', 'foot-infop')->firstOrFail();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Terms & Conditions',
                'url' => '#',
                'route' => '#',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 18,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Privacy Policy',
                'url' => '#',
                'route' => '#',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 19,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'FAQ',
                'url' => '#',
                'route' => '#',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 20,
                ])->save();
            }


            /*
            |--------------------------------------------------------------------------
            | Footer Shipping & Returns
            |--------------------------------------------------------------------------
             */
            $menu = Menu::where('name', 'foot-shipr')->firstOrFail();

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Tracking & Order Info',
                'url' => '',
                'route' => '#',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 21,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Return Policy',
                'url' => '',
                'route' => '#',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 22,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Warrenty Policy',
                'url' => '',
                'route' => '#',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 23,
                ])->save();
            }

            
            /*
            |--------------------------------------------------------------------------
            | Footer Social
            |--------------------------------------------------------------------------
             */
            $menu = Menu::where('name', 'foot-social')->firstOrFail();

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'fa fa-twitter',
                'url' => '#',
                'route' => '#',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 25,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'fa fa-facebook',
                'url' => '',
                'route' => '#',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 24,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'fa fa-tumblr',
                'url' => '',
                'route' => '#',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 26,
                ])->save();
            }

             /*
            |--------------------------------------------------------------------------
            | Mobile Main Menu
            |--------------------------------------------------------------------------
             */
            $menu = Menu::where('name', 'mobile-main')->firstOrFail();

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Shop',
                'url' => '',
                'route' => '/products',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 15,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'About',
                'url' => '#',
                'route' => '/about',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 16,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Blog',
                'url' => '#',
                'route' => '/blog',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 17,
                ])->save();
            }
        }
    }
}