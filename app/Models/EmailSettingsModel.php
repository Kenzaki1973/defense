<?php 
namespace App\Models;

use CodeIgniter\BaseModel;
use CodeIgniter\Model;

class EmailSettingsModel extends Model 
{
    // This model is use for ajax practice
    protected $table = 'email_settings';
    protected $allowedFields = ['smtp_host', 'smtp_username', 'smtp_password', 'smtp_secure', 'smtp_port', 'smtp_charset'];
}