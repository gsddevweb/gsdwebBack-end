<?php
/**
 * MyClass Class Doc Comment
 * php version 7.2.18
 *
 * @category Class
 * @package  MyPackage
 * @author   Demba Daniel <dembadaniel001@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.hashbangcode.com/
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLevelOfEducationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:level_of_education',
            'description' => 'required',
        ];
    }
}
