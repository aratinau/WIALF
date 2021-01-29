--  rename a table

ALTER TABLE user RENAME TO ksante_user;

SELECT COUNT(Id) as nb,last_name FROM ruj88yt_sellers GROUP BY (last_name) ORDER BY nb DESC;

SELECT * FROM ruj88yt_sellers WHERE last_name IN(
"Imparfaite",
"Do",
"Richard",
"Gabbi",
"de Béchade",
"Cogen",
"Fontanin",
"Alves",
"Friperie",
"Ki")

SELECT COUNT(id) as nb,LENGTH(billing_Name) as l,billing_Name FROM orders_shopify_light GROUP by billing_Name ORDER BY l DESC;

SELECT COUNT(id),
    messenger_user_id,
    last_name,
    first_name
FROM ruj88yt_sellers
GROUP BY id
ORDER BY id DESC


--product_vendor

SELECT term_id,taxonomy FROM ruj88yt_term_taxonomy WHERE taxonomy="product_vendor";

list taxonomy woo


SELECT taxonomy FROM ruj88yt_term_taxonomy GROUP BY taxonomy;

--sql liste usesrs rustinés

SELECT * FROM ruj88yt_users WHERE id IN (198,
149,
255,
287,
275,
310)


--mettre une colonne à null

Update myTable set MyColumn = NULL
Update ruj88yt_sellers set on_holidays_until = NULL WHERE on_holidays_until = "0000-00-00"

SELECT * FROM ruj88yt_sellers WHERE on_holidays_until = "0000-00-00"

--trouver les comptes à rustiner

SELECT * FROM ruj88yt_sellers WHERE first_name = ""


--check si deux colonnes sont identiques

select * from ruj88yt_sellers WHERE chatfuel_user_id != messenger_user_id


--find duplicate values

SELECT
    name, email, COUNT(*)
FROM
    users
GROUP BY
    name, email
HAVING 
    COUNT(*) > 1

--check if column exist


IF EXISTS(SELECT 1 FROM sys.columns 
          WHERE Name = N'columnName')


--differnce

SELECT paiements_impvend.*
FROM paiements_impvend
    LEFT JOIN ruj88yt_sellers_payements ON (paiements_impvend.commande_concernee = ruj88yt_sellers_payements.id_order)
WHERE paiements_impvend.id_woo IS NULL


--chercher les colonnes avec tel nom (checher columnA et ColumnB)


SELECT DISTINCT TABLE_NAME 
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE COLUMN_NAME IN ('columnA','ColumnB')
        AND TABLE_SCHEMA='YourDatabase';


--faire un select a partir d'un resultat groupé avec un DISTINCT

SELECT id WHERE IN (SELECT DISTINCT shipment_id REPLACE("DB", ""));


--export
 
mysqldump -uroot -proot --databases DATABASENAME > file_to_import.sql

--import

mysql -uroot -p DATABASENAME < file_to_import.sql

