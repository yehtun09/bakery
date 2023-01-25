<?php
    include_once __DIR__ ."/../model/feedback_model.php";

    class feedbacksController extends Feedbacks{
       
       public function Feedbacks()
       {
        $result=$this->getFeedbacks();
        return $result;
       }
    }
?>