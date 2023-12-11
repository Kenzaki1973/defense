<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{

    private $registeremp;

    public function __construct()
    {
        $this->registeremp = new \App\Models\EmployerRegistrationModel();
        $this->adminlogins = new \App\Models\AdminLoginModel();
        $this->jobvacancies = new \App\Models\PostjobModel();
        $this->appli = new \App\Models\ApplicantModel();
    }

    public function adminhome()
    {
        return view('Admin/adminhome');
    }

    // public function employerregister()
    // {
    //     return view('Admin/employerregistration');
    // }

    public function jobvacancy()
    {
        return view('Admin/jobvacancy');
    }

    public function empdetails($emp_id = null)
    {
        $data = [
            'viewEmp' => $this->registeremp->where('emp_id', $emp_id)->first(),
        ];
        return view('Admin/employerdetails', $data);
    }

    public function manageuser()
    {
        return view('Admin/manageuser');
    }

    public function registeremps()
    {
        $data = [
            'myregemp' => $this->registeremp->findAll(),
        ];
        return view('Admin/employerregistration', $data);
    }

    public function adminlogin()
    {
        echo view('Admin/adminlogin');
    } 

    public function adlogin()
    {
                
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
                
        $data = $this->adminlogins->where('username', $username)->first();
                
        var_dump($username);
        var_dump($password);
        var_dump($data);
                
        if ($data) {
            $pass = $data['password'];
            if ($password === $pass) {
                return redirect()->to('/adminhome');
                
            } 
            else {
                
                return redirect()->to('/adminlogin');
            }
        } else {

            return redirect()->to('/adminlogin');
        }
    }

    public function jobvacant()
    {
        $data = [
            'jobvacants' => $this->jobvacancies->findAll(),
        ];
        return view('Admin/jobvacancy', $data);
    }

    public function employer_approved($emp_id)
    {
      
        $this->registeremp->set('status', 'Approved')->where('emp_id', $emp_id)->update();

        return redirect()->route('employerregistration');
    }

    public function employer_decline($emp_id)
    {
      
        $this->registeremp->set('status', 'Decline')->where('emp_id', $emp_id)->update();

        return redirect()->route('employerregistration');
    }

    // public function empdetails($vacancy_id = null)
    // {
    //     $data = [
    //         'viewEmp' => $this->registeremp->where('vacancy_id', $vacancy_id)->first(),
    //     ];
    //     return view('Admin/employerdetails', $data);
    // }

    public function vacancydetails($vacancy_id = null)
    {
        $data = [
            'vacant' => $this->jobvacancies->where('vacancy_id', $vacancy_id)->first(),
        ];
        return view('Admin/vacancydetails', $data);
    }
    
    public function vacancy_approved($vacancy_id)
    {
      
        $this->jobvacancies->set('status', 'Approved')->where('vacancy_id', $vacancy_id)->update();

        return redirect()->route('jobvacancy');
    }

    public function vacancy_decline($vacancy_id)
    {
      
        $this->jobvacancies->set('status', 'Decline')->where('vacancy_id', $vacancy_id)->update();

        return redirect()->route('jobvacancy');
    }

    public function applicantinfo()
    {
        $data = [
            'applicants' => $this->appli->findAll(),
        ];
        return view('Admin/manageuser', $data);
    }
}