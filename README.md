if you want to run this you can use XAMPP open the file.

NOTE : this is not a complete project as this is a group project and one memeber didn't do his part completely (the admin section of the web application).
      other parts work fine. 

here's the phpMyAdmin queries for the data base.

--------------CREATE DATABASE--------------------------------------

CREATE DATABASE insureme;


CREATE TABLE admin(
    	AdminID int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    	FName varchar(50) NOT NULL,
    	LName varchar(50) NOT NULL,
    	Email varchar(50) NOT NULL,
	UNIQUE(Email),
	pwd varchar(50) NOT NULL);

CREATE TABLE customer(
		CID int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
        NIC varchar(20) NOT NULL,
        FName varchar(50) NOT NULL,
        LName varchar(50) NOT NULL,
        DOB date NOT NULL,
        Gender varchar(50) NOT NULL,
        Email varchar(50) NOT NULL,
        Address varchar(50) NOT NULL,
		pwd varchar(50) NOT NULL,
		Phone int(15) NOT NULL,
		AdminID int(10) NOT NULL,
		UNIQUE(Email);



CREATE TABLE customer_phone(
	CID int(10) NOT NULL,
    Phone int(15) NOT NULL,
	PRIMARY KEY(CID,Phone),
	CONSTRAINT customer_phone_CID_FK1 FOREIGN KEY(CID) REFERENCES customer(CID));
	
	
	
	
CREATE TABLE vehicle(
    VID int(10) NOT NULL AUTO_INCREMENT,
    VIN varchar(20) NOT NULL,
    RegNo varchar(50) NOT NULL,
    Make varchar(50) NOT NULL,
    Model varchar(50) NOT NULL,
    Engine_capacity varchar(50) NOT NULL,
    Fuel_type varchar(50) NOT NULL,
    Manu_Year int NOT NULL,
    CID int(10) NOT NULL,
    PRIMARY KEY(VID,CID),
    UNIQUE(VIN,RegNo),
    CONSTRAINT customer_vehicle_FK2 FOREIGN KEY (CID) REFERENCES customer(CID) ON DELETE CASCADE);






CREATE TABLE admin_phone(
    	AdminID int(10) NOT NULL,
        Phone int(15) NOT NULL,
	PRIMARY KEY(AdminID,Phone),
    	FOREIGN KEY (AdminID) REFERENCES admin(AdminID));
		
		
		
CREATE TABLE staff(
    	SID int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    	FName varchar(50) NOT NULL,
    	LName varchar(50) NOT NULL,
    	Email varchar(50) NOT NULL,
    	Designation varchar(50) NOT NULL,
	AdminID int(10) NOT NULL,
	pwd varchar(50) NOT NULL,
	UNIQUE(Email),
	FOREIGN KEY (AdminID) REFERENCES admin(AdminID));



CREATE TABLE staff_phone(
    	SID int(10) NOT NULL,
    	Phone int(15) NOT NULL,
	PRIMARY KEY(SID,Phone),
    	FOREIGN KEY (SID) REFERENCES staff(SID));



CREATE TABLE payment(
	PmtID int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	PmtDate date NOT NULL,
	Amount double NOT NULL,
	Type ENUM('Credit Card','Bank transfer') NOT NULL,
	CID int(10) NOT NULL,
	FOREIGN KEY (CID) REFERENCES customer(CID));



CREATE TABLE report(
    	RepID int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    	RepType ENUM('Daily','Monthly') NOT NULL,
    	RepDate date DEFAULT CURRENT_DATE NOT NULL,
    	SID int(10) NOT NULL,
	FOREIGN KEY (SID) REFERENCES staff(SID));





CREATE TABLE inquiry(
    	InqID int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    	InqDate date DEFAULT CURRENT_DATE NOT NULL,
    	Description varchar(100) NOT NULL,
    	Email varchar(50) NOT NULL,
	CID int(10) NOT NULL,
	FOREIGN KEY (CID) REFERENCES customer(CID));
	
	
	CREATE TABLE policy(
	PID int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	PName varchar(50) NOT NULL,
	Description varchar(100) NOT NULL,
	Fee double NOT NULL,
	AdminID int(10) NOT NULL,
	FOREIGN KEY (AdminID) REFERENCES admin(AdminID));


CREATE TABLE customer_policy(
    	CID int(10) NOT NULL,
    	PID int(10) NOT NULL,
    	Policy_startDate date DEFAULT CURRENT_DATE NOT NULL,
    	Policy_endDate date NOT NULL,
	PRIMARY KEY(CID,PID),
    	FOREIGN KEY (CID) REFERENCES customer(CID),
    	FOREIGN KEY (PID) REFERENCES policy(PID));

CREATE TABLE staff_payment(
    	SID int(10) NOT NULL,
    	PmtID int(10) NOT NULL,
	PRIMARY KEY(SID,PmtID),
    	FOREIGN KEY (SID) REFERENCES staff(SID),
    	FOREIGN KEY (PmtID) REFERENCES payment(PmtID));

CREATE TABLE staff_inquiry(
    	SID int(10) NOT NULL,
    	InqID int(10) NOT NULL,
	PRIMARY KEY(SID,InqID),
    	FOREIGN KEY (SID) REFERENCES staff(SID),
    	FOREIGN KEY (InqID) REFERENCES inquiry(InqID));



CREATE TABLE request(
    	ReqID int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    	ReqDate date DEFAULT CURRENT_DATE,
    	State ENUM('Pending','Completed','Rejected') DEFAULT 'Pending',
    	CID int(10) NOT NULL,
    	FOREIGN KEY (CID) REFERENCES customer(CID));

CREATE TABLE admin_request(
    	AdminID int(10) NOT NULL,
    	ReqID int(10) NOT NULL,
	PRIMARY KEY(AdminID,ReqID),
    	FOREIGN KEY (AdminID) REFERENCES admin(AdminID),
    	FOREIGN KEY (ReqID) REFERENCES request(ReqID));
		
--------------ENTERRING DATA---------------------------------------



INSERT INTO admin VALUES(01,'Onel','Silva','admin1@gmail.com','admin01');
INSERT INTO admin VALUES(02,'Pasan','Perera','admin2@gmail.com','admin02');
INSERT INTO admin VALUES(03,'Malindu','Silva','admin3@gmail.com','admin03');
INSERT INTO admin VALUES(04,'Movindu','De Zoysa','admin4@gmail.com','admin04');
INSERT INTO admin VALUES(05,'Nalin','Dissanayake','admin5@gmail.com','admin05');


INSERT INTO admin_phone VALUES(01,0767064422);
INSERT INTO admin_phone VALUES(01,0774264422);
INSERT INTO admin_phone VALUES(02,0773772539);
INSERT INTO admin_phone VALUES(02,0718610881);
INSERT INTO admin_phone VALUES(03,0763318661);
INSERT INTO admin_phone VALUES(04,0754225664);
INSERT INTO admin_phone VALUES(05,0725534536);


INSERT INTO customer VALUES(1,'200311010702','Sahan','Liyanage','2003/04/19','Male','user1@gmail.com','27/2A kandy','user01');
INSERT INTO customer VALUES(2,'713153249V','Chamod','Perera','1971/02/28','Male','user2@gmail.com','150 gampaha','user02');
INSERT INTO customer VALUES(3,'735381806V','Nipuni','Wijesooriya','1973/11/24','Female','user3@gmail.com','455/A nittabuwa','user03');
INSERT INTO customer VALUES(4,'859632405V','Senesh','Fernando','1985/05/28','Male','user4@gmail.com','80 matale','user04');
INSERT INTO customer VALUES(5,'818567453V','Rishini','De Silva','1981/02/10','Female','user5@gmail.com','200/3B nuwara eliya','user05');


INSERT INTO customer_phone VALUES(01,0786524356);
INSERT INTO customer_phone VALUES(02,0765456678);
INSERT INTO customer_phone VALUES(03,0715434422);
INSERT INTO customer_phone VALUES(04,0767723212);
INSERT INTO customer_phone VALUES(05,0721209200);


INSERT INTO policy VALUES(01,'Comprehensive  Insurance Coverage','This covers damages of all parties',1000000,03);
INSERT INTO policy VALUES(02,'Third party liability Coverage','This covers only the losses occured to third party',50000,02);



INSERT INTO staff VALUES(01,'Sugath','Dissanayake','staff1@gmail.com','Manager',04,'staff01');
INSERT INTO staff VALUES(02,'Gihan','Thomas','staff2@gmail.com','Customer Rep',02,'staff02');
INSERT INTO staff VALUES(03,'Saman','Rathnayake','staff3@gmail.com','Customer Rep',05,'staff03');
INSERT INTO staff VALUES(04,'Mihin','Hettiarachchi','staff4@gmail.com','Customer Rep',01,'staff04');
INSERT INTO staff VALUES(05,'Nilana','Guruge','staff5@gmail.com','Customer Rep',03,'staff05');



INSERT INTO request VALUES(01,'2024.04.28','Pending',01);
INSERT INTO request VALUES(02,'2024.05.01','Pending',03);
INSERT INTO request VALUES(03,'2024.05.02','Rejected',01);
INSERT INTO request VALUES(04,'2024.05.03','Completed',04);
INSERT INTO request VALUES(05,'2024.05.04','Completed',02);


INSERT INTO admin_request VALUES(01,03);
INSERT INTO admin_request VALUES(02,04);
INSERT INTO admin_request VALUES(03,01);
INSERT INTO admin_request VALUES(04,05);
INSERT INTO admin_request VALUES(05,02);



INSERT INTO customer_policy VALUES(01,01,'2024.04.20','2025.04.19');
INSERT INTO customer_policy VALUES(01,02,'2024.04.20','2025.04.19');
INSERT INTO customer_policy VALUES(03,01,'2024.04.20','2025.04.19');
INSERT INTO customer_policy VALUES(05,01,'2024.04.20','2025.04.19');
INSERT INTO customer_policy VALUES(02,02,'2024.04.20','2025.04.19');


INSERT INTO inquiry VALUES(01,DEFAULT,'I want to know more about insurance policies','user1@gmail.com',1);
INSERT INTO inquiry VALUES(02,'2024.04.30','How about the charges for the policies?','user3@gmail.com',3);
INSERT INTO inquiry VALUES(03,'2024.04.30','How can I register to the system?','user4@gmail.com',4);
INSERT INTO inquiry VALUES(04,'2024.04.30','I want to add a new policy.How can I do that?','user5@gmail.com',5);
INSERT INTO inquiry VALUES(05,'2024.04.30','I want to delete my account','user2@gmail.com',2);



INSERT INTO `payment` (`PmtID`, `PmtDate`, `Amount`, `Type`, `CID`) VALUES(NULL, '2024-02-25', '50000', 'Credit Card', '3'), 
									  (NULL, '2024-03-25', '1000000', 'Bank transfer', '1'), 
									  (NULL, '2024-01-20', '2000000', 'Credit Card', '4'), 
									  (NULL, '2024-04-15', '50000', 'Credit Card', '5'), 
									  (NULL, '2024-03-31', '50000', 'Bank transfer', '2');





INSERT INTO report VALUES(01,'Monthly','2024.01.31',01);
INSERT INTO report VALUES(02,'Monthly','2024.02.29',01);
INSERT INTO report VALUES(03,'Daily','2024.03.03',01);
INSERT INTO report VALUES(04,'Monthly','2024.03.15',01);
INSERT INTO report VALUES(05,'Daily','2024.04.02',01);



INSERT INTO staff_inquiry VALUES(02,01);
INSERT INTO staff_inquiry VALUES(02,03);
INSERT INTO staff_inquiry VALUES(03,05);
INSERT INTO staff_inquiry VALUES(05,02);
INSERT INTO staff_inquiry VALUES(04,04);



INSERT INTO staff_payment VALUES(02,01);
INSERT INTO staff_payment VALUES(03,02);
INSERT INTO staff_payment VALUES(03,05);
INSERT INTO staff_payment VALUES(04,03);
INSERT INTO staff_payment VALUES(05,04);





INSERT INTO staff_phone VALUES(01,0786559879),
			      (02,0743214679),
                              (03,0724445556),
                              (04,0787064422),
                              (05,0784264422);






INSERT INTO vehicle VALUES(01,'008Hjkl9Tcx32','CBD-8747','Honda','Vezel','1499cc','Hybrid','2018',01),
			  (02,'P1Ty7uI0998','BHS-2702','Bajaj','Pulsar','125cc','Petrol','2018',05),
			  (03,'a432TYh7668','KA-2835','Suzuki','Maruti','800cc','Petrol','2010',02),
                          (04,'sTY87uy6645','CAD-2730','Toyota','Axio','1499cc','Petrol','2014',03),
                          (05,'NP8QloJHuym','KN-4837','Toyota','Passo','1000cc','Petrol','2012',04);


        
