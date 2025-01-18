<?php
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'crm_accounts';

    /**
     * @return array
     */
    public static function asArray()
    {
        return Contact::all()
            ->keyBy('id')
            ->toArray();
    }

    public static function hasLoginToken()
    {
        if (isset($_COOKIE['cloudonex_client_token'])) {
            return true;
        }
        return isset($_SESSION['cloudonex_client_token']);
    }

    /**
     * @return bool
     */
    public static function isLoggedIn()
    {
        $client_token = null;
        if(isset($_SESSION['cloudonex_client_token'], $_COOKIE['cloudonex_client_token'])) {

            if($_SESSION['cloudonex_client_token'] != $_COOKIE['cloudonex_client_token']) {
                $client_token = $_SESSION['cloudonex_client_token'];
            }

        }
        else{
            if(isset($_SESSION['cloudonex_client_token'])) {
                $client_token = $_SESSION['cloudonex_client_token'];
            }
            else if(isset($_COOKIE['cloudonex_client_token'])) {
                $client_token = $_COOKIE['cloudonex_client_token'];
            }
        }

        if($client_token) {
            return self::where('token', $client_token)->first();
        }

        return false;
    }

    /**
     * @return mixed
     */
    public static function getAllContacts()
    {
        return Contact::select(['id', 'account', 'email', 'phone', 'company'])
            ->orderBy('id', 'desc')
            ->get();
    }

    public static function customers()
    {
        return self::select(['id', 'account', 'email', 'phone', 'company'])
            ->orderBy('id', 'desc')
            ->limit(2000)
            ->get();
    }
}
