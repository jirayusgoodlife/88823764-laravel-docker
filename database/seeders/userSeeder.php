<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'emp_id' => 0,
                'fname' => 'แบงค์',
                'lname' => 'นะจ้ะ',
                'email' => 'bankkamo@gmail.com',
                'password' => '0000000000',
                'gender' => 'M',
                'picture' => 'bank.jpg',
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
                'fname' => 'เจ',
                'lname' => 'อยากนอน',
                'email' => 'kamin@gmail.com',
                'password' => '1111111111',
                'gender' => 'M',
                'picture' => 'jj.jpg',
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
                'fname' => 'แบม',
                'lname' => 'จุ๊บุ',
                'email' => 'bam@gmail.com',
                'password' => '2222222222',
                'gender' => 'F',
                'picture' => 'bam.jpg',
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
                'fname' => 'ต่อ',
                'lname' => 'ภัยพิบัติ',
                'email' => 'tor@gmail.com',
                'password' => '3333333333',
                'gender' => 'M',
                'picture' => 'tor.jpg',
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
                'fname' => 'เพชร',
                'lname' => 'หลายใจ',
                'email' => 'petch@gmail.com',
                'password' => '4444444444',
                'gender' => 'M',
                'picture' => 'petch.jpg',
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
                'fname' => 'อ้อม',
                'lname' => 'สวยสุด',
                'email' => 'aom@gmail.com',
                'password' => '5555555555',
                'gender' => 'F',
                'picture' => 'aom.jpg',
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
                'fname' => 'น้ำหวาน',
                'lname' => 'สุดสวย',
                'email' => 'namwan@gmail.com',
                'password' => '6666666666',
                'gender' => 'F',
                'picture' => 'namwan.jpg',
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
                'fname' => 'กร',
                'lname' => 'ว่าที่ร้อยตรี',
                'email' => 'korn@gmail.com',
                'password' => '7777777777',
                'gender' => 'M',
                'picture' => 'korn.jpg',
                'emp_dep_id' => 3,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
                'fname' => 'กล์อฟ',
                'lname' => 'ซูเปอร์ทีมลีด',
                'email' => 'golf@gmail.com',
                'password' => '888888888',
                'gender' => 'M',
                'picture' => 'golf.jpg',
                'emp_dep_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ];

                foreach($users as $users)
            {
                DB::table('users')->insert($users);
            }
    }
}
