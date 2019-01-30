CREATE TABLE userinfo (
uid SMALLINT PRIMARY KEY,
fname VARCHAR(15),
lname VARCHAR(15),
bdate DATE,
phone INTEGER CHECK(),
addr VARCHAR(30),
sex CHAR(1) CHECK(sex IN('M','F')),
);

CREATE TABLE userlogincredits(
userid SMALLINT references userinfo(uid),
email VARCHAR(75) PRIMARY KEY,
password VARCHAR(32)
);

CREATE TABLE forum(
userid SMALLINT,
postid SMALLINT PRIMARY KEY,
post VARCHAR(5000),
reply VARCHAR(2000)
);

--change password
DECLARE
@newpass VARCHAR(32)
@atuid VARCHAR(75)
UPDATE userlogincredits
SET password = @newpass
WHERE userid = @atuid;

--change phone
DECLARE
@newphone INTEGER
@uidpk SMALLINT
UPDATE userinfo
SET phone = @newphone
WHERE uid = @uidpk;

--change addr
DECLARE
@uidint SMALLINT
@newaddr VARCHAR
UPDATE uerinfo
SET addr = @newaddr
WHERE uid = @uidint ;