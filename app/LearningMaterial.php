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
class LearningMaterial extends Model
{
    /**
     * ! creating the relationship to the learningMaterial Type.
     * 
     * @return relationship.
     */
    public function learningMaterialBelongsToLaerningMaterialType()
    {
        return $this->belongsTo(
            'App\LearningMaterialType',
            'typeOfLearningMaterialId',
            'id'
        );
    }

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
     * ! creating the relationship to the chapters.
     * 
     * @return relationship
     */
    public function chapterBeongsToChapter()
    {
        return $this->belongsTo('App\Chapter', 'chapterId', 'id');
    }

    /**
     * ! creating relatinsip to the instructor details.
     * 
     * @return relationship
     */
    public function leariningMaterialBelongsToInstructor()
    {
        return $this->belongsTo('App\InstructorDetail', 'InstructorId', 'id');
    }
}
