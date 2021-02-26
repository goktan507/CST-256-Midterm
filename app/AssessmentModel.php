<?php
namespace App;

class AssessmentModel
{
    // model variables to store values from submitted form
    private $first;
    private $second;
    private $third;
    private $fourth;
    
    /**
     * return the first value of model
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * return the second value of model
     */
    public function getSecond()
    {
        return $this->second;
    }

    /**
     * return the third value of model
     */
    public function getThird()
    {
        return $this->third;
    }

    /**
     * return the fourth value of model
     */
    public function getFourth()
    {
        return $this->fourth;
    }

    /*
     *  constructor functino for AssessmentModel to initialize model parameters
     */
    public function __construct($first, $second, $third, $fourth) {
        $this->first = $first;
        $this->second = $second;
        $this->third = $third;
        $this->fourth = $fourth;
    }
    
    
}

