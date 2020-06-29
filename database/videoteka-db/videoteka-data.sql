-- Sakila Sample Database Data
-- Version 1.2

-- Copyright (c) 2006, 2019, Oracle and/or its affiliates.
-- All rights reserved.

-- Redistribution and use in source and binary forms, with or without
-- modification, are permitted provided that the following conditions are
-- met:

-- * Redistributions of source code must retain the above copyright notice,
--   this list of conditions and the following disclaimer.
-- * Redistributions in binary form must reproduce the above copyright
--   notice, this list of conditions and the following disclaimer in the
--   documentation and/or other materials provided with the distribution.
-- * Neither the name of Oracle nor the names of its contributors may be used
--   to endorse or promote products derived from this software without
--   specific prior written permission.

-- THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS
-- IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO,
-- THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
-- PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR
-- CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
-- EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
-- PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
-- PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
-- LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
-- NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
-- SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

SET NAMES utf8mb4;
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';
SET @old_autocommit=@@autocommit;

USE kolekcija;

--
-- Dumping data for table zanr
--

SET AUTOCOMMIT=0;
INSERT INTO zanr VALUES (1,'Akcija, avantura','2020-06-15 15:10:05'),
(2,'Animirani','2020-06-15 15:10:05'),
(3,'Dječji','2020-06-15 15:10:05'),
(4,'Dokumentarni','2020-06-15 15:10:05'),
(5,'Drama','2020-06-15 15:10:05'),
(6,'Glazbeni','2020-06-15 15:10:05'),
(7,'Horor','2020-06-15 15:10:05'),
(8,'Klasici','2020-06-15 15:10:05'),
(9,'Komedija','2020-06-15 15:10:05'),
(10,'Kriminalistički','2020-06-15 15:10:05'),
(11,'Novi','2020-06-15 15:10:05'),
(12,'Obiteljski','2020-06-15 15:10:05'),
(13,'Triler','2020-06-15 15:10:05'),
(14,'Znanstveno-fantastični','2020-06-15 15:10:05');
COMMIT;

--
-- Dumping data for table filmovi
--

SET AUTOCOMMIT=0;
INSERT INTO filmovi VALUES (1,'ANTITRUST','1','2001','144','NULL','2020-06-15 16:20:05'),
(2,'FIREWALL','1','2006','133','NULL','2020-06-15 16:20:05'),
(3,'HACKERS','9','1995','105','NULL','2020-06-15 16:20:05'),
(4,'SWORD FISH','13','2001','99','NULL','2020-06-15 16:20:05'),
(5,'TRACK DOWN','10','2000','92','NULL','2020-06-15 16:20:05'),
(6,'PIRATES of SILICON VALLEY','5','1999','95','NULL','2020-06-15 16:20:05'),
(7,'THE SOCIAL NETWORK','5','2010','151','NULL','2020-06-15 16:20:05'),
(8,'TRON','14','1982','92','NULL','2020-06-15 16:20:05'),
(9,'TRON LEGACY','14','2010','125','NULL','2020-06-15 16:20:05'),
(10,'WARGAMES','1','1983','114','NULL','2020-06-15 16:20:05');
COMMIT;

--
-- Dumping data for table filmovi_zanr
--

SET AUTOCOMMIT=0;
INSERT INTO filmovi_zanr VALUES (1,1,'2006-02-15 05:07:09'),
(2,1,'2006-02-15 05:07:09'),
(3,9,'2006-02-15 05:07:09'),
(4,13,'2006-02-15 05:07:09'),
(5,10,'2006-02-15 05:07:09'),
(6,5,'2006-02-15 05:07:09'),
(7,5,'2006-02-15 05:07:09'),
(8,14,'2006-02-15 05:07:09'),
(9,14,'2006-02-15 05:07:09'),
(10,1,'2006-02-15 05:07:09');
COMMIT;

--

SET AUTOCOMMIT=0;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
SET autocommit=@old_autocommit;
