<?php

class UserController
{
    protected $user;

    public function __construct(WebGuy $I) {
        $this->user = $I;
    }

    public function login($user_name, $password) {
        $this->user->resizeWindow(1200, 800);
        $this->user->amOnPage(AdminLoginPage ::$URL_login);
        $this->user->fillField(AdminLoginPage::$emailField, $user_name);
        $this->user->fillField(AdminLoginPage::$passField, $password);
        $this->user->click(AdminLoginPage::$loginButtonLocator);
		$this->user->wait('1000');
        
    }
    
    public function logout() {
        $this->user->click(AdminHomePage::$logoLocator);
        $this->user->click(AdminHomePage::$userNameLocator);
        $this->user->click(AdminHomePage::$logoutLocator);
        $this->user->amOnPage(AdminLoginPage::$URL_logout);
      
    }
}
?> 