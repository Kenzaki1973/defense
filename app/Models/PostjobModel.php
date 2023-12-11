<?php

namespace App\Models;

use CodeIgniter\Model;

class PostjobModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'postjob';
    protected $primaryKey       = 'vacancy_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['company_name', 'occupation_title', 'required_no', 'location', 'qualification', 'job_description', 'prefered', 'status', 'job_type', 'category', 'salary', 'per'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'dateposted';
    protected $updatedField  = 'job_updated';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
