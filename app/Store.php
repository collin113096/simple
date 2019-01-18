<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Enrollment\Student;

class Store extends Model
{ 
    private $request;
    private $form_data;
    private $user_id;
    private $student;
    private $student_type;
  

    public function __construct($request){
    	$this->request = $request;
    	$this->form_data = [
    		['name' => 'birth_certificate', 'directory' => 'Birth Certificate', 'type' => 'Birth Certificate'],
    		['name' => 'certificate_of_transfer', 'directory' => 'Transfer', 'type' => 'Certificate of Transfer'],
    		['name' => 'certificate_of_good_moral_character', 'directory' => 'Good Moral', 'type' => 'Certificate of Good Moral Character'],
    		['name' => 'form137', 'directory' => 'Form 137', 'type' => 'Form 137 / Transcript of Record'],
    		['name' => 'form138', 'directory' => 'Form 138', 'type' => 'Form 138 / Report Card'],
    		['name' => 'picture', 'directory' => 'Picture', 'type' => 'Picture'],	
    	];

    	return $this;
    }

    public function of_this_user($user_id){
    	$this->user_id = $user_id;
    	$this->student = $this->get_student();
    	$this->storeDependOnStudentType();
    }

    public function storeDependOnStudentType(){
         switch($this->get_student_type()){
            case 'New Student':
                $this->except('certificate_of_transfer');
                break;
            case 'Transferee Student':
                $this->saveAll();
                break;
            case 'Old Student':
                $this->saveOnly(['form138','picture']);
                break;
       }
    }

    public function except($data){

    	foreach($this->form_data as $record){  		
	        if($record['name'] != $data){
            	$this->insert($record);
	        } 
    	}
    }

    public function saveAll(){

    	foreach($this->form_data as $record){  		
            	$this->insert($record);
    	}
    }


     public function saveOnly($data){

    	foreach($data as $datum){  		
        	foreach($this->form_data as $record){
        		if($datum == $record['name']){
        			$this->insert($record);
        		}
        	}
    	}
    }

    public function insert($record){
        $this->get_student()->requirements()->create([
            'url' =>  $this->request->file($record['name'])->store('/'),
            'type' => $record['type'],       
        ]);
    }

    public function get_student(){
    	return Student::where('user_id', $this->user_id)->first();
    }

    public function get_student_type(){
    	return $this->request->input('student_type');
    }
}
