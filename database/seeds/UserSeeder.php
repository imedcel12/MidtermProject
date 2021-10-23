<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [    
              'lname'=>'Moreno',
              'fname'=>'Edcel',
              'address'=>'Banlasan, Tubigon, Bohol',
              'phone'=>'0963.645.9888',
              'email'=>'morenoedcel@yahoo.com',
              'password'=>bcrypt('edcelmoreno')
          ],
          [
              'lname'=>'Chua',
              'fname'=>'Ritchie Mae',
              'address'=>'Cahayag, Tubigon, Bohol',
              'phone'=>'0997.567.4927',
              'email'=>'chuaRM@yahoo.com',
              'password'=>bcrypt('edcelmoreno')
          ],
          [
              'lname'=>'Escalante',
              'fname'=>'Josh',
              'address'=>'Pandan, Tubigon, Bohol',
              'phone'=>'0977.798.0145',
              'email'=>'rgbautista@yahoo.com',
              'password'=>bcrypt('edcelmoreno')
          ],
            
      ];
  
          foreach($data as $usr){
          \App\User::create($usr);
        }
      }
  }