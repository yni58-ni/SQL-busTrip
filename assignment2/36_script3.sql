USE 36_assign2db;
-- ---------
-- QUERY 1
SELECT tripName FROM busTrip WHERE county ='Italy';
-- ---------
-- QUERY 2
SELECT DISTINCT (lastName) FROM passenger;
-- ---------
-- QUERY 3
SELECT * FROM busTrip ORDER BY tripName;
-- ---------
-- QUERY 4
SELECT tripName,county,start FROM busTrip WHERE start > '2022-04-30';
-- ---------
-- QUERY 5
SELECT firstName,lastName,birth FROM passenger,passport where passenger.passportNum = passport.passportNum AND passport.citizenship ='USA';
-- ---------
-- QUERY 5
SELECT tripName,capacity FROM busTrip,bus WHERE bus.plateNum = busTrip.plateNum AND busTrip.start >'2022-04-01';
-- ---------
-- QUERY 7
SELECT * FROM passport,passenger WHERE passenger.passportNum = passport.passportNum AND passport.expiry < DATE_ADD(CURDATE(),INTERVAL 1 YEAR);
-- ---------
-- QUERY 8
SELECT firstName,lastName,tripName FROM passenger,booking,busTrip WHERE passenger.pID = booking.pID AND busTrip.tripID = booking.tripID and passenger.lastName LIKE 'S%';
-- ---------
-- QUERY 9
SELECT tripName,busTrip.tripID,COUNT(*) as count FROM busTrip,booking WHERE busTrip.tripName ='Castles of Germany' AND busTrip.tripID =booking.tripID GROUP BY tripName;
-- ---------
-- QUERY 10
SELECT busTrip.county,SUM(booking.price) FROM booking,busTrip WHERE busTrip.tripID = booking.tripID GROUP BY booking.tripID;
-- ---------
-- QUERY 11
SELECT firstName,lastName,citizenship,tripName,county FROM passenger,busTrip,passport WHERE passenger.pID IN(SELECT pID FROM booking)AND passport.citizenship NOT IN (SELECT county FROM busTrip WHERE busTrip.tripID =booking.tripID);
-- ---------
-- QUERY 12
SELECT busTrip.tripID,tripName FROM busTrip WHERE busTrip.tripID NOT IN(SELECT booking.tripID FROM booking);
-- ---------
-- QUERY 13
CREATE VIEW topSpender AS SELECT firstName,lastName,citizenship,price FROM passenger,passport,booking WHERE passenger.pID IN(SELECT pID FROM booking) AND passport.passportNum = passenger.passportNum;
-- ---------
-- QUERY 14
SELECT tripName FROM busTrip,booking WHERE busTrip.tripID = booking.tripID GROUP BY tripName HAVING COUNT(*) <4;
-- ---------
-- QUERY 15
SELECT tripName as Bus Trip Name,SUM(booking.pID) as Current Number of passenger,capacity as Capacity of Assigned Bus,plateNum as Current Bus Assigned License Plate FROM bus,busTrip,booking;

