<?php 

class FirstCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Camagru');
    }

    public function logInSuccessfully(AcceptanceTester $I)
    {
        // $I->haveServerParameter('login', '1');
        $I->amOnPage('?login=1');
        $I->see('Login');

        $I->fillField('username','steve');
        $I->fillField('password','P@ssw0rd');
        $I->click('login_user');
        $I->see('Welcome steve!');
    }

    public function logInUnsuccessfully(AcceptanceTester $I)
    {
        // $I->haveServerParameter('login', '1');
        $I->amOnPage('?login=1');
        $I->see('Login');

        $I->fillField('username','steve');
        $I->fillField('password','password1');
        $I->click('login_user');
        $I->see('Failed to get user!');
    }

    public function signUpSuccessfully(AcceptanceTester $I)
    {
        // $I->haveServerParameter('login', '1');

        $I->amOnPage('?signup=1');
        $I->see('Register');
        $I->fillField('username','stephanie');
        $I->fillField('name','Shauna');
        $I->fillField('surname','McDoo');
        $I->fillField('email','shauna.mcdoo@yahoo.com');
        $I->fillField('password_1','password');
        $I->fillField('password_2','password');
        $I->click('reg_user');

    }

    public function signUpUnsuccessfully(AcceptanceTester $I)
    {
        // $I->haveServerParameter('login', '1');

        $I->amOnPage('?signup=1');
        $I->see('Register');
        $I->fillField('username','steve');
        $I->fillField('name','Sean');
        $I->fillField('surname','McDee');
        $I->fillField('email','sean.mcdee@yahoo.com');
        $I->fillField('password_1','password');
        $I->fillField('password_2','password');
        $I->click('reg_user');
        $I->see('sorry username already taken !');

    }

    public function goToCamera(AcceptanceTester $I){
        $I->amOnPage('?login=1');
        $I->see('Login');

        $I->fillField('username','steve');
        $I->fillField('password','P@ssw0rd');
        $I->click('login_user');

        $I->amOnPage('?camera=1');
        $I->see('snapshot');
    }

    public function goToHome(AcceptanceTester $I){
        $I->amOnPage('/');
        $I->see('Join the fun!');
    }

    public function goToSettings(AcceptanceTester $I){
        $I->amOnPage('?login=1');
        $I->see('Login');

        $I->fillField('username','steve');
        $I->fillField('password','P@ssw0rd');
        $I->click('login_user');

        $I->amOnPage('?settings=1');
        $I->see('Change');
    }

    public function changeUserDataSuccessfully(AcceptanceTester $I)
    {
        $I->amOnPage('?login=1');
        $I->see('Login');

        $I->fillField('username','steve');
        $I->fillField('password','P@ssw0rd');
        $I->click('login_user');
        $I->see('Welcome steve!');
        
        $I->amOnPage('?settings=1');
        $I->see('Change');

        $I->fillField('username','Steve');
        $I->fillField('name','Sean');
        $I->fillField('surname','McDoo');
        $I->fillField('email','sean.mcdoo@yahoo.com');
        $I->fillField('password_1','P@ssw0rd');
        $I->fillField('password_2','P@ssw0rd');
        $I->checkOption('//input[@type = "checkbox"]');
        $I->click('change_settings');
        $I->see('Welcome Steve!');
    }

    


}
