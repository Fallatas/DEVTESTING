CREATE TABLE lieferanten (
liefer_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
firma VARCHAR( 50 ) NOT NULL ,
strasse VARCHAR( 50 ) NULL ,
plz VARCHAR( 5 ) NULL ,
ort VARCHAR( 50 ) NULL
) ENGINE = MYISAM ;



INSERT INTO `lieferanten` (`liefer_id`, `firma`, `strasse`, `plz`, `ort`) VALUES
(1, 'Gärtnerbedarf Müller', 'Dorfstraße 8', '12345', 'Dorfen'),
(2, 'Grünes Allerlei', 'Stadtstraße 9', '54321', 'Stadt'),
(3, 'Grüner Finger', 'Am Waldrand', '22333', 'Wald'),
(4, 'Gartenhandel Miu', 'Büchnerstraße 7', '12300', 'Unteroberübermoos');



CREATE TABLE `pflanzen` (
  `pfl_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `beschreibung` varchar(150) DEFAULT NULL,
  `preis` decimal(9,2) DEFAULT NULL,
  `liefer_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`pfl_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;



INSERT INTO `pflanzen` (`pfl_id`, `name`, `beschreibung`, `preis`, `liefer_id`) VALUES
(1, 'Feldahorn', 'strauchartig, unter günstigen Bedingungen als Baum mit Höhen zwischen 10 und 15 Metern', '7.00', 1),
(2, 'Warzenbirke', 'sommergrüne Laubbaum-Art aus der Gattung der Birken', '8.50', 2),
(3, 'Pfeifenwinde', 'große, dachziegelartig übereinander liegenden Blätter', '11.00', 2),
(4, 'Filigranfarn', 'feine mehrfachgefiederte Wedel', '4.00', 3),
(5, 'Kahle Apfelbeere', 'Wildobst für viele Standorte', '5.50', 3),
(6, 'Essigrose', NULL, '11.00', 1),
(7, 'Büffelbeere', 'Gattung der Ölweidengewächse', '2.00', 1),
(8, 'Hopfenbuche', 'Pflanzengattung aus der Familie der Birkengewächse', '6.00', 3),
(9, 'Baumwürger', 'schöne Früchte', '5.00', NULL);

