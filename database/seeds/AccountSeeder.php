<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
              'user_id'=> 1,
              'acct_name'=> 'Moreno E. Regular Account',
              'init_invest'=> 13000,
              'start_date'=> '2020-04-20',
              'remarks'=> 'Done with normal transaction',
  
          ],
          [
            'user_id'=> 2,
            'acct_name'=> 'Chua R.M Regular Account',
            'init_invest'=> 17500,
            'start_date'=> '2020-01-22',
            'remarks'=> 'Done with normal transaction',
          ],
          [
            'user_id'=> 3,
            'acct_name'=> 'Escalante Trust Fund',
            'init_invest'=> 960500,
            'start_date'=> '2020-08-08',
            'remarks'=> 'Done with normal transaction',
          ]

        ];
  
        foreach($data as $acc){
            \App\Account::create($acc);
        }

    }
}
