<?php
/**
 * Created by PhpStorm.
 * User: tania_nicola
 * Date: 6/05/14
 * Time: 13:52
 */

class CategoryTableSeeder extends Seeder {
    public function run()
    {// find the category or create it in the db
        Category::firstOrCreate(array('title'=>'PHP'));
        Category::firstOrCreate(array('title'=>'.NET'));
        Category::firstOrCreate(array('title'=>'JAVA'));
        Category::firstOrCreate(array('title'=>'UNKNOWN'));

        $category = Category::firstOrNew(array('title'=>'DELPHI'));
    }
}