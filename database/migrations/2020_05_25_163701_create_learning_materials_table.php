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
class CreateLearningMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'learning_materials',
            function (Blueprint $table) {
                $table->engine = "InnoDB";
                $table->bigIncrements('id');
                $table->text('name');
                $table->text('description');
                $table->bigInteger('subjectId')->unsigned();

                // ! creating the relationhip to the subject table. 
                $table->foreign('subjectId')->references('id')->on('subjects')
                    ->onDelete('cascade');

                $table->bigInteger('typeOfLearningMaterialId')->unsigned();

                // ! creating the relationship to the type of larning materials table
                $table->foreign('typeOfLearningMaterialId')->references('id')
                    ->on('learning_material_types')
                    ->onDelete('cascade');

                $table->bigInteger('chapterId')->unsigned();

                // ! creating the relationship to the chapter table.

                $table->foreign('chapterId')->references('id')
                    ->on('chapters')->onDelete('cascade');

                $table->bigInteger('InstructorId')->unsigned();

                // ! creating the relationship to the chapter table.

                $table->foreign('InstructorId')->references('id')
                    ->on('instructor_details')->onDelete('cascade');
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
        Schema::dropIfExists('learning_materials');
    }
}
