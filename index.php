<?php
include 'db.php';

// Consultar productos
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda de Componentes de Computadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Componentes de Computadora</h1>
    <div class="product-container">
        <?php while ($product = $result->fetch_assoc()): ?>
            <div class="product">
                <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                <h2><?php echo $product['name']; ?></h2>
                <p>Precio: $<?php echo $product['price']; ?></p>
                <a href="product.php?id=<?php echo $product['id']; ?>" class="button">Ver más</a>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>