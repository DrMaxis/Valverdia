<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Red Colored LED Tube ',
            'slug' => 'red-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 150000 ,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'products\November2018\1EsEUX12fvkUSJ7nl8mV.png',
            'images' => '["products\/November2018\/ish0pBIsR6iJlFmoOoEF.jpg","products\/November2018\/VrFi5e50c6cnFOug0fou.jpg"]'
        ])->categories()->attach(1);
         Product::create([
            'name' => 'Blue Colored LED Tube ',
            'slug' => 'blue-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'storage/products\November2018\rKqprRzF5m8zcOqu2Om2.png',
            'images' => '["products\/November2018\/D6mi9hCP2VKkLHybZRAQ.jpg","products\/November2018\/UeEwny9E4ptipYV1hQx0.jpg"]'
        ])->categories()->attach(1);
         Product::create([
            'name' => 'Green Colored LED Tube ',
            'slug' => 'green-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'products\November2018\0CQ7p75lEZ59jF608I4l.png',
            'images' => '["products\/November2018\/zAetKZ2oIjUkJwqAoUX3.jpg","products\/November2018\/qd2iwB4C8C9qXhxszMFv.jpg"]'
        ])->categories()->attach(1);
       
        Product::create([
            'name' => 'RGB Color Changing FLEX LED',
            'slug' => 'rgb-flex-led',
            'details' => 'High Quality and Efficient Color Changing FLEX LED with Adhesive',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'products\November2018\3uTeoHt0w4sQ0P8fdmg9.png',
            'images' => '["products\/November2018\/oe475cKCXItl1KYcPSyN.jpg","products\/November2018\/bxqxZUmbwi0tI5eLEaa1.jpg"]'
        ])->categories()->attach(2);

        Product::create([
            'name' => 'Colored LED Tube bundle (2x)',
            'slug' => 'two-colored-led-tubes',
            'details' => 'A set of two Customizeable Colored LED Tubes',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'products\November2018\8QWgdJxT48uPAbRfhcCg.png',
            'images' => '["products\/November2018\/Y6ibWZ9xfuva894egA6b.jpg","products\/November2018\/cXc81AtaeqQALTi3B0nX.jpg"]'
        ])->categories()->attach(1);
        Product::create([
            'name' => 'Colored LED Tube bundle (3x)',
            'slug' => 'three-colored-led-tubes',
            'details' => 'A set of three Customizeable Colored LED Tubes',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            'image' => 'products\November2018\9TzYiYL0qychaf0KyHEe.png',
            'images' => '["products\/November2018\/hATI7K2pSYRTq5SSnD7p.jpg","products\/November2018\/pfTOAMV7V8bnNDu2uUgu.jpg"]'
        ])->categories()->attach(1);

        /**
         *  Future Products
         */

      /* Product::create([
            'name' => 'Yellow Colored LED Tube ',
            'slug' => 'yellow-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'Orange Colored LED Tube ',
            'slug' => 'orange-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'Purple Colored LED Tube ',
            'slug' => 'purple-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'Cyan Colored LED Tube ',
            'slug' => 'cyan-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'Magenta Colored LED Tube ',
            'slug' => 'magenta-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'Lime Colored LED Tube ',
            'slug' => 'lime-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        Product::create([
            'name' => 'Pink Colored LED Tube ',
            'slug' => 'pink-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        Product::create([
            'name' => 'Teal Colored LED Tube ',
            'slug' => 'teal-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        Product::create([
            'name' => 'Lavender Colored LED Tube ',
            'slug' => 'lavender-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        Product::create([
            'name' => 'Brown Colored LED Tube ',
            'slug' => 'brown-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        Product::create([
            'name' => 'Beige Colored LED Tube ',
            'slug' => 'beige-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        Product::create([
            'name' => 'Maroon Colored LED Tube ',
            'slug' => 'maroon-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        Product::create([
            'name' => 'Mint Colored LED Tube ',
            'slug' => 'mint-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        Product::create([
            'name' => 'Olive Colored LED Tube ',
            'slug' => 'olive-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        Product::create([
            'name' => 'Apricot Colored LED Tube ',
            'slug' => 'apricot-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        Product::create([
            'name' => 'Navy Colored LED Tube ',
            'slug' => 'navy-colored-led-tube',
            'details' => 'High Quality and Efficient Colored LED Tube',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]); */   
        
        
        /* Product::create([
            'name' => 'Colored LED Tube bundle (4x)',
            'slug' => 'led-tube-bundle',
            'details' => 'A set of four Customizeable Colored LED Tubes',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        Product::create([
            'name' => 'Colored LED Tube bundle (5x)',
            'slug' => 'led-tube-bundle',
            'details' => 'A set of five Customizeable Colored LED Tubes',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]); */
    
    }
}
