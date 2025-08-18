<!DOCTYPE html>
<?php 
    require "config.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarketPlace</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="/create-product.php">Create Product</a> 
                </li>
            </ul>
        </nav>
    </header>



    <main>
        <?php
        //file system operations
        define("PHP_OPEN", $value);
        $file = fopen(PRODUCT_LOC, "r");
        $content = fread($file, filesize(PRODUCT_LOC));


        $products = json_decode($content, true);   // Decode JSON to PHP array / CONVERTS S STRING (JSON) INTO AN ASSOCIATIVE ARRAY OR A OBJECT
        $keys     = array_keys($products);         // Get the keys of the associative array
        $arrays   = [];

        foreach ($keys as $key){
            array_push($arrays, $products[$key]);
        }
        $final_products = array_merge(array_values(...$arrays));
 
        ?>

        <div class="row">
            <?php
                foreach ($final_products as $index $product);
            ?>


            <div class="col-3">
                <a href="/product.php?id=<?php echo $index; ?>">
                    <div class="product-img">
                        <img class="product-img-src" src="<?php echo $product['img']; ?>" alt="<?php echo $product['name'] . " Image"; ?>">
                    </div>
                    <div class="product-meta">
                        <div><span class="product name"><?php echo $product['name']; ?></span></div>
                        <div>
                            <span class="product-price">$<?php echo $product['price']; ?></span>
                            <del class="product-price real ">$<?php echo $product['real_price']; ?></del>
                        </div>
                    </div>
                </a>
            </div>
        </div>


        <?php 
          endforeach;
        ?>




        <?php
        fclose($file);
        #write to a file "w"
        #read from a file  "r"
        #append to a file  "a"
        #create a file    "x"
        
        
        ?>
    </main>
</body>
</html>