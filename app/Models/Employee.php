<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class Employee extends Model
    {
        protected $table = 'employee';
        protected $primaryKey = 'eid';
        protected $allowedFields = [
            'fname',
            'mname',
            'lname',
            'gender',
            'mail',
            'mobile_no',
            'date_of_birth',
            'photograph'
        ];
    }

?>