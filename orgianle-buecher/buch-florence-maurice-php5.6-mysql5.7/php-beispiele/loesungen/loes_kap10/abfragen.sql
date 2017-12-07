SELECT bestellungen.anzahl, bestellungen.datum, pizza.pizzasorte FROM bestellungen, pizza
WHERE
bestellungen.pizzaid = pizza.id;

SELECT kunde.name, bestellungen.anzahl, bestellungen.datum, pizza.pizzasorte
FROM bestellungen, pizza, kunde
WHERE bestellungen.pizzaid = pizza.id
AND bestellungen.kundenid = kunde.id;

SELECT kunde.name, bestellungen.anzahl, bestellungen.datum, pizza.pizzasorte
FROM bestellungen
INNER JOIN (pizza, kunde)
ON (bestellungen.pizzaid = pizza.id AND bestellungen.kundenid = kunde.id);

SELECT ort, COUNT( * ) AS gesamt
FROM kunde
GROUP BY (
ort
);
