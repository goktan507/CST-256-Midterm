<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AssessmentModel;
use App\Services\Business\BusinessService;

class AssessmentController extends Controller
{
    private $service;
    //default constructor that initialized the business service
    public function __construct(){
        $this->service = new BusinessService();
    }
    
    public function onFormSubmit(Request $request){ 
        //initializing the new Model within the submitted form values
            $model = new AssessmentModel(
            $request->input('first'), 
            $request->input('second'), 
            $request->input('third'), 
            $request->input('fourth')
            );
        // passing the model to business layer
        $result = $this->service->getSubmittedValues($model);
        
        //if the model has variables equal to 'CST-256', and get a true passed back from business layer, we return success message 
        if($result){
            echo "Returned Success";    
            return view('assessment');
        }
        //otherwise if the model has variables does not equal to 'CST-256', and get a false passed back from business layer, we return failure message
        echo "Returned Failure";
        return view('assessment');
    }
}
