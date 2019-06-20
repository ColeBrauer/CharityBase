/* Creating all tables */
CREATE TABLE Non_Profit_Organization (
	Organization_ID CHAR(6), 
	Organization_Name CHAR(30),
	Focus CHAR(20),
	PRIMARY KEY (Organization_ID)
);


CREATE TABLE ContactInfo (
	Phone CHAR(11),
	Postal_Code CHAR(6), 
	City CHAR(20),
	Street_Address CHAR(20),
	Email CHAR(50),
	PRIMARY KEY (Phone)
);


CREATE TABLE NPOContactInfo (
	Organization_ID CHAR(6),
	Phone CHAR(11),
	PRIMARY KEY (Organization_ID,Phone),
	FOREIGN KEY (Organization_ID) REFERENCES Non_Profit_Organization(Organization_ID)
		ON DELETE CASCADE,
	FOREIGN KEY (Phone) REFERENCES ContactInfo(Phone)
	);

CREATE TABLE Charity (
	Organization_ID CHAR(6),
	Funding REAL,
	PRIMARY KEY (Organization_ID),
	FOREIGN KEY (Organization_ID) REFERENCES Non_Profit_Organization(Organization_ID)
		ON DELETE CASCADE
);


CREATE TABLE Animal_Adoption_Center (
	Organization_ID CHAR(6),
	Number_Of_Animals INTEGER,
	PRIMARY KEY (Organization_ID),
	FOREIGN KEY (Organization_ID) REFERENCES Non_Profit_Organization(Organization_ID)
		ON DELETE CASCADE
);

CREATE TABLE Sheltered_Animal ( 
	Animal_ID CHAR(6), 
	Organization_ID CHAR(6),
	Name CHAR(20),
	Age INTEGER,
	Gender CHAR(1), 
	Breed CHAR(20),
	Personality CHAR(20), 
	Health_Considerations CHAR(20), 
	Intake_Date DATE,
	Price REAL,
	PRIMARY KEY (Animal_ID, Organization_ID),
	FOREIGN KEY (Organization_ID) REFERENCES Non_Profit_Organization(Organization_ID)
		ON DELETE CASCADE
);

CREATE TABLE Cat (
	Animal_ID CHAR(6),
	Organization_ID CHAR(6),
	Declawed CHAR(1), 
	PRIMARY KEY (Animal_ID),
	FOREIGN KEY (Animal_ID) REFERENCES Sheltered_Animal(Animal_ID)
		ON DELETE CASCADE,
	FOREIGN KEY (Organization_ID) REFERENCES Sheltered_Animal(Organization_ID)
		ON DELETE CASCADE
);

CREATE TABLE Dog (
	Animal_ID CHAR(6),
	Organization_ID CHAR(6),
	Weight INTEGER, 
	PRIMARY KEY (Animal_ID),
	FOREIGN KEY (Animal_ID) REFERENCES Sheltered_Animal(Animal_ID)
		ON DELETE CASCADE,
	FOREIGN KEY (Organization_ID) REFERENCES Sheltered_Animal(Organization_ID)
		ON DELETE CASCADE
);

CREATE TABLE Person (
	User_ID CHAR(6), 
	Name CHAR(20),
	PRIMARY KEY (User_ID)
);

CREATE TABLE Animal_Shortlist (
	User_ID CHAR(6),
	Animal_ID CHAR(6),
	Organization_ID CHAR(6),
	PRIMARY KEY (User_ID,Animal_ID),
	FOREIGN KEY (User_ID) references Person
		ON DELETE CASCADE,
	FOREIGN KEY (Animal_ID) REFERENCES Sheltered_Animal(Animal_ID)
		ON DELETE CASCADE,
	FOREIGN KEY (Organization_ID) REFERENCES Sheltered_Animal(Organization_ID)
		ON DELETE CASCADE
);

CREATE TABLE Administrators (
	User_ID CHAR(6),
	PRIMARY KEY (User_ID),
	FOREIGN KEY (User_ID) references Person(User_ID)
		ON DELETE CASCADE
);

