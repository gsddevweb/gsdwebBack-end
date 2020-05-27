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
class InstructorSubject extends Model
{
    /**
     * ! creating the relationship to the subjects.
     * 
     * @return relationship
     */
    public function chapterBeongsToSubject()
    {
        return $this->belongsTo('App\Subject', 'subjectId', 'id');
    }

    /**
     * ! creating the relationship to theInstructors.
     * 
     * @return relationship
     */
    public function chapterBeongsToInstructor()
    {
        return $this->belongsTo('App\InstructorDetail', 'instructorId', 'id');
    }
}
