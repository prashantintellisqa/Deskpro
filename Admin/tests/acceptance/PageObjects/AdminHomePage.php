<?php
class AdminHomePage {  
      public static $homeURL = "";   
      public static $AdminURL = ""; 
	  
	  // Login Locators
	  public static $loginUserNameLocator = "intellisqa@gmail.com";
      public static $loginPasswaordLocator = "intellisqa";
	  
	  // Create New Department Locators
	  Public static $TicketsLocator = "//div[@id='dp_main_view']/nav/ul/li[4]/a/i";
	  Public static $NewDepartmentLinkLocator = "New Department";
	  Public static $DepartmentTittleLocator = "//input[@name='title']";
	  Public static $SaveCreatedDepartmentLocator = "//footer/div/div[2]/div/button";
 	  Public static $DragElementLocator = "//article/ul/li[3]/a/i";
      Public static $DropElementLocator = "//article/ul/li[1]/a/i";
      Public static $value1frmAminPAge ="//li[1]/a/h4/span[2]";
      Public static $value2frmAminPAge ="//li[2]/a/h4/span[2]";
      Public static $value3frmAminPAge ="//li[3]/a/h4/span[2]";
      Public static $value1frmTicketPAge ="//div[1]/div/div[2]/select/option[2]";
      Public static $value2frmTicketPAge ="//div[1]/div/div[2]/select/option[3]";
      Public static $value3frmTicketPAge ="//div[1]/div/div[2]/select/option[4]";
      Public static $Createddepartment ='//li[2]/a/h4/span[2]';
	  Public static $DeletedDepartmentButton = 'button.btn.btn-danger';
	  Public static $ConformDeletedDepartmentButton = 'div.modal-footer > button.btn.btn-danger';
	  }
	?> 