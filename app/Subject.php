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
namespace App;

use Illuminate\Database\Eloquent\Model;
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
class Subject extends Model
{
        /** *
     *Allowing for mass assignment 
     *
     *@return void
     */
    protected $fillable = ['name','description','levelOfEducationId'];

    /**
     * ! creating the relationship to the level of education.
     * 
     * @return relationship
     */
    public function subjectBelongsToTheLevelOfEducation()
    {
        return $this->belongsTo('App\LevelOfEducation', 'levelOfEducationId', 'id');
    }

    /**
     * ! creating the relatioship to the istructors table.
     * 
     * @return relationship
     */
    public function subjectHasManyInstructors()
    {
        return $this->hasMany('App\InstructorSubject', 'subjectId', 'id');
    }
}
