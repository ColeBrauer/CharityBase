CREATE TABLE Sheltered_Animal( 
	Animal_ID CHAR(6), --will be 3______
	Poster_ID CHAR(6),
	Adoption_Status BIT, --1=available, 0=taken
	Name CHAR(20),
	Age INTEGER,
	-- Picture IMAGE, Will do this in code-> if breed =cat, show default pic of cat, otherwise, show dfault pic of dog
	Gender CHAR(1), --M=male, F=female
	Breed CHAR(20),
	Personality CHAR(20), --For simplicity, this will be one word of most defining trait(Quiet, Angry, Energetic, etc.)- just make sure there is matching desc in Animal-price table
	Health_Considerations CHAR(20), --Same as above
	Intake_Date DATE,
	CONSTRAINT ShelteredAnimalKey PRIMARY KEY (Animal_ID, Organization_ID),
	FOREIGN KEY (Organization_ID) REFERENCES Non_Profit_Organization
		ON DELETE CASCADE,
	FOREIGN KEY (Age) REFERENCES Animal_Price
		ON DELETE SET NULL,
	FOREIGN KEY (Breed) REFERENCES Animal_Price
		ON DELETE SET NULL,
	FOREIGN KEY (Health_Considerations) REFERENCES Animal_Price
		ON DELETE SET NULL
);
INSERT INTO Sheltered_Animal(Animal_ID,Organization_ID,Adoption_Status,Name,Age,Gender,Breed,Personality,Health_Considerations,Intake_Date)
VALUES(300000,100001,0,"Miley",5,F,"Cat","Quiet","Asthma", "2017-12-30");
INSERT INTO Sheltered_Animal(Animal_ID,Organization_ID,Adoption_Status,Name,Age,Gender,Breed,Personality,Health_Considerations,Intake_Date)
VALUES(300001,200000,1,"Max",2,M,"German Shepherd","Aggresive","None", "2019-08-14");


CREATE TABLE Animal_Price(
	Breed CHAR(20), 
	Health_Considerations CHAR (20),
	Adoption_Fee REAL, 
	CONSTRAINT AnimalPriceKey PRIMARY KEY (Breed, Health_Considerations)
);
INSERT INTO Animal_Price(Breed,Health_Considerations,Adoption_Fee)
VALUES ("Cat","Asthma", 19.99);
INSERT INTO Animal_Price(Breed,Health_Considerations,Adoption_Fee)
VALUES ("German Shepherd","None", 499.99);

CREATE TABLE Cat(
	Animal_ID CHAR(6),
	Declawed BIT, --1=yes, 0=no
	CONSTRAINT CatKey PRIMARY KEY (Animal_ID),
	FOREIGN KEY (Animal_ID) REFERENCES Sheltered_Animal
		ON DELETE CASCADE
);
INSERT INTO Cat(Animal_ID,Declawed)
VALUES(300000,1);


CREATE TABLE Dog(
	Animal_ID CHAR(6),
	Weight INTEGER, --in pounds
	CONSTRAINT DogKey PRIMARY KEY (Animal_ID),
	FOREIGN KEY (Animal_ID) REFERENCES Sheltered_Animal
		ON DELETE CASCADE
);
INSERT INTO Dog(Animal_ID,Weight)
VALUES(300001, 40);


CREATE TABLE Animal_Shortlist(
	Interested_User CHAR(6),
	Shortlisted_Animal CHAR(6),
	CONSTRAINT AnimalShortlist PRIMARY KEY(Interested_User,Shortlisted_Animal),
	FOREIGN KEY (Interested_User) references Person
		ON DELETE CASCADE,
	FOREIGN KEY (Shorlisted_Animal) REFERENCES Sheltered_Animal
		ON DELETE SET NULL
);
INSERT INTO Animal_Shortlist(Interested_User,Shorlisted_Animal)
VALUES(100001, 300000);


