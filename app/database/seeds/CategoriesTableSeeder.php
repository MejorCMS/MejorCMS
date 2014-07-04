<?php

use MejorCMS\Entities\Category;

class CategoriesTableSeeder extends \Seeder {

	public function run()
	{
		Category::create([
            'title'         =>'Noticias',
            'description'   =>'Enterate de los ultimos acontecimientos',
            'slug'          =>\Str::slug('noticias'),
            'published'     =>true,
		]);
        Category::create([
            'title'         =>'Aportes',
            'description'   =>'Encuentra los Mejor Tutoriales de MejorCMS ',
            'slug'          =>\Str::slug('Aportes'),
            'published'     =>true,
        ]);

	}

}