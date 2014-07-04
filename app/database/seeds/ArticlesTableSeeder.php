<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;
use MejorCMS\Entities\Article;


class ArticlesTableSeeder extends \Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
            $titleFaker=$faker->text(50);
			Article::create([
                'title'         =>$titleFaker,
                'content'       =>$faker->text(300),
                'category_id'   =>$faker->randomElement([1,2]),
                'published'     =>true,
                'outstanding'   =>$faker->randomElement([true,false]),
                'user_id'       =>1,
                'slug'          =>\Str::slug($titleFaker)
			]);
		}
	}

}