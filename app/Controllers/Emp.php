<?php

namespace App\Controllers;
use App\Models\Employee;
class Emp extends BaseController
{
    public function index(): string
    {
        $employee = new Employee();
        $search_text = $this->request->getGet("search_text");
        if($search_text == "" || $search_text == NULL){
            $data = [
                'employee' => $employee->where('status',1)->paginate(5),
                'pager' => $employee->pager,
            ];
        }else{

        $data = [
            'employee' => $employee->where('status',1)->like('fname',$search_text)->orLike('mobile_no',$search_text)->orLike('lname',$search_text)->paginate(5),
            'pager' => $employee->pager,
        ];

        }   
        return view('emp_list', $data);
    }
    public function save_employee(){
        $employee = new Employee();
        $data =[
            'fname' => $this->request->getPost('fname'),
            'mname' => $this->request->getPost('mname'),
            'lname' => $this->request->getPost('lname'),
            'gender' => $this->request->getPost('gender'),
            'mail' => $this->request->getPost('mail'),
            'mobile_no' => $this->request->getPost('mobile_no'),
            'date_of_birth' => $this->request->getPost('date_of_birth'),
            'photograph' => $this->request->getPost('photograph')

        ];
        $employee->insert($data);
        return view('new_employee');

    }
    public function employee_form(){
        return view('new_employee');
    }
}
