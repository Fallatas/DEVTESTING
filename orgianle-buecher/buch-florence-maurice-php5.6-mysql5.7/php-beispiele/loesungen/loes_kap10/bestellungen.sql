CREATE TABLE bestellungen (
  id int(11) NOT NULL AUTO_INCREMENT,
  kundenid int(11) DEFAULT NULL,
  pizzaid int(11) DEFAULT NULL,
  anzahl int(11) DEFAULT NULL,
  datum date DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM  DEFAULT CHARSET=UTF8;

INSERT INTO bestellungen (id, kundenid, pizzaid, anzahl, datum) VALUES
(NULL, 1, 2, 2, '2012-11-07'),
(NULL, 1, 3, 1, '2012-11-07'),
(NULL, 2, 5, 3, '2012-08-10'),
(NULL, 2, 9, 1, '2012-08-10'),
(NULL, 4, 4, 1, '2012-08-10'),
(NULL, 4, 5, 2, '2012-08-10'),
(NULL, 4, 2, 3, '2012-08-10'),
(NULL, 1, 1, 33, '2012-08-13'),
(NULL, 1, 8, 2, '2012-08-13'),
(NULL, 4, 9, 4, '2012-08-13'),
(NULL, 1, 8, 1, '2012-08-13'),
(NULL, 1, 7, 1, '2012-08-13'),
(NULL, 7, 9, 1, '2012-08-19'),
(NULL, 7, 7, 1, '2012-08-19'),
(NULL, 14, 1, 22, '2012-11-11'),
(NULL, 14, 1, 22, '2012-11-11'),
(NULL, 14, 1, 22, '2012-11-11'),
(NULL, 1, 1, 1, '2012-08-08'),
(NULL, 1, 1, 1, '2012-08-20'),
(NULL, 12, 9, 2, '2012-10-16');
