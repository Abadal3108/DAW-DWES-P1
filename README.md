## P1: Introducción PHP
### 1
Una vez dentro del proyecto crearemos un archivo .php e introduciremos el código proporcionado para la prueba. 
propio Netbeans tiene una herramienta para ver un preview a tiempo real del php si no le daremos al icono del 
navegador que queremos arriba a la derecha y se abrirá el navegador automáticamente.
### 2
1) Para esta parte lo que haremos es un condicional de tipo "if" que sé siempre
  que el $shopping_cart(el valor del producto) sea más bajo(<) que 20,
  si es el caso y se cumple tendremos 2 opciones por eso haremos otro
  condicional de tipo "if" que se hará mientras el $tipo (el tipo de producto).
  En el enunciado nos especifican que solo hay 2 tipos "cable" o "periférico"
  si es cable no se puede hacer un envió y si es periférico si
  (todo esto teniendo en cuenta que es un pedido inferior a 20 euros)
  como solo hay 2 tipos que $tipo no sea = a "cables" será por descarte "else"
  periféricos que cuyo caso es posible el envió del producto
  por $shopping_cart+$shipping_price(en este caso de "4.99€")
  y si es $tipo = a "cables" no se podrá enviar.
2) Si estamos aquí es porque la primera condición "if" no se ha cumplido o sea que es superior a <=20€
  crearemos un "elseif", ya que hay más posibles condiciones si esta no se cumple, mientras $shopping_cart<50€
  si se cumple esto se aplicará $shipping_price (4.99€) y se hará una suma de $shipping_price + $shopping_cart
  para saber el precio total.
3) En este caso crearemos el siguiente condicional "elseif" mientras sea más grande que 50 y más pequeño que 20€
  el envió será gratis básicamente el precio final será solo el de $shopping_cart.
4) el último caso crearemos otro "elseif" mientras $shopping_cart &gt; 150
  dará un código de descuento de un 20% también calculara en 20% mediante una nueva variable llamada $descuento de la siguiente
  forma:
  $descuento = $shopping_cart * 20;
  $descuento = $descuento / 100;
  $shopping_cart = $shopping_cart - $descuento;
  la variable ($descuento) nos calcula la parte del % que se tiene que descontar y le resta al $shopping_cart dicha cantidad.