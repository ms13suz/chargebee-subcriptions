<?php



namespace App;



use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable

{

    use Notifiable;



    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'name', 'email', 'password', 'google_id'

    ];



    /**

     * The attributes that should be hidden for arrays.

     *

     * @var array

     */

    protected $hidden = [

        'provider_name', 'provider_id', 'password', 'remember_token',
    ];



    public function addNew($input)

    {

        $check = static::where('google_id', $input['google_id'])->first();



        if (is_null($check)) {

            return static::create($input);

        }



        return $check;

    }

}
