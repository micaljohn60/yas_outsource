<?php

namespace Database\Seeders;
use App\Models\Biz;
use App\Models\User;

use Illuminate\Database\Seeder;

class BizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::find(1)->first();
        for($i=0; $i<5; $i++){
            Biz::create([
                "name" => "test ".$i,
                "user_id" => $user->id,
                "status" => "onsale",
                "phone" => "09123213123",
                "register_number" => "30-239dfd",
                "country" => "Myanmar",
                "address" => "Test Address",
                "reason_sale" => "reason sale",
                "biz_detail" => "Time to sell",
                "position_of_owner" => "CEO",
                "wish_sale_price" => "1908304",
                "actual_sale_price" => "2034983",
                "start_date" => "2023-02-13",
                "end_date" => "2023-02-13",
                "share_holder" => "12",
                "language" => "en",
                "years_est" => "2012",
                "file_path" => null,
                "currency" => "en"
            ]);
        }
    }
}
