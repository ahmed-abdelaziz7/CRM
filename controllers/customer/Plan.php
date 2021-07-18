<?php   
require_once $_SERVER['DOCUMENT_ROOT'].'/CRM/models/plan.php';            
require_once $_SERVER['DOCUMENT_ROOT'].'/CRM/models/subscriptions.php';            



// subscribe plan 
if(isset($_POST['subscribe']))
{
    $user_id          = $_SESSION['id'];
    $plan             = array();
    $plan['id']       = $_POST['id'];    
    $plan['duration'] = $_POST['duration'];
    $subscribe        = new subscriptions($user_id,$plan);
    $result           = $subscribe->new_subscription();
    if($result)
    {
        echo "<script>alert('you subscribe successfully')</script>";
    }
    else 
    {
        echo "<script>alert('You are already subscribed to plan')</script>";
    }
    
    
}
// display all plans 

$plan = new plan();
$plan_data = $plan->get_all();
require_once $_SERVER['DOCUMENT_ROOT'].'/CRM/views/customer/Plan.php';            