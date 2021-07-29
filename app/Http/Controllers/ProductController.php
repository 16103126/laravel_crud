<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Mobile;
use App\Product;
use App\Student;
use App\Teacher;
use App\Teacher_student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function practice()
    {

        // Insert data in database using eloquent 

        // $products = new Product();
        // $products->product_name = 'VIVO Y11';
        // $products->description = '4G Ram, 12mp front camera, 14mp back camera.';
        // $products->price = '13000';
        // $products->save();
        
        // Read data from database

        // $data = Product::all();
        // dd($data);

        // Update data

        // Product::where('id', '12')->update(['price' => '12500']);
        // $data = Product::all();
        // dd($data);

        // Update Data

        // Product::where('id', '15')->delete();
        // $data = Product::all();
        // dd($data);

        // Query Builder

        // Insert Query

        // DB::insert('insert into products(product_name, price, description) values(?,?,?)', [
        //     'Realme 9', '9000', 'asdjn asjdf asjldf a'
        // ]);

        // return DB::table('products')->insert([
        //     'product_name' => 'Nokia',
        //     'description' => 'adf asdfi j',
        //     'price' => '2343' 
        // ]);

        // Select Query

        // $data = DB::select('select * from products');
        // dd($data);

        // return DB::table('products')->get();
        // return DB::table('products')
        // ->where('id', '4')
        // ->get();

        // Update Query

        // DB::update('update products set price = ? where id = 16', ['8500']);
        // $data = DB::select('select * from products');
        // dd($data);

        // return DB::table('products')
        // ->where('id', '18')
        // ->update([
        //     'Product_name' => 'Sam'
        // ]);

        // Delete Query

        // DB::delete('delete from products where id = 16');
        // $data = DB::select('select * from products');
        // dd($data);

        // return DB::table('products')->where('id', '18')->delete();

        // Count Average Min Max

        // return DB::table('products')->sum('price');
        // return DB::table('products')->count();
        // return DB::table('products')->max('price');

        // Join 

        // return DB::table('employees')
        // ->join('companies', 'companies.employee_id', "=", 'employees.id')
        // ->where('employee_id', '1')
        // ->get();

        // return DB::table('employees')
        // ->join('companies', 'companies.employee_id', "=", 'employees.id')
        // ->get();


        // One to One relationship

        // $data = Mobile::find(5)->brand;
        // $data = Brand::find(5)->mobile;
        // return $data;

        // $data = Brand::find(2);
        // return $data;

        // Accessories

        //return Product::all();

        // Collection

        // $collection = collect([1,2,3,4,5,6,7,8,9]);
        // // dd($collection);
        // $data = $collection->all();
        // dd($data);

        // Average

        // $data = [
        //     ['price' => 20],
        //     ['price' => 30],
        //     ['price' => 40],
        //     ['price' => 10]
        // ];
        // return collect($data)->average('price');

        // Sum

        // $data = [
        //     ['price' => 10],
        //     ['price' => 20],
        //     ['price' => 30],
        //     ['price' => 40]
        // ];
        
        // return collect($data)->sum('price');

        // $data = [
        //     ['price' => 100, 'tax' => '10'],
        //     ['price' => 200, 'tax' => '20'],
        //     ['price' => 300, 'tax' => '30'],
        //     ['price' => 400, 'tax' => '40'],
        // ];
        // return collect($data)->average(function($value){
        //     return $value['price'] + $value['tax'];
        // });

        // $data = [
        //         ['price' => 100, 'tax' => '10', 'active' => 'true'],
        //         ['price' => 200, 'tax' => '20', 'active' => 'false'],
        //         ['price' => 300, 'tax' => '30', 'active' => 'false'],
        //         ['price' => 400, 'tax' => '40', 'active' => 'true'],
        //     ];
        //     return collect($data)->average(function($value){
        //         if(!$value['active']){
        //             return null;
        //         }
        //         return $value['price'] + $value['tax'];
        //     });


        // Combine

        // $data = ['colm1', 'colm2', 'colm3'];
        // return collect($data)->combine(['value1', 'value2', 'value3']);

        // $data = ['colm1', 'colm2', 'colm3'];
        // return collect($data)->combine([
        //     ['value1' => '10'],
        //     ['value2' => '23'],
        //     ['value3' => '235']
        // ]);

        // Count

        // $data = ['colm1', 'colm2', 'colm3'];
        // return collect($data)->count();

        // Map

        // $data = [1,2,3,4,5];
        // return collect($data)->map(function($item, $key){
        //     return $item * $key;
        // });

        // $data = collect([1,2,3,4,5]);
        // $newCollection = $data->map(function($item, $key){
        //     return $item * 10;
        // });
        // return $newCollection;

        // Max or min or median

        // $data = [
        //         ['price' => 10],
        //         ['price' => 20],
        //         ['price' => 30],
        //         ['price' => 40]
        //     ];
        //     return collect($data)->max('price');

        // $data = [
        //         ['price' => 100, 'tax' => '10'],
        //         ['price' => 200, 'tax' => '20'],
        //         ['price' => 300, 'tax' => '30'],
        //         ['price' => 400, 'tax' => '40'],
        //     ];

        //     return collect($data)->max(function($value){
        //         return $value['price'] + $value['tax'];
        //     });

        // Chunk

        // $data = [1,2,3,4,5,6,7,8];
        // $new = collect($data)->chunk('4');
        // dd($new);

        // wherein and WhereInStrict

        // $data =[
        //     ['poduct' => 'Apple', 'price' => '34'],
        //     ['poduct' => 'Ornage', 'price' => '333'],
        //     ['poduct' => 'Banana', 'price' => '340'],
        //     ['poduct' => 'Mango', 'price' => '349']
        // ];
        // //return collect($data)->whereIn('price', ['34', '340']);
        // return collect($data)->whereInStrict('price', ['34', '340']);

        // WhereNotIN

        // $data =[
        //         ['poduct' => 'Apple', 'price' => '34'],
        //         ['poduct' => 'Ornage', 'price' => '333'],
        //         ['poduct' => 'Banana', 'price' => '340'],
        //         ['poduct' => 'Mango', 'price' => '349']
        //     ];
        //     return collect($data)->whereNotIn('price', ['333', '340']);
        // return collect($data)->whereNotInStrict('price', ['34', '340']);

        // Filter

        // $data = ['1','2','3','4', null, '' ];
        // //return collect($data)->filter();

        // return collect($data)->filter(function($value, $key){
        //     //return ($value % 2) == 0;
        //     // return $key > 2;
        // });

        // Empty

        // $data = collect(['1','2','3','4', null, '' ]);
        // if($data->isNotEmpty()){
        //     return 'We have Item';
        // }
        // return collect($data)->isNotEmpty();

        // reverse 

        // $data = ['1','2','3','4'];
        // return collect($data)->reverse();

        // first

        // $data = ['1','2','3','4'];
        // return collect($data)->first(function($value){
        //     return $value>1;
        // });

        // Take

        // $data = ['1','2','3','4'];
        // return collect($data)->take('-2');


        // return Student::find(1)->teachers;

        return Product::get();

    }

}
