<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('countries')->insert([
            ['name' => 'قطاع غزة'],
            ['name' => 'الضفة'],
            ['name' => 'أراضي 48'],
            ]);
        DB::table('cities')->insert([
            ['name' => 'غزة','country_id'=>1],
            
            ['name' => 'قلقيلة','country_id'=>2],
            ['name' => 'رفح','country_id'=>1],
            
            
			['name' => 'بيت لحم','country_id'=>2],
            ['name' => 'الجليل','country_id'=>3],
             ['name' => 'النصيرات','country_id'=>1],
			['name' => 'البريج','country_id'=>1],
            ['name' => 'الناصرة','country_id'=>3],
            
			  ['name' => 'خانيونس','country_id'=>1],
          
            ['name' => 'رام الله','country_id'=>2],
            ['name' => 'عسقلان','country_id'=>3],
          
            
              ['name' => 'المصدر','country_id'=>1],
            ['name' => 'الرملة','country_id'=>3],
             ['name' => 'جباليا','country_id'=>1],
            ['name' => 'دير البلح','country_id'=>1],
            
            ['name' => 'بئر السبع','country_id'=>3],
            ['name' => 'القدس','country_id'=>2],
			
			
			['name' => 'صفد','country_id'=>3],
            ['name' => 'الخليل','country_id'=>2],
			['name' => 'بيت حانون','country_id'=>1],
          
            ]);

        DB::table('hospitals')->insert([
            ['name' => 'مشفى 1', 'city_id'=>1],
            ['name' => 'مشفى 2', 'city_id'=>1],
            ['name' => 'مشفى 3', 'city_id'=>2],
            ['name' => 'مشفى 4', 'city_id'=>1],
            ['name' => 'مشفى 5', 'city_id'=>3],
            ['name' => 'مشفى 6', 'city_id'=>3],
            ['name' => 'مشفى 7', 'city_id'=>1],
            ['name' => 'مشفى 8', 'city_id'=>2],
            ['name' => 'مشفى 9', 'city_id'=>5],
            ['name' => 'مشفى 10','city_id'=>5],
            ['name' => 'مشفى 11','city_id'=>5],
            ['name' => 'مشفى 12','city_id'=>5],
            ['name' => 'مشفى 13','city_id'=>4],
            ['name' => 'مشفى 14','city_id'=>3],
            ['name' => 'مشفى 15','city_id'=>4],
            ['name' => 'مشفى 16','city_id'=>3],
            ['name' => 'مشفى 17','city_id'=>2],
            ['name' => 'مشفى 18', 'city_id'=>1],
            ['name' => 'مشفى 19', 'city_id'=>1],
			
			 ['name' => 'مشفى 1', 'city_id'=>6],
            ['name' => 'مشفى 2', 'city_id'=>6],
            ['name' => 'مشفى 3', 'city_id'=>9],
            ['name' => 'مشفى 4', 'city_id'=>6],
            ['name' => 'مشفى 5', 'city_id'=>12],
            ['name' => 'مشفى 6', 'city_id'=>12],
            ['name' => 'مشفى 7', 'city_id'=>6],
            ['name' => 'مشفى 8', 'city_id'=>9],
            ['name' => 'مشفى 9', 'city_id'=>18],
            ['name' => 'مشفى 10','city_id'=>18],
            ['name' => 'مشفى 11','city_id'=>18],
            ['name' => 'مشفى 12','city_id'=>18],
            ['name' => 'مشفى 13','city_id'=>15],
            ['name' => 'مشفى 14','city_id'=>12],
            ['name' => 'مشفى 15','city_id'=>15],
            ['name' => 'مشفى 16','city_id'=>12],
            ['name' => 'مشفى 17','city_id'=>9],
            ['name' => 'مشفى 18', 'city_id'=>6],
            ['name' => 'مشفى 19', 'city_id'=>6],
			
			
			 ['name' => 'مشفى 1', 'city_id'=>7],
            ['name' => 'مشفى 2', 'city_id'=>7],
            ['name' => 'مشفى 3', 'city_id'=>10],
            ['name' => 'مشفى 4', 'city_id'=>7],
            ['name' => 'مشفى 5', 'city_id'=>13],
            ['name' => 'مشفى 6', 'city_id'=>13],
            ['name' => 'مشفى 7', 'city_id'=>7],
            ['name' => 'مشفى 8', 'city_id'=>10],
            ['name' => 'مشفى 9', 'city_id'=>19],
            ['name' => 'مشفى 10','city_id'=>19],
            ['name' => 'مشفى 11','city_id'=>19],
            ['name' => 'مشفى 12','city_id'=>19],
            ['name' => 'مشفى 13','city_id'=>16],
            ['name' => 'مشفى 14','city_id'=>13],
            ['name' => 'مشفى 15','city_id'=>16],
            ['name' => 'مشفى 16','city_id'=>13],
            ['name' => 'مشفى 17','city_id'=>10],
            ['name' => 'مشفى 18', 'city_id'=>7],
            ['name' => 'مشفى 19', 'city_id'=>7],
			
			
			 ['name' => 'مشفى 1', 'city_id'=>8],
            ['name' => 'مشفى 2', 'city_id'=>8],
            ['name' => 'مشفى 3', 'city_id'=>11],
            ['name' => 'مشفى 4', 'city_id'=>8],
            ['name' => 'مشفى 5', 'city_id'=>14],
            ['name' => 'مشفى 6', 'city_id'=>14],
            ['name' => 'مشفى 7', 'city_id'=>8],
            ['name' => 'مشفى 8', 'city_id'=>11],
            ['name' => 'مشفى 9', 'city_id'=>20],
            ['name' => 'مشفى 10','city_id'=>20],
            ['name' => 'مشفى 11','city_id'=>20],
            ['name' => 'مشفى 12','city_id'=>20],
            ['name' => 'مشفى 13','city_id'=>17],
            ['name' => 'مشفى 14','city_id'=>14],
            ['name' => 'مشفى 15','city_id'=>17],
            ['name' => 'مشفى 16','city_id'=>14],
            ['name' => 'مشفى 17','city_id'=>11],
            ['name' => 'مشفى 18', 'city_id'=>8],
            ['name' => 'مشفى 19', 'city_id'=>8],
        ]);
    }
}
