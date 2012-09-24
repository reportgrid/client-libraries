<?php

require_once('basetest.php');

class ListAccountsTest extends PrecogBaseTest {

     function setupAccount(){
        $email = array("email"=>"fakeEmailAddress@precog.com");
        $accountId = $this->api->createAccount($email);
         return $accountId;
    }

    function testListAccountsCase()
    {
        $account = $this->setupAccount();
        $list = $this->api->listAccounts($account);
        sleep(5);
        $this->assertTrue($account["accountId"] === $list["accountId"]);
    }
}
?>
