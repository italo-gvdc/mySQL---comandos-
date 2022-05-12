<?php

SELECT * FROM tb_clientes WHERE idade >= 29 ORDER BY idade ASC

/* -- Coluna sexo -- */
ALTER TABLE tb_clientes ADD COLUMN sexo CHAR(1) NOT NULL;
/* -- Coluna endereço --*/
ALTER TABLE tb_clientes ADD COLUMN endereco VARCHAR(150) NULL;

UPDATE tb_clientes SET sexo = 'M' WHERE id_cliente IN (1, 2, 3, 6, 7)

UPDATE tb_clientes
SET sexo = 'F'
WHERE id_cliente BETWEEN 4 AND 5 OR id_cliente BETWEEN 8 AND 10

SELECT
 c.id_cliente,
 c.nome,
 c.idade,
 prod.produto,
 prod.valor
FROM
 tb_clientes AS c INNER JOIN tb_pedidos AS p ON (c.id_cliente = p.id_cliente)
 INNER JOIN tb_pedidos_produtos AS pp ON(p.id_pedido = pp.id_pedido)
 LEFT JOIN tb_produtos AS prod ON (pp.id_produto = prod.id_produto)
?>