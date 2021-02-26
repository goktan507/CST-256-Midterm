<?php
namespace App\Services\Business;

use App\AssessmentModel;

class BusinessService
{
    //default constructor
    public function __construct(){
        
    }
    
    public function getSubmittedValues(AssessmentModel $model){
        if($model->getFirst() == "CST-256"
            && $model->getSecond() == "CST-256"
            && $model->getThird() == "CST-256"
            && $model->getFourth() == "CST-256")  //if model is initialized and has 'CST-256' as model variables
            return true;    //returns true
        return false;       //if return true won't proceed, then returns false
    }
}

