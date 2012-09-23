<?php

require_once('basetest.php');

class deletePlanCaseTest extends PrecogBaseTest {

     function setupAccount(){
        $email = json_encode(array("email"=>"fakeEmailAddress@precog.com"));
        $accountId = createAccount($email);
         return $accountId;
    }
      
    function testDeletePlanCase()
    {
        $account = $this->setupAccount();
        deletePlan($account);
       
        $this->assertTrue($describeAccount($account) == array("plan")=>"starter");
    }
}
?>
