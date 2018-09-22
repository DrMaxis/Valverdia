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
            'name' => 'Modern U shaped Wooden Floating Wall Shelf',
            'slug' => 'U-Shaped-Wall-Shelf',
            'details' => 'Modern Wooden U Shaped Wall Shelf',
            'price' => 150000 ,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'Modern Simplistic Floating Book Shelf',
            'slug' => 'Modern-Floating-Book-Shelf',
            'details' => 'Modern Floating Book Shelf',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'Hexagon Modern Wooden Decorative Wall Shelf',
            'slug' => 'Hexagon-Shelf',
            'details' => 'Modern Hexagon Wooden Sheld',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'Floating Round Wall Shelf',
            'slug' => 'Round-Wall-Shelf',
            'details' => 'Floating round decorative Wall Shelf',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'Wooden Full Wall Shelf',
            'slug' => 'Full-Wall-Shelf',
            'details' => 'Large Wall Wooden Shelf',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'Walnut 2-Tier Wooden Book Shelf',
            'slug' => 'Wooden-Book-Shelf',
            'details' => 'Walnut 2-Tier Wooden Book Shelf',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'EntryWay Wooden Cube Shelf With 3 Hooks',
            'slug' => 'Three-Hook-Shelf',
            'details' => 'Three Hook Wooden Cube Shelf with 3 Hooks for Hanging',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'Bamboo Coffee Table',
            'slug' => 'Portable-Coffee-Table',
            'details' => 'Small Portable And Collapsible Bambo Coffee Table',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'Small Round Tea Accent Table Set',
            'slug' => 'Round-Tea-Table',
            'details' => 'Small Round Wooden Accent Tea Table Set of 2',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        Product::create([
            'name' => 'Three Legged Living Room Coffee Table',
            'slug' => 'Triagle-Coffee-Table',
            'details' => 'Trigangle Shaped Living Room Classic Coffee Table',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        Product::create([
            'name' => 'Modern Round Classic Wooden Coffee Table',
            'slug' => 'Modern-Round-Coffee-Table',
            'details' => 'Modern Round Wooden Coffee Table',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        Product::create([
            'name' => 'Modern Wooden Organizer with Accent',
            'slug' => 'Wooden-Organizer',
            'details' => 'Modern Wood Organizer with White Accent',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        Product::create([
            'name' => 'Modern Wood Storage Cabinet',
            'slug' => 'Wooden-Storage-Cabinet',
            'details' => 'Modern High-Quality Wood Storage Cabinet',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        Product::create([
            'name' => 'Modern Wooden TV stand & Chest',
            'slug' => 'Wooden-Tv-Stand',
            'details' => 'Moden Wooden TV Stand with Chest for Living and Bedroom',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
        Product::create([
            'name' => 'Enviromental Modern Living Room Tea Table',
            'slug' => 'Enviromental-Tea-Table',
            'details' => 'Modern Enviromental Wooden Tea Table with White Accent',
            'price' => 149999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
    
    }
}
