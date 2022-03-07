<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Muhammad Umar',
        //     'email' => 'muhammadumar@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        // User::create([
        //     'name' => 'Sitti Aminah Saleh',
        //     'email' => 'sittiaminah@gmail.com',
        //     'password' => bcrypt('09876')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(15)->create();
        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, sit nisi quae quo officiis placeat aliquam sequi natus,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, sit nisi quae quo officiis placeat aliquam sequi natus, beatae hic ipsum, culpa repellat sunt corporis minima? Quam minima, dicta voluptatem sit a eaque dolores perspiciatis reiciendis aspernatur facere pariatur eius placeat accusantium enim ipsam. Ipsam, a adipisci totam, vitae modi aperiam provident consequatur amet itaque consectetur, autem natus? Optio delectus ea a aliquid, rem fugiat sequi eveniet sint cupiditate quod. Tenetur fugiat cupiditate, quis sapiente tempora error velit ratione odio deleniti delectus illum voluptas ipsam, incidunt animi quibusdam sint porro nam ex minus officiis. A itaque autem commodi praesentium provident.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, sit nisi quae quo officiis placeat aliquam sequi natus,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, sit nisi quae quo officiis placeat aliquam sequi natus, beatae hic ipsum, culpa repellat sunt corporis minima? Quam minima, dicta voluptatem sit a eaque dolores perspiciatis reiciendis aspernatur facere pariatur eius placeat accusantium enim ipsam. Ipsam, a adipisci totam, vitae modi aperiam provident consequatur amet itaque consectetur, autem natus? Optio delectus ea a aliquid, rem fugiat sequi eveniet sint cupiditate quod. Tenetur fugiat cupiditate, quis sapiente tempora error velit ratione odio deleniti delectus illum voluptas ipsam, incidunt animi quibusdam sint porro nam ex minus officiis. A itaque autem commodi praesentium provident.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, sit nisi quae quo officiis placeat aliquam sequi natus,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, sit nisi quae quo officiis placeat aliquam sequi natus, beatae hic ipsum, culpa repellat sunt corporis minima? Quam minima, dicta voluptatem sit a eaque dolores perspiciatis reiciendis aspernatur facere pariatur eius placeat accusantium enim ipsam. Ipsam, a adipisci totam, vitae modi aperiam provident consequatur amet itaque consectetur, autem natus? Optio delectus ea a aliquid, rem fugiat sequi eveniet sint cupiditate quod. Tenetur fugiat cupiditate, quis sapiente tempora error velit ratione odio deleniti delectus illum voluptas ipsam, incidunt animi quibusdam sint porro nam ex minus officiis. A itaque autem commodi praesentium provident.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, sit nisi quae quo officiis placeat aliquam sequi natus,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, sit nisi quae quo officiis placeat aliquam sequi natus, beatae hic ipsum, culpa repellat sunt corporis minima? Quam minima, dicta voluptatem sit a eaque dolores perspiciatis reiciendis aspernatur facere pariatur eius placeat accusantium enim ipsam. Ipsam, a adipisci totam, vitae modi aperiam provident consequatur amet itaque consectetur, autem natus? Optio delectus ea a aliquid, rem fugiat sequi eveniet sint cupiditate quod. Tenetur fugiat cupiditate, quis sapiente tempora error velit ratione odio deleniti delectus illum voluptas ipsam, incidunt animi quibusdam sint porro nam ex minus officiis. A itaque autem commodi praesentium provident.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
