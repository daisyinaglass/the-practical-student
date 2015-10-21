CREATE TABLE USERS (Username CHAR(25) NOT NULL, Password VARCHAR(100) NOT NULL, FirstName CHAR(20), 
	LastName CHAR(30), Email VARCHAR(50), AddressLine1 VARCHAR(50), AddressLine2 VARCHAR(50),
	City CHAR(20), State CHAR(3), Zip CHAR(4), StaffMember CHAR(1),
	PRIMARY KEY (Username));

INSERT INTO USERS VALUES ('annamarie', 'password', 'Anna', 'Marie', 'annamarie@gmail.com', '123 South St', '', 'Murdoch', 'WA', '6150', 'Y');