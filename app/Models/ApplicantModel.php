<?php

namespace App\Models;

use CodeIgniter\Model;

class ApplicantModel extends Model
{
        // This model is use for ajax practice
    protected $table = 'applicant';
    protected $primaryKey = 'id';
    protected $allowedFields = ['full_name', 'email', 'password', 'activation_key', 
    'activation_status', 'recovery_key', 'recovery_status', 'recovery_expiration', 'contact_number', 'status', 'address', 'category', 'stat', 'created_at', 'updated_at'];

    protected $dynamicRules = [
        'register' => [
            'full_name' => [
                'label' => 'Full Name',
                'rules' => 'required|alpha_numeric_space|min_length[5]'
            ],
            'email' => [
                'label' => 'E-mail',
                'rules' => 'required|valid_email|is_unique[applicant.email]'
            ],
            'password' => [
                'label' => 'password',
                'rules' => 'required|min_length[5]'
            ],
            'confirm_password' => [
                'label' => 'confirm password',
                'rules' => 'required|matches[password]',
            ],
        ],
    ];

    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    public function getRule(string $rule)
    {
        return $this->dynamicRules[$rule];
    }

    protected function hashPassword(array $data)
    {
        if (!isset($data['data']['password'])) {
            return $data;
        }
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        unset($data['data']['confirm_password']);
        return $data;
    }



}