CREATE TABLE Person(
	User_ID CHAR(6), --1______
	Name CHAR(20),
	CONSTRAINT UserKey PRIMARY KEY (User_ID),
);
INSERT INTO Person(User_ID,Name,Postal_Code,Email_Address,Phone)
VALUES(100000, "Admin", "000000","Admin@hotmail.com", "6045555555");
INSERT INTO Person(User_ID,Name,Postal_Code,Email_Address,Phone)
VALUES(100001, "Jeff Bach");

CREATE TABLE PersonContactInfo(
	Person_ID CHAR(6),
	Phone CHAR(11),
	CONSTRAINT PersonContactInfoKey PRIMARY KEY(NPO_ID,Phone),
	FOREIGN KEY (Person_ID) REFERENCES Person
		ON DELETE CASCADE
	FOREIGN KEY(Phone) REFERENCES ContactInfo
	);
INSERT INTO PersonContactInfo(Person_ID,Phone)
VALUES(100001, "6045555555");

CREATE TABLE Administrators(
	User_ID CHAR(6),
	CONSTRAINT AdministratorsKey PRIMARY KEY(User_ID),
	FOREIGN KEY (User_ID) references Person
		ON DELETE CASCADE
);
INSERT INTO Administrators(User_ID)
VALUES(100000);


CREATE TABLE Regular_User(
	User_ID CHAR(6),
	Animal_Adopted CHAR(6),
	Donation_Total INTEGER,
	CONSTRAINT RegularUserKey PRIMARY KEY(User_ID),
	FOREIGN KEY (User_ID) references Person
		ON DELETE CASCADE,
	FOREIGN KEY (Animal_Adopted) REFERENCES Sheltered_Animal
		ON DELETE SET NULL
);
INSERT INTO Regular_User(User_ID,Animal_Adopted,Donation_Total)
VALUES(100001, 300000, NULL);


CREATE TABLE Donors(
	User_ID CHAR(6),
	Organization_ID CHAR(6),
	Amount REAL,
	CONSTRAINT DonorKey PRIMARY KEY (User_ID, Organization_ID, Amount),
	FOREIGN KEY (User_ID) REFERENCES Person
		ON DELETE SET NULL,
	FOREIGN KEY (Organization_ID) REFERENCES Non_Profit_Organization
		ON DELETE CASCADE
);
INSERT INTO Donors(User_ID,Organization_ID,Amount)
VALUES(100000,200000,50);


CREATE TABLE Adopters(
	User_ID CHAR(6),
	Animal_Adopted CHAR(6),
	Adoption_Date Date,
	CONSTRAINT AdoptersKey PRIMARY KEY (User_ID, Animal_Adopted),
	FOREIGN KEY (User_ID) REFERENCES Person
		ON DELETE CASCADE,
	FOREIGN KEY (Animal_Adopted) REFERENCES Sheltered_Animal
		ON DELETE SET NULL
);
INSERT INTO Adopters(User_ID, Animal_Adopted, Adoption_Date)
VALUES(100001,300000,"2019-06-16");


CREATE TABLE Non_Profit_Organization(
	Organization_ID CHAR(6), --2______
	Organization_Name CHAR(20),
	CONSTRAINT NonProfitOrganizationKey PRIMARY KEY (Organization_ID),
	FOREIGN KEY (Organization_Name) REFERENCES Organization_Focus
);
INSERT INTO Non-Profit-Organization(Organization_ID,Organization_Name,Postal_Code,Phone,Email_Address)
VALUES(200000,"World Wildlife Fund");

CREATE TABLE NPOContactInfo(
	NPO_ID CHAR(6),
	Phone CHAR(11),
	CONSTRAINT NPOContactInfoKey PRIMARY KEY(NPO_ID,Phone),
	FOREIGN KEY (NPO_ID) REFERENCES Non_Profit_Organization
		ON DELETE CASCADE
	FOREIGN KEY(Phone) REFERENCES ContactInfo
	);

