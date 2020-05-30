<?php

/**
 * MyClass Class Doc Comment
 * php version 7.2.10
 *
 * @category Class
 * @package  MyPackage
 * @author   Sally Nyiwende <ngugigeorge697@gmail.com>
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
class LevelOfEducation extends Model
{
    /**
     * ! creatig the relationsip to the subjects model. 
     * 
     * @return relationship
     */
    public function levelOfEducationHasManySubjects()
    {
        return $this->hasMany('App\Subject', 'levelOfEducationId', 'id');
    }
}
