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
class InstructorDetail extends Model
{
    /**
     * ! creating the relationship to the users table. 
     * 
     * @return relationship.
     */
    public function instructorBelongsToUser()
    {
        return $this->belongsTo('App\User', 'userId', 'id');
    }

    /**
     * ! relating to the instructorSubjectTable.
     * 
     * @return relationship
     */
    public function instructorHasManySubjects()
    {
        return $this->hasMany('App\InstructorSubject', 'instructorId', 'id');
    }

    /**
     * ! relating to learning materials.
     * 
     * @return relationship
     */
    public function instructorHasManyLaerningMaterial()
    {
        return $this->hasMany('App\LearningMaterial', 'InstructorId', 'id');
    }

    
}