CREATE TABLE Regular_User (
	User_ID CHAR(6),
	Donation_Total INTEGER,
	PRIMARY KEY (User_ID),
	FOREIGN KEY (User_ID) references Person(User_ID)
		ON DELETE CASCADE
);

CREATE TABLE PersonContactInfo (
	User_ID CHAR(6),
	Phone CHAR(11),
	PRIMARY KEY (User_ID,Phone),
	FOREIGN KEY (User_ID) REFERENCES Person(User_ID)
		ON DELETE CASCADE,
	FOREIGN KEY (Phone) REFERENCES ContactInfo(Phone)
	);

CREATE TABLE Donors (
	User_ID CHAR(6),
	Organization_ID CHAR(6),
	Amount REAL,
	PRIMARY KEY (User_ID, Organization_ID, Amount),
	FOREIGN KEY (User_ID) REFERENCES Person(User_ID)
		ON DELETE SET NULL,
	FOREIGN KEY (Organization_ID) REFERENCES Non_Profit_Organization(Organization_ID)
		ON DELETE CASCADE
);

CREATE TABLE Adopters (
	User_ID CHAR(6),
	Animal_ID CHAR(6),
	Organization_ID CHAR(6),
	Adoption_Date Date,
	PRIMARY KEY (User_ID, Animal_ID),
	FOREIGN KEY (User_ID) REFERENCES Person(User_ID)
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
	FOREIGN KEY (Organization_ID) REFERENCES Non_Profit_Organization(Organization_ID) 
		ON DELETE SET NULL
);

/* Populating each table with tuples */
INSERT INTO Person(User_ID,Name)
VALUES(110000,'Admin1');
INSERT INTO Person(User_ID,Name)
VALUES(120000,'Admin2');
INSERT INTO Person(User_ID,Name)
VALUES(130000,'Admin3');


INSERT INTO Person(User_ID,Name)
VALUES(100001,'Ben Anas');
INSERT INTO Person(User_ID,Name)
VALUES(100002,'Danielle Soloud');
INSERT INTO Person(User_ID,Name)
VALUES(100003,'Anita Man');
INSERT INTO Person(User_ID,Name)
VALUES(100004,'Diane Toluvia');
INSERT INTO Person(User_ID,Name)
VALUES(100005,'Pat Taytow');


INSERT INTO ContactInfo(Phone,Postal_Code,City,Street_Address,Email)
VALUES('6041112345','V5S8C1','Vancouver', '1111 1st St','benanas@hotmail.com');
INSERT INTO ContactInfo(Phone,Postal_Code,City,Street_Address,Email)
VALUES('6042222345','V5S8C2','Vancouver', '2222 2nd St','d.soloud@gmail.com');
INSERT INTO ContactInfo(Phone,Postal_Code,City,Street_Address,Email)
VALUES('6043332345','V5S8C3','Vancouver', '3333 3rd St','anita_man@yahoo.com');
INSERT INTO ContactInfo(Phone,Postal_Code,City,Street_Address,Email)
VALUES('6044442345','V5S8C4','Vancouver', '4444 4th St','diane.toluvia@outlook.com');
INSERT INTO ContactInfo(Phone,Postal_Code,City,Street_Address,Email)
VALUES('6045552345','V5S8C5','Vancouver', '5555 5th St','taytow.pat@hotmail.com');


INSERT INTO ContactInfo(Phone,Postal_Code,City,Street_Address,Email)
VALUES('18009600993','97180','Washington', '1250 24th St','membership@wwfus.org');
INSERT INTO ContactInfo(Phone,Postal_Code,City,Street_Address,Email)
VALUES('4356442001','84741','Kanab', '5001 Angel Canyon Rd','info@bestfriends.org');
INSERT INTO ContactInfo(Phone,Postal_Code,City,Street_Address,Email)
VALUES('2404821980','20814','Bethesdda', '7920 Norfolk Ave','donate@alleycat.org');
INSERT INTO ContactInfo(Phone,Postal_Code,City,Street_Address,Email)
VALUES('7023843333','89101','Las Vegas', '655 North Mojave Rd','adoptions@animalfoundation.org');
INSERT INTO ContactInfo(Phone,Postal_Code,City,Street_Address,Email)
VALUES('2036560267','06820','Darien', '777 Post Rd','info@friendsofanimals.com');


INSERT INTO PersonContactInfo(User_ID,Phone)
VALUES(100001,'6041112345');
INSERT INTO PersonContactInfo(User_ID,Phone)
VALUES(100002,'6042222345');
INSERT INTO PersonContactInfo(User_ID,Phone)
VALUES(100003,'6043332345');
INSERT INTO PersonContactInfo(User_ID,Phone)
VALUES(100004,'6044442345');
INSERT INTO PersonContactInfo(User_ID,Phone)
VALUES(100005,'6045552345');


INSERT INTO Regular_User(User_ID,Donation_Total)
VALUES(100001,25);
INSERT INTO Regular_User(User_ID,Donation_Total)
VALUES(100002,500);
INSERT INTO Regular_User(User_ID,Donation_Total)
VALUES(100003,100);
INSERT INTO Regular_User(User_ID,Donation_Total)
VALUES(100004,50);
INSERT INTO Regular_User(User_ID,Donation_Total)
VALUES(100005,125);


INSERT INTO Administrators(User_ID)
VALUES(110000);
INSERT INTO Administrators(User_ID)
VALUES(120000);
INSERT INTO Administrators(User_ID)
VALUES(130000);


INSERT INTO Non_Profit_Organization(Organization_ID,Organization_Name,Focus)
VALUES(200000,'World Wildlife Fund','Environment');
INSERT INTO Non_Profit_Organization(Organization_ID,Organization_Name,Focus)
VALUES(200001,'Best Friends Animal Society','Animal Helpline');
INSERT INTO Non_Profit_Organization(Organization_ID,Organization_Name,Focus)
VALUES(200002,'Alley Cat Allies','Cat Advocacy');
INSERT INTO Non_Profit_Organization(Organization_ID,Organization_Name,Focus)
VALUES(200003,'The Animal Foundation','Humane Education');
INSERT INTO Non_Profit_Organization(Organization_ID,Organization_Name,Focus)
VALUES(200004,'Friends of Animals','Community Outreach');

INSERT INTO Non_Profit_Organization(Organization_ID,Organization_Name,Focus)
VALUES(200005,'BC SPCA','Animals');

INSERT INTO Non_Profit_Organization(Organization_ID,Organization_Name,Focus)
VALUES(200006,'Big Cat Rescue','Animals');

INSERT INTO NPOContactInfo(Organization_ID,Phone)
VALUES(200000,'18009600993');
INSERT INTO NPOContactInfo(Organization_ID,Phone)
VALUES(200001,'4356442001');
INSERT INTO NPOContactInfo(Organization_ID,Phone)
VALUES(200002,'2404821980');
INSERT INTO NPOContactInfo(Organization_ID,Phone)
VALUES(200003,'7023843333');
INSERT INTO NPOContactInfo(Organization_ID,Phone)
VALUES(200004,'2036560267');


INSERT INTO Animal_Adoption_Center(Organization_ID,Number_Of_Animals)
VALUES(200000, 122);
INSERT INTO Animal_Adoption_Center(Organization_ID,Number_Of_Animals)
VALUES(200001, 73);
INSERT INTO Animal_Adoption_Center(Organization_ID,Number_Of_Animals)
VALUES(200002, 58);
INSERT INTO Animal_Adoption_Center(Organization_ID,Number_Of_Animals)
VALUES(200003, 134);
INSERT INTO Animal_Adoption_Center(Organization_ID,Number_Of_Animals)
VALUES(200004, 61);


INSERT INTO Sheltered_Animal(Animal_ID,Organization_ID,Name,Age,Gender,Breed,Personality,Health_Considerations,Intake_Date,Price)
VALUES(300000,200002,'Miley',5,'F','Ragdoll','Quiet','Asthma',TO_DATE('30-DEC-2017','DD-MON-YYYY'),149.99);
INSERT INTO Sheltered_Animal(Animal_ID,Organization_ID,Name,Age,Gender,Breed,Personality,Health_Considerations,Intake_Date,Price)
VALUES(300001,200003,'Pepper',4,'F','Munchkin','Independent','None',TO_DATE('23-JAN-2019','DD-MON-YYYY'),349.99);
INSERT INTO Sheltered_Animal(Animal_ID,Organization_ID,Name,Age,Gender,Breed,Personality,Health_Considerations,Intake_Date,Price)
VALUES(300005,200004,'Waffles',2,'F','Scottish Fold','Friendly','None',TO_DATE('26-NOV,2018','DD-MON-YYYY'),299.99);
INSERT INTO Sheltered_Animal(Animal_ID,Organization_ID,Name,Age,Gender,Breed,Personality,Health_Considerations,Intake_Date,Price)
VALUES(300006,200001,'Oreo',4,'M','Himalayan','Laidback','Obesity',TO_DATE('23-DEC-2017','DD-MON-YYYY'),249.99);
INSERT INTO Sheltered_Animal(Animal_ID,Organization_ID,Name,Age,Gender,Breed,Personality,Health_Considerations,Intake_Date,Price)
VALUES(300008,200001,'Otis',6,'M','American Shorthair','Quiet','None',TO_DATE('07-FEB-2017','DD-MON-YYYY'),249.99);

INSERT INTO Sheltered_Animal(Animal_ID,Organization_ID,Name,Age,Gender,Breed,Personality,Health_Considerations,Intake_Date,Price)
VALUES(300002,200004,'Max',2,'F','German Shepherd','Aggressive','None',TO_DATE('14-JUN-2019','DD-MON-YYYY'),499.99);
INSERT INTO Sheltered_Animal(Animal_ID,Organization_ID,Name,Age,Gender,Breed,Personality,Health_Considerations,Intake_Date,Price)
VALUES(300003,200003,'Milo',3,'M','Corgi','Timid','Hip Dysplasia',TO_DATE('29-MAY-2018','DD-MON-YYYY'),349.99);
INSERT INTO Sheltered_Animal(Animal_ID,Organization_ID,Name,Age,Gender,Breed,Personality,Health_Considerations,Intake_Date,Price)
VALUES(300004,200001,'Buddy',3,'M','Golden Retriever','Energetic','None',TO_DATE('17-APR-2019','DD-MON-YYYY'),499.99);
INSERT INTO Sheltered_Animal(Animal_ID,Organization_ID,Name,Age,Gender,Breed,Personality,Health_Considerations,Intake_Date,Price)
VALUES(300007,200001,'Bubba',5,'M','Pug','Laidback','Obesity',TO_DATE('22-NOV-2018','DD-MON-YYYY'),399.99);
INSERT INTO Sheltered_Animal(Animal_ID,Organization_ID,Name,Age,Gender,Breed,Personality,Health_Considerations,Intake_Date,Price)
VALUES(300009,200003,'Coco',4,'F','Maltese','Playful','None',TO_DATE('30-SEP-2018','DD-MON-YYYY'),449.99);


INSERT INTO Animal_Shortlist(User_ID,Animal_ID,Organization_ID)
VALUES(100001,300007,200001);
INSERT INTO Animal_Shortlist(User_ID,Animal_ID,Organization_ID)
VALUES(100002,300008,200001);
INSERT INTO Animal_Shortlist(User_ID,Animal_ID,Organization_ID)
VALUES(100003,300004,200001);
INSERT INTO Animal_Shortlist(User_ID,Animal_ID,Organization_ID)
VALUES(100004,300003,200003);
INSERT INTO Animal_Shortlist(User_ID,Animal_ID,Organization_ID)
VALUES(100005,300000,200002);


INSERT INTO Cat(Animal_ID,Organization_ID,Declawed)
VALUES(300000,200002,1);
INSERT INTO Cat(Animal_ID,Organization_ID,Declawed)
VALUES(300001,200003,0);
INSERT INTO Cat(Animal_ID,Organization_ID,Declawed)
VALUES(300005,200004,1);
INSERT INTO Cat(Animal_ID,Organization_ID,Declawed)
VALUES(300006,200001,1);
INSERT INTO Cat(Animal_ID,Organization_ID,Declawed)
VALUES(300008,200001,0);


INSERT INTO Charity(Organization_ID, Funding)
VALUES(200000,574867.72);
INSERT INTO Charity(Organization_ID, Funding)
VALUES(200001,79832.23);
INSERT INTO Charity(Organization_ID, Funding)
VALUES(200002,32178.12);
INSERT INTO Charity(Organization_ID, Funding)
VALUES(200003,478921.98);
INSERT INTO Charity(Organization_ID, Funding)
VALUES(200004,67421.43);


INSERT INTO Dog(Animal_ID,Organization_ID,Weight)
VALUES(300002,200004,40);
INSERT INTO Dog(Animal_ID,Organization_ID,Weight)
VALUES(300003,200003,11);
INSERT INTO Dog(Animal_ID,Organization_ID,Weight)
VALUES(300004,200001,33);
INSERT INTO Dog(Animal_ID,Organization_ID,Weight)
VALUES(300007,200001,18);
INSERT INTO Dog(Animal_ID,Organization_ID,Weight)
VALUES(300009,200003,3);


INSERT INTO Donors(User_ID,Organization_ID,Amount)
VALUES(100004,200000,50);
INSERT INTO Donors(User_ID,Organization_ID,Amount)
VALUES(100002,200004,500);
INSERT INTO Donors(User_ID,Organization_ID,Amount)
VALUES(100005,200002,125);
INSERT INTO Donors(User_ID,Organization_ID,Amount)
VALUES(100001,200003,25);
INSERT INTO Donors(User_ID,Organization_ID,Amount)
VALUES(100003,200001,100);


INSERT INTO NPO_Admin(User_ID,Organization_ID)
VALUES(110000,200000);
INSERT INTO NPO_Admin(User_ID,Organization_ID)
VALUES(110000,200002);
INSERT INTO NPO_Admin(User_ID,Organization_ID)
VALUES(120000,200003);
INSERT INTO NPO_Admin(User_ID,Organization_ID)
VALUES(130000,200001);
INSERT INTO NPO_Admin(User_ID,Organization_ID)
VALUES(130000,200004);

INSERT INTO NPO_Shortlist(User_ID,Organization_ID)
VALUES(100001,200001);
INSERT INTO NPO_Shortlist(User_ID,Organization_ID)
VALUES(100002,200001);
INSERT INTO NPO_Shortlist(User_ID,Organization_ID)
VALUES(100003,200001);
INSERT INTO NPO_Shortlist(User_ID,Organization_ID)
VALUES(100004,200003);
INSERT INTO NPO_Shortlist(User_ID,Organization_ID)
VALUES(100005,200002);


INSERT INTO Adopters(User_ID,Animal_ID,Organization_ID,Adoption_Date)
VALUES(100001,300007,200001,TO_DATE('16-JUN-2019','DD-MON-YYYY'));
INSERT INTO Adopters(User_ID,Animal_ID,Organization_ID,Adoption_Date)
VALUES(100002,300008,200001,TO_DATE('04-JUN-2019','DD-MON-YYYY'));
INSERT INTO Adopters(User_ID,Animal_ID,Organization_ID,Adoption_Date)
VALUES(100003,300004,200001,TO_DATE('29-MAY-2019','DD-MON-YYYY'));
INSERT INTO Adopters(User_ID,Animal_ID,Organization_ID,Adoption_Date)
VALUES(100004,300003,200003,TO_DATE('12-NOV-2018','DD-MON-YYYY'));
INSERT INTO Adopters(User_ID,Animal_ID,Organization_ID,Adoption_Date)
VALUES(100005,300000,200002,TO_DATE('09-MAR-2018','DD-MON-YYYY'));

