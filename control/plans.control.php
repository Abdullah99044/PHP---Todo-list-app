
<?php

require 'C:\Program Files\ammps2\Ampps\www\backendChallenge\toDoList\model\plans.model.php';


class PLansControl extends PlansModel {

    public function control_insert_into_Plans($plan_name){
        
        $id = $this->get_userId();
        
        if(!empty($plan_name)){
            return $this->insert_into_plans( $plan_name , $id);
        }
        
    }

    public function show_user_plans(){

        $plans = [];
        $plans_data = $this->select_user_plans();

        if(empty($plans_data)){

            return "No plans";


        }else{

            foreach($plans_data as $value){

                $user_plan = $this->select_plan($value);
                array_push($plans , $this->plan_information($user_plan['planName'] , $user_plan['id']));
            }

            return $plans;

        }

    }

    public function plan_information($plan_name , $plan_id){

        $html = " ";
        $html .= "           <br> ";
        $html .= " <div> ";
        $html .= "      <form action='' method='POST'> ";
        $html .= "          <label> $plan_name  </label> ";
        $html .= "          <input type='hidden' name='id' value='$plan_id'> ";
        $html .= "          <input type='hidden' name='SubmitType' value='delete'> ";
        $html .= "           <br> ";
        $html .= "          <input type='submit' name='delete' value='delete'> ";
        $html .= "      </form> ";
        $html .= "      <form action='' method='POST'> ";
        $html .= "          <input type='hidden' name='id' value='$plan_id'> ";
        $html .= "          <input type='hidden' name='SubmitType' value='update'> ";
        $html .= "           <br> ";
        $html .= "          <input type='submit' name='update' value='update'> ";
        $html .= "      </form> ";
        $html .= " </div> ";
        

        return $html;
    }

    public function control_delete_plan($plan_id){
        
        
        
        
        return $this->delete_plan($plan_id);
        
        
    }

}

 







?>