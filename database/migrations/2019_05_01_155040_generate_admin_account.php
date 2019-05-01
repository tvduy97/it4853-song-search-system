<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

class GenerateAdminAccount extends Migration
{
    /**
     * Email of admin
     * @var string
     */
    protected $email;

    /**
     * Username of admin
     * @var string
     */
    protected $username;

    /**
     * Password of admin
     * @var string
     */
    protected $password;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->email  = 'admin@sis.hust.edu.vn';
        $this->username = 'admin';
        $this->password = 'Admin@123456';
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $data = [
            'username' => $this->username,
            'email'    => $this->email,
            'password' => Hash::make($this->password)
        ];
        \DB::table('users')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::table('users')->where('email', $this->email)->delete();
    }
}
