CREATE TABLE Non_Profit_Organization (
	Organization_ID CHAR(6), 
	Organization_Name VARCHAR(30),
	Focus VARCHAR(20),
	PRIMARY KEY (Organization_ID)
);


CREATE TABLE ContactInfo (
	Phone VARCHAR(11),
	Postal_Code CHAR(6), 
	City VARCHAR(20),
	Street_Address VARCHAR(20),
	Email VARCHAR(50),
	PRIMARY KEY (Phone)
);


CREATE TABLE NPOContactInfo (
	Organization_ID CHAR(6),
	Phone VARCHAR(11),
	PRIMARY KEY (Organization_ID,Phone),
	FOREIGN KEY (Organization_ID) REFERENCES Non_Profit_Organization(Organization_ID)
		ON DELETE CASCADE,
	FOREIGN KEY (Phone) REFERENCES ContactInfo(Phone)
	);

CREATE TABLE Charity (
	Organization_ID CHAR(6),
	Funding REAL,
	PRIMARY KEY (Organization_ID),
	FOREIGN KEY (Organization_ID) REFERENCES Non_Profit_Organization
		ON DELETE CASCADE
);


CREATE TABLE Animal_Adoption_Center (
	Organization_ID CHAR(6),
	Number_Of_Animals INTEGER,
	PRIMARY KEY (Organization_ID),
	FOREIGN KEY (Organization_ID) REFERENCES Non_Profit_Organization
		ON DELETE CASCADE
);

CREATE TABLE Sheltered_Animal ( 
	Animal_ID CHAR(6), 
	Organization_ID CHAR(6),
	Name VARCHAR(20),
	Age INTEGER,
	Gender CHAR(1), 
	Breed VARCHAR(20),
	Personality VARCHAR(20), 
	Health_Considerations VARCHAR(20), 
	Intake_Date DATE,
	Price REAL,
	PRIMARY KEY (Animal_ID, Organization_ID),
	FOREIGN KEY (Organization_ID) REFERENCES Non_Profit_Organization
		ON DELETE CASCADE
);

CREATE TABLE Cat (
	Animal_ID CHAR(6),
	Organization_ID CHAR(6),
	Declawed CHAR(1), 
	PRIMARY KEY (Animal_ID),
	FOREIGN KEY (Animal_ID,Organization_ID) REFERENCES Sheltered_Animal(Animal_ID,Organization_ID)
		ON DELETE CASCADE
);

CREATE TABLE Dog (
	Animal_ID CHAR(6),
	Organization_ID CHAR(6),
	Weight INTEGER, 
	PRIMARY KEY (Animal_ID),
	FOREIGN KEY (Animal_ID,Organization_ID) REFERENCES Sheltered_Animal(Animal_ID,Organization_ID)
		ON DELETE CASCADE
);

CREATE TABLE Person (
	User_ID CHAR(6), 
	Name VARCHAR(20),
	PRIMARY KEY (User_ID)
);

CREATE TABLE Animal_Shortlist (
	User_ID CHAR(6),
	Animal_ID CHAR(6),
	Organization_ID CHAR(6),
	PRIMARY KEY (User_ID,Animal_ID),
	FOREIGN KEY (User_ID) references Person
		ON DELETE CASCADE,
	FOREIGN KEY (Animal_ID,Organization_ID) REFERENCES Sheltered_Animal(Animal_ID,Organization_ID)
		ON DELETE SET NULL
);

CREATE TABLE Administrators (
	User_ID CHAR(6),
	PRIMARY KEY (User_ID),
	FOREIGN KEY (User_ID) references Person
		ON DELETE CASCADE
);

CREATE TABLE Regular_User (
	User_ID CHAR(6),
	Donation_Total INTEGER,
	PRIMARY KEY (User_ID),
	FOREIGN KEY (User_ID) references Person
		ON DELETE CASCADE
);

CREATE TABLE PersonContactInfo (
	User_ID CHAR(6),
	Phone VARCHAR(11),
	PRIMARY KEY (User_ID,Phone),
	FOREIGN KEY (User_ID) REFERENCES Person
		ON DELETE CASCADE,
	FOREIGN KEY (Phone) REFERENCES ContactInfo(Phone)
	);

CREATE TABLE Donors (
	User_ID CHAR(6),
	Organization_ID CHAR(6),
	Amount REAL,
	PRIMARY KEY (User_ID, Organization_ID, Amount),
	FOREIGN KEY (User_ID) REFERENCES Person
		ON DELETE SET NULL,
	FOREIGN KEY (Organization_ID) REFERENCES Non_Profit_Organization
		ON DELETE CASCADE
);

CREATE TABLE Adopters (
	User_ID CHAR(6),
	Animal_ID CHAR(6),
	Organization_ID CHAR(6),
	Adoption_Date Date,
	PRIMARY KEY (User_ID, Animal_ID),
	FOREIGN KEY (User_ID) REFERENCES Person
		ON DELETE CASCADE,
	FOREIGN KEY (Animal_ID, Organization_ID) REFERENCES Sheltered_Animal(Animal_ID, Organization_ID)
		ON DELETE SET NULL
);


CREATE TABLE NPO_Shortlist (
	User_ID CHAR(6),
	Organization_ID CHAR(6),
	PRIMARY KEY (User_ID,Organization_ID),
	FOREIGN KEY (User_ID) references Person(User_ID)
		ON DELETE CASCADE,
	FOREIGN KEY (Organization_ID) REFERENCES Non_Profit_Organization(Organization_ID)
		ON DELETE SET NULL
);


CREATE TABLE NPO_Admin (
	User_ID CHAR(6),
	Organization_ID CHAR(6),
	PRIMARY KEY (User_ID,Organization_ID),
	FOREIGN KEY (User_ID) references Person(User_ID)
		ON DELETE CASCADE,
	FOREIGN KEY (Organization_ID) REFERENCES Non_Profit_Organization
		ON DELETE SET NULL
);
