<?php
/**
 * MyClass Class Doc Comment
 * php version 7.2.10
 *
 * @category Class
 * @package  MyPackage
 * @author   George Kariuki <ngugigeorge697@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.hashbangcode.com/
 */
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**
 * MyClass Class Doc Comment
 * php version 7.2.10
 *
 * @category Class
 * @package  MyPackage
 * @author   George Kariuki <ngugigeorge697@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.hashbangcode.com/
 */
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create(
            'users',
            function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->bigIncrements('id');
                $table->string('email')->unique();
                $table->string('name');
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
