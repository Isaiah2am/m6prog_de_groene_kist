INSERT INTO type_product (idtype_product, type_product) VALUES
(1, 'fruit'),
(2, 'groente');

INSERT INTO aanbiedingen (idaanbiedingen, soort_aanbieding) VALUES
(1, 'Geen aanbieding'),
(2, '2 voor 1'),
(3, '50% korting'),
(4, 'Seizoensactie'),
(5, 'Lidmaatschap korting');

INSERT INTO Producten (idProducten, product_naam, product_prijs, aanbiedingen_idaanbiedingen, type_product_idtype_product) VALUES
-- Fruit
(1, 'Appel', 0.89, 3,1),
(2, 'Banaan', 0.55, 1,1),
(3, 'Aardbei', 2.99, 4,1),
(4, 'Sinaasappel', 1.10, 2,1),
(5, 'Peer', 0.95, 1,1),

-- Groente
(6, 'Wortel', 0.79, 5,2),
(7, 'Broccoli', 1.49, 3,2),
(8, 'Komkommer', 0.99, 1,2),
(9, 'Paprika', 1.59, 2,2),
(10,'Spinazie', 1.29, 4,2);



INSERT INTO gebruiker (idgebruiker, gebruiker_naam, wachtwoord) VALUES
(1, 'admin', 'admin123'),
(2, 'testgebruiker', 'wachtwoord'),
(3, 'klant01', 'klant01pw');