CREATE TABLE ContactInfo(
	Phone CHAR(11),
	Postal_Code CHAR(6), 
	City CHAR(20),
	Street_Address CHAR(20),
	Email CHAR(20),
	CONSTRAINT ContactInfoKey PRIMARY KEY (Phone)
);
INSERT INTO Address(Phone,Postal_Code,City,City,Street_Address,Email)
VALUES("180096600993","97180","Washington", "1250 24th Street","membership@wwfus.org")
;
INSERT INTO Address(Phone,Postal_Code,City,Street_Address,Email)
VALUES("6045555555","V5S8C1","Vancouver", "1111 1st Street","Jeff@hotmail.com")
;

CREATE TABLE Organization_Focus(
	Organization_Name CHAR(20),
	Area_Of_Focus VARCHAR,
	CONSTRAINT OrganizationFocusKey PRIMARY KEY (Organization_Name,Area_Of_Focus)
);
INSERT INTO Organization_Focus(Organization_Name, Area_Of_Focus)
VALUES("World Wildlife Fund", "Environment"); --Will have more entries for WWf as they also are in animal adoption too


CREATE TABLE Charity(
	Organization_ID CHAR(6),
	Funding REAL,
	CONSTRAINT CharityKey PRIMARY KEY (Organization_ID),
	FOREIGN KEY (Organization_ID) REFERENCES Non_Profit_Organization
		ON DELETE CASCADE
);
INSERT INTO Charity(Organization_ID, Funding)
VALUES(200000, 574867.72);


CREATE TABLE Animal_Adoption_Center(
	Organization_ID CHAR(6),
	Number_Of_Animals INTEGER,
	CONSTRAINT AnimalAdoptionCenterKey PRIMARY KEY (Organization_ID),
	FOREIGN KEY (Organization_ID) REFERENCES Non_Profit_Organization
		ON DELETE CASCADE
);
INSERT INTO Animal_Adoption_Center(Organization_ID,Number_Of_Animals)
VALUES(200000, 122);


CREATE TABLE Posted_For_Adoption(
	Organization_ID CHAR(6),
	Posted_Animal CHAR(6),
	Breed     CHAR(20),
	Posted_Date Date,
	CONSTRAINT PostedKey PRIMARY KEY(Organization_ID,Posted_Animal),
	FOREIGN KEY (Organization_ID) references Animal_Adoption_Center
		ON DELETE CASCADE,
	FOREIGN KEY (Posted_Animal) REFERENCES Sheltered_Animal
		ON DELETE CASCADE
);
INSERT INTO Posted_For_Adoption(Organization_ID,Posted_Animal,Breed,Posted_Date)
VALUES(300000,10000, "Cat", "2017-12-30");

CREATE TABLE NPO_Shortlist(
	Interested_User CHAR(6),
	Shortlisted_NPO CHAR(6),
	CONSTRAINT NPOShortlist PRIMARY KEY(Interested_User,Shortlisted_NPO),
	FOREIGN KEY (Interested_User) references Person
		ON DELETE CASCADE,
	FOREIGN KEY (Shorlisted_NPO) REFERENCES Non_Profit_Organization
		ON DELETE SET NULL
);
INSERT INTO NPO_Shortlist(Interested_User,Shorlisted_NPO)
VALUES(100001,200000);


CREATE TABLE NPO_Admin(
	Admin_ID CHAR(6),
	Organization_ID CHAR(6),
	CONSTRAINT NPOAdminKey PRIMARY KEY(Admin_ID,Organization_ID),
	FOREIGN KEY (Admin_ID) references Person
		ON DELETE CASCADE,
	FOREIGN KEY (Organization_ID) REFERENCES Non_Profit_Organization
		ON DELETE SET NULL
);
INSERT INTO NPO_Admin(Admin_ID, Organization_ID)
VALUES(100000,300000);
