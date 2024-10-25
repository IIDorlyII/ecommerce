<?php
include 'db.php';

// Obtener el ID del producto desde la URL
$product_id = $_GET['id'];

// Consultar los detalles del producto
$sql = "SELECT * FROM products WHERE id = $product_id";
$product = $conn->query($sql)->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $product['name']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo $product['name']; ?></h1>
    <div class="product-details">
        <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        <p><?php echo $product['description']; ?></p>
        <p>Precio: $<?php echo $product['price']; ?></p>
        <a href="index.php" class="button">Regresar</a>
    </div>
</body>
</html>