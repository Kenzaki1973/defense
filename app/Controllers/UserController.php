<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ApplicantModel;
use App\Controllers\BaseController;

class UserController extends ResourceController
{
    protected $db;
    private $pjmodel;
    private $applimodel;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->pjmodel = new \App\Models\PostjobModel();
        $this->applimodel = new \App\Models\ApplicationModel();
        // $this->dompdf = new Dompdf();
        // require_once(ROOTPATH . 'vendor/autoload.php');
    }

    // public function applicantlogin()
    // {
    //     $email = $this->request->getVar("email");
    //     $password = $this->request->getVar("password");
    //     $appli = new ApplicantModel();
    //     $data = $appli->where('email', $email)->first();
    
    //     if ($data) {
    //         $hashedPassword = $data['password'];
    //         $authenticatedPassword = password_verify($password, $hashedPassword);
    
    //         if ($authenticatedPassword) {
    //             return $this->respond(['msg' => 'Login successful'], 200);
    //         } else {
    //             return $this->respond(['msg' => 'Invalid username or password'], 401);
    //         }
    //     } else {
    //         return $this->respond(['msg' => 'No user found'], 404);
    //     }
    // }
     
    public function userhome()
    {
        $data = [
            'mar' => $this->pjmodel->where('category', 'Marketing')->where('status', 'Approved')->get()->getNumRows(),
            'cus' => $this->pjmodel->where('category', 'Customer Service')->where('status', 'Approved')->get()->getNumRows(),
            'hum' => $this->pjmodel->where('category', 'Human Resource')->where('status', 'Approved')->get()->getNumRows(),
            'pro' => $this->pjmodel->where('category', 'Project Management')->where('status', 'Approved')->get()->getNumRows(),
            'bus' => $this->pjmodel->where('category', 'Business Development')->where('status', 'Approved')->get()->getNumRows(),
            'sal' => $this->pjmodel->where('category', 'Sales & Management')->where('status', 'Approved')->get()->getNumRows(),
            'tea' => $this->pjmodel->where('category', 'Teaching & Education')->where('status', 'Approved')->get()->getNumRows(),
            'des' => $this->pjmodel->where('category', 'Design & Creative')->where('status', 'Approved')->get()->getNumRows(),
            'listfull' => $this->pjmodel->where('status', 'Approved')->where('job_type', 'Full Time')->orderBy('vacancy_id', 'ASC')->findAll(),
            'listpart' => $this->pjmodel->where('status', 'Approved')->where('job_type', 'Part Time')->orderBy('vacancy_id', 'ASC')->findAll(),
           
        ];
        return view('User/userhome', $data);
    }

    public function applynow()
    {
        $applic_id = session()->get('loggedUser');
        $app_email = session()->get('email');
        $app_fullname = session()->get('full_name');
        $app_contact = session()->get('contact_number');
        $app_address = session()->get('address');
        
        $myresume = $this->request->getFile('resumeko');
        $theNamePhoto = $myresume->getRandomName();

        if($myresume->isValid()){
           if($myresume->move('./uploads', $theNamePhoto)){
            $data = [
                'applic_id' => $applic_id,
                'job_id' => $this->request->getVar('job_id'),
                'app_email' => $app_email,
                'app_fullname' => $app_fullname,
                'app_contact' => $app_contact,
                'app_address' => $app_address,
                'emp_company' => $this->request->getVar('emp_company'),
                'emp_location' => $this->request->getVar('emp_location'),
                'emp_title' => $this->request->getVar('emp_title'),
                'emp_per' => $this->request->getVar('emp_per'),
                'emp_salary' => $this->request->getVar('emp_salary'),
                'app_resume' => $theNamePhoto,
                'app_status' => 'Pending',
            ];
            
            if ($this->applimodel->insert($data)) {
                return redirect()->to('/applicationstatus');
            }
           }
        }
    }

    public function applydetails($vacancy_id = null)
    {

        $data = [
            'viewde' => $this->pjmodel->where('vacancy_id', $vacancy_id)->first(),
        ];

        return view('User/applydetails', $data);
    }
    

    public function about()
    {
        return view('User/about');
    }

    public function applicationstatus()
    {
        $id = session()->get('loggedUser');
        $auth = new ApplicantModel();
        $data = [
            'status' => $auth->select('*')
                ->join('application', 'application.applic_id = applicant.id', 'right')
                ->where('application.applic_id',  session()->get('loggedUser'))
                ->get()->getResultArray()
        ];
        return view('User/applicationstatus', $data);
    }

    public function accountprofile()
    {
        return view('User/accountprofile');
    }

    public function joblist()
    {
        $data = [
            'all' => $this->pjmodel->where('status', 'Approved')->findAll(),
        ];
        return view('User/joblist', $data);
    }

    public function categorymar()
    {
        $data = [
            'category' => 'Marketing',
            'catlist' => $this->pjmodel->where('category', 'Marketing')->where('status', 'Approved')->findAll(),
        ];
        return view('User/categorylist', $data);
    }

    public function categorycus()
    {
        $data = [
            'category' => 'Customer Service',
            'catlist' => $this->pjmodel->where('category', 'Customer Service')->where('status', 'Approved')->findAll(),
        ];
        return view('User/categorylist', $data);
    }

    public function categoryhum()
    {
        $data = [
            'category' => 'Human Resource',
            'catlist' => $this->pjmodel->where('category', 'Human Resource')->where('status', 'Approved')->findAll(),
        ];
        return view('User/categorylist', $data);
    }

    public function categorypro()
    {
        $data = [
            'category' => 'Project Management',
            'catlist' => $this->pjmodel->where('Project Management', 'Marketing')->where('status', 'Approved')->findAll(),
        ];
        return view('User/categorylist', $data);
    }

    public function categorybus()
    {
        $data = [
            'category' => 'Business Development',
            'catlist' => $this->pjmodel->where('category', 'Business Development')->where('status', 'Approved')->findAll(),
        ];
        return view('User/categorylist', $data);
    }

    public function categorysal()
    {
        $data = [
            'category' => 'Sales & Communication',
            'catlist' => $this->pjmodel->where('category', 'Sales & Communication')->where('status', 'Approved')->findAll(),
        ];
        return view('User/categorylist', $data);
    }

    public function categorytea()
    {
        $data = [
            'category' => 'Teaching & Education',
            'catlist' => $this->pjmodel->where('category', 'Teaching & Education')->where('status', 'Approved')->findAll(),
        ];
        return view('User/categorylist', $data);
    }

    public function categorydes()
    {
        $data = [
            'category' => 'Design & Creative',
            'catlist' => $this->pjmodel->where('category', 'Design & Creative')->where('status', 'Approved')->findAll(),
        ];
        return view('User/categorylist', $data);
    }

    public function contact()
    {
        return view('User/contact');
    }

    public function getdata()
    {
        $appli = new ApplicantModel();
        $data = $appli->findAll();
        return $this->respond($data, 200);
    }

    public function save()
    {

        $json = $this->request->getJSON();
        $hashedPassword = password_hash($json->password, PASSWORD_DEFAULT);
        

        $data=[
            // 'full_name' => $json->full_name,
            // 'contact_number' => $json->contact_number,
            // 'address' => $json->address,
            // 'email' => $json->email,
            // 'category' => $json->category,
            'full_name' => $json->full_name,
            'status' => $json->status,
            'category' => $json->category,
            'contact_number' => $json->contact_number,
            'address' => $json->address,
            'email' => $json->email,
            'password' => $hashedPassword,
        ];
        $appli = new ApplicantModel();
        $r = $appli->save($data);
        return $this->respond($r, 200);
        
    }

        // Controller method to get category counts
    public function getCategoryCounts()
    {
        // Replace 'your_model' with the actual model you are using
        $appli = new ApplicantModel();
        // $this->load->model('ApplicantModel');

        // Call a method in your model to get category counts
        $categoryCounts = $appli->getCategoryCounts();

        // Return the category counts as JSON
        return $this->response->setJSON($categoryCounts);
    }


    // THIS IS FOR LOGIN AND REGISTRATION===============================================================================================
    public function log()
    {
        $auth = new ApplicantModel();
        if ($this->request->getPost()) {

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $user = $auth->where('email', $email)->first();
            if ($user) {
                $passwordValidation = password_verify($password, $user['password']);
                if ($passwordValidation) {
                    if ($user['activation_status'] == 1) {
                        session()->set('loggedUser', $user['id']);
                        session()->set('email', $user['email']);
                        session()->set('full_name', $user['full_name']);
                        session()->set('address', $user['address']);
                        session()->set('contact_number', $user['contact_number']);
                        $data = [
                            'mar' => $this->pjmodel->where('category', 'Marketing')->where('status', 'Approved')->get()->getNumRows(),
                            'cus' => $this->pjmodel->where('category', 'Customer Service')->where('status', 'Approved')->get()->getNumRows(),
                            'hum' => $this->pjmodel->where('category', 'Human Resource')->where('status', 'Approved')->get()->getNumRows(),
                            'pro' => $this->pjmodel->where('category', 'Project Management')->where('status', 'Approved')->get()->getNumRows(),
                            'bus' => $this->pjmodel->where('category', 'Business Development')->where('status', 'Approved')->get()->getNumRows(),
                            'sal' => $this->pjmodel->where('category', 'Sales & Management')->where('status', 'Approved')->get()->getNumRows(),
                            'tea' => $this->pjmodel->where('category', 'Teaching & Education')->where('status', 'Approved')->get()->getNumRows(),
                            'des' => $this->pjmodel->where('category', 'Design & Creative')->where('status', 'Approved')->get()->getNumRows(),
                        ];
                        return redirect()->to('/');
                    } else {
                        return redirect()->to('/log')->withInput()->with('error', 'Account is not yet activated');
                    }
                } else {
                    return redirect()->to('/log')->withInput()->with('error', 'Invalid password');
                }
            } else {
                return redirect()->to('/log')->withInput()->with('error', 'Email does not exist');
            }
        }
        return view('User/applicantlogin');
    }


    public function reg()
    {

        $auth = new ApplicantModel();
        $getRules = $auth->getRule('register');
        $auth->setValidationRules($getRules);

        if ($this->request->getPost()) {

            $email = $this->request->getPost('email');
            $contact_number = $this->request->getPost('contact_number');
            $full_name = $this->request->getPost('full_name');
            $address = $this->request->getPost('address');
            $category = $this->request->getPost('category');
            $activationKey = bin2hex(random_bytes(50));

            $values = [
                'email' => $email,
                'contact_number' => $contact_number,
                'full_name' => $full_name,
                'category' => $category,
                'password' => $this->request->getPost('password'),
                'confirm_password' => $this->request->getPost('confirm_password'),
                'activation_key' => $activationKey,
            ];

            

            if ($auth->insert($values)) {
                sendEmail($full_name, $email, 'Account Activation', 'account_activation/', $activationKey);
                return redirect()->to('/log');
            } else {
                return redirect()->to('/reg')->withInput()->with('errors', $auth->errors());
            }
        }
        return view('User/applicantregister');
    }


    public function account_activation($token)
    {
        $auth = new ApplicantModel();
        $user = $auth->where('activation_key', $token)->first();

        if (!$user) {
            return redirect()->to('/log')->with('error', 'Invalid activation link');
        } else {

            $values = [
                'activation_key' => bin2hex(random_bytes(50)),
                'activation_status' => 1
            ];

            $auth->set($values)->where('activation_key', $token)->update();
            return redirect()->to('/log')->with('success', 'Account activated');
        }
    }


    public function forgot_password()
    {
        $auth = new ApplicantModel();
        $startDate = time();
        if ($this->request->getPost()) {
            $email = $this->request->getPost('email');
            $user = $auth->where('email', $email)->first();
            $recoveryToken = bin2hex(random_bytes(50));

            if ($user) { // check if the email exist
                // check if the you already send a recovery link or not
                if ($user['recovery_status'] == 0 || $user['recovery_status'] == 1 && date('Y-m-d H:i:s', time()) > $user['recovery_expiration']) {
                    $values = [
                        'recovery_key' => $recoveryToken,
                        'recovery_expiration' => date('Y-m-d H:i:s', strtotime('+1 day', $startDate)),
                        'recovery_status' => 1,
                    ];

                    $auth->set($values)->where('email', $email)->update();
                    sendEmail($user['username'], $user['email'], 'Reset Password', 'change_password_token/', $recoveryToken);
                    return redirect()->to('/usercontoller/forgot_password')->withInput()->with('success', 'Recovery link sent successfully to your email. Please check!');
                } else {
                    return redirect()->to('/forgot_password')->withInput()->with('error', 'Recovery link is already sent to your email. Please check!');
                }
            } else {
                return redirect()->to('/forgot_password')->withInput()->with('error', 'Email doesnt exist');
            }
        }
        return view('userpage/pages/logreg/forgot_password');
    }

    public function change_password_token($token)
    {
        $auth = new ApplicantModel();
        $user = $auth->where('recovery_key', $token)->first();

        //check if the token still exist
        if ($user) {
            if ($this->request->getPost()) {

                $validation = $this->validate([
                    'new_password' => [
                        'label' => 'new password',
                        'rules' => 'required|min_length[5]'
                    ],
                    'confirm_password' => [
                        'label' => 'confirm password',
                        'rules' => 'required|min_length[5]|matches[new_password]'
                    ]
                ]);
                //check if the token expiration is not less than in the current date and time
                if (date('Y-m-d H:i:s', time()) < $user['recovery_expiration']) {
                    if ($validation) {
                        $newPassword = $this->request->getPost('new_password');
                        $value = [
                            'password' => $newPassword,
                            'confirm_password' => $this->request->getPost('confirm_password'),
                            'recovery_key' => bin2hex(random_bytes(50)),
                            'recovery_status' => 0
                        ];

                        //$auth->update($user['id'], $value);
                        $auth->set($value)->where('id', $user['id'])->update();
                        return redirect()->to('/log')->with('success', 'Password changed successfully');
                    } else {
                        return redirect()->to(current_url())->withInput()->with('errors', $this->validator->getErrors());
                    }
                } else {
                    return redirect()->to('/log')->with('error', 'Recovery link expired');
                }
            }
            return view('userpage/pages/logreg/forgot_password_token');
        } else {
            return redirect()->to('/log')->with('error', 'Invalid recovery link');
        }
    }

    public function logout()
    {
        if (session()->has('loggedUser')) {
            session()->remove('loggedUser');
            session()->stop('loggedUser');
            return redirect()->to('/log')->with('success', 'User successfully logged out');
        }
    }

}
