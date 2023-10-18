-- 1
DELIMITER $$
CREATE FUNCTION kategori_harga(harga INT) 
RETURNS VARCHAR(30)
BEGIN
DECLARE kategori VARCHAR(30);
IF harga <= 500000 
THEN SET kategori = 'murah';
ELSE IF harga <= 3000000 
THEN SET kategori = 'sedang';
ELSE IF harga <= 10000000 
THEN SET kategori = 'mahal';
ELSE SET kategori = 'sangat mahal';
END IF;
RETURN kategori;
END $$

DELIMITER ;
SELECT kategori_harga(450000);

-- 2
-- Stored Procedure
DELIMITER $$
CREATE PROCEDURE kurangi_stok(IN product_id INT, IN order_quantity INT)
BEGIN
DECLARE current_stok INT;
SELECT stok INTO current_stok FROM produk WHERE id = product_id;
SET current_stok = current_stok - order_quantity;
UPDATE produk
SET stok = current_stok
WHERE id = product_id;
END $$

-- Trigger
CREATE TRIGGER pesanan_produk
AFTER INSERT ON pesanan
FOR EACH ROW
BEGIN
DECLARE product_id INT;
DECLARE order_quantity INT;
SELECT NEW.product_id, NEW.order_quantity INTO product_id, order_quantity;
CALL kurangi_stok(product_id, order_quantity);
END $$

DELIMITER ;

-- 3
DELIMITER //
CREATE TRIGGER trig_kurangi_stok
AFTER INSERT ON pesanan
FOR EACH ROW
BEGIN
DECLARE product_id INT;
DECLARE order_quantity INT;
SELECT NEW.product_id, NEW.order_quantity INTO product_id, order_quantity;
CALL kurangi_stok(product_id, order_quantity);
END $$
DELIMITER ;
