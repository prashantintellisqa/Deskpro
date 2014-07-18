<?php
$I = new WebGuy($scenario);
$U = new UserController($I);
$U->login(AdminHomePage::$loginUserNameLocator,AdminHomePage::$loginPasswaordLocator); 

// Verify Element
$I->seeElement(AdminHomePage::$TicketsLocator);
$I->click(AdminHomePage::$TicketsLocator);
$I->wait(5000);
$I->see(AdminmoduleController::$VerifyTargetPageTextLocator);
$I->click(AdminHomePage::$NewDepartmentLinkLocator);
$I->wait(5000);
$I->fillField(AdminHomePage::$DepartmentTittleLocator,AdminmoduleController::$DepartmentTittleValueLocator);
$I->click(AdminHomePage::$SaveCreatedDepartmentLocator);
$I->wait(5000);
$I->reloadPage();
$I->wait(5000);

$I->dragAndDrop(AdminHomePage::$DragElementLocator,AdminHomePage::$DropElementLocator);

$I->wait(1000);
$value1frmAminPAge = $I->grabTextFrom(AdminHomePage::$value1frmAminPAge);
$value2frmAminPAge = $I->grabTextFrom(AdminHomePage::$value2frmAminPAge);
$value3frmAminPAge = $I->grabTextFrom(AdminHomePage::$value3frmAminPAge);

//Open NEW Ticket Page
$I->amOnPage(AdminModuleController::$NewticketPageLocator);
$I->wait(4000);
$I->seeInTitle(AdminModuleController::$Ticketpagetitle);
$value1frmTicketPAge = $I->grabTextFrom(AdminHomePage::$value1frmTicketPAge);
$value2frmTicketPAge = $I->grabTextFrom(AdminHomePage::$value2frmTicketPAge);
$value3frmTicketPAge = $I->grabTextFrom(AdminHomePage::$value3frmTicketPAge);

if ($value1frmAminPAge == $value1frmTicketPAge)
{

	if ($value1frmAminPAge == $value1frmTicketPAge)
		{
			if ($value1frmAminPAge == $value1frmTicketPAge)
			{
			$I->amOnPage(AdminModuleController::$AdminPageLocator);
			$I->wait(4000);
			$I->click(AdminHomePage::$TicketsLocator);
			$I->wait(3000);
			$I->click(AdminHomePage::$Createddepartment);
			$I->wait(2000);
			$I->click(AdminHomePage::$DeletedDepartmentButton);
			$I->wait(2000);
			$I->click(AdminHomePage::$ConformDeletedDepartmentButton);
			$I->wait(8000);
			}
		}
}


?>