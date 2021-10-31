USE 36_assign2db;
CREATE VIEW pplOnTrip AS SELECT firstName,lastName,tripName,price FROM passenger,busTrip,booking WHERE passenger.pID = booking.pID AND busTrip.tripID = booking.tripID;
SELECT* FROM pplOnTrip;
SELECT firstName,lastName,tripName,price FROM pplOnTrip WHERE tripName LIKE "%Castles%";
SELECT * FROM bus;
DELETE FROM bus WHERE plateNum LIKE "%UWO%";
SELECT * FROM bus;
SELECT * FROM passport;
SELECT * FROM passenger;
DELETE FROM passenger WHERE passportNum IN(SELECT passportNum FROM passport WHERE citizenship = "Canada");
SELECT * FROM passport;
-- ---------
-- The reason why this can work becasue ON DELETE CASCADE is allow a parent row be deleted after a child row be delete
SELECT * FROM busTrip;
DELETE FROM busTrip WHERE tripName = 'California Wines';
SELECT * FROM busTrip;
DELETE FROM busTrip WHERE tripName ='Arrivaderci Roma';
-- ---------
-- The reason why this cannot be deleted is because the trip is been booked so it is referened by another table
SELECT * FROM passenger;
DELETE FROM passenger WHERE firstName = 'Pam';
SELECT * FROM passenger;
SELECT* FROM pplOnTrip;
DELETE FROM booking WHERE pID IN (SELECT pID FROM passenger WHERE passenger.lastName ='Simpson');
SELECT* FROM pplOnTrip;
