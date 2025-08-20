<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

    <style>
        .menu{
            display: flex;
            width: 100vw;
            justify-content: space-between;
        }
        .menu > li{
            display: block;
            cursor: pointer;
            color: black;
            text-decoration: none;
        }
        .menu > li:hover{
            boder: 1px solid #000;
            boreder-radius: 8px;
            background-color: #f0f0f0ff;
            color: #55555529;

        }
    </style>


<body>
    <ul class="menu">
    <?php
        // $date = Date(format,timestop);
        //+



        $array = ["one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten"];
        $one = array_splice($array, rand(0, 10), rand(0, 5));

        $variable = function($value){
            return strlen( $value ) < 5;
        };

        $filtered_array = array_filter($array, $variable);
        foreach($filtered_array as $menu ){
            echo '<li><a href="/'. strtolower($menu) .'">' . $menu . '</a></li>';
        }

    ?>
    </ul>

    <!-- <ul>
    <?php
    $array = ["house", "services", "about", "shop", "careers", "contact", "blog", "portfolio", "testimonials", "faq"];
    $one = array_splice($array, rand(0, 10), rand(1, 5));

    $variable = function($value){
        return strlen($value) < 5;
    };

    $filtered_array = array_filter($array, $variable);
    foreach($filtered_array as $menu ){
        echo '<li><a href="/'. strtolower($menu) .'">' . $menu . '</a></li>';
    }
    ?>
    </ul> -->




<!-- 
    <ul>
    <?php 
    $name  = "Original String ";
    $name .= "Appended String";
    echo '<strong>Hello World!</strong>'; 
    
    #String concatenation example
    #Boolen variable
    #Object variable
    #Array variable
    #Float variable
    #Resource variable

    # -= /= *= 

    #Local
    #Global
    #Static
    #DATA TYPES IN PHP
    #1. String - a sequence of characters 
    #2. Integer - a whole number
    #3. Float - a number with decimal point are also called double
    #4. Boolean - true or false
    #5. Array - a collection of values or store a sequence of other data types
    #6. Object - an instance of a class / OOP In PHP
    #7. NULL - a variable with no value / it also a default value of a variable that has not been assigned a value
    #8. Resource - a special variable that holds a reference to an external resource, such as a file or database connection


    #How to define a variable is by using a "$" sign and a "name".. 

    #Variable naming rules
    #1. Don't start 



    // function sumup(...$args){
    //     $no =0;
    //     foreach($args as $v => $k) {
    //         $no -= intval( $k );
    //     }
    //     return $no;
    // }

    // $random = sumup(50,50,40,56);
    // echo "<p><pre>$random</pre></p>";




    // function add($one, $one2) {
    //     return $one + $one2;
    // }

    // $random = add(50,80);
    // echo "<p><pre>$random</pre></p>";    // with a number


    // function add(&$nodefault, $one = 1, $one2 = 1) {
    //     $nodefault += 9;
    //     return $nodefault + $one + $one2;
    // }
    
    // $five = 5;
    // $random = add($five);
    // echo "<p><pre>$random</pre></p>";
    // echo "<p><pre>$five</pre></p>";     // with a variable


    // function add( $nodefault, $one = 1, $one2 = 1) {
    //     $nodefault += 9;
    //     echo "<p><pre>NO default:$nodefault</pre></p>";
    //     echo "<p><pre>One Two:$one2</pre></p>";
    //     return $nodefault + $one + $one2;
    // }
    
    // $five = 5;
    // $random = add($one2 = 4, $nodefault = 55);
    // echo "<p><pre>$random</pre></p>";
    // echo "<p><pre>$five</pre></p>";



    #WAYS TO CREATE A STRING
    #1. Single quotes - 'Hello World'
    #2. Double quotes - "Hello World"
    #3. Fecting Data from Files
    #4. Fecthing Data from Database / Internet
    #5. Fecthing Data from User Input


    #STRING CONCATENATION


    // function sumup(...$args){
    //     $no = 0;
    //     foreach($args as $v => $k) {
    //         $no += intval( $k );
    //     }
    //     return $no;
    // }

    // $sum = sumup(10, 20, 30, 40, 70);
    // $string = 'This is sum of the numbers above: $' . $sum;
    // echo $string;



    #STRING METHODS IN PHP
    #explode - splits a string into an array based on a delimiter
    #implode - joins an array into a string with a delimiter

    #gotten from a database, file or api

    #json_encode - converts a PHP array or object into a JSON string
    #json_decode - converts a JSON string into a PHP array or object

    #TYPES OF IN PHP
    #1. Indexed Array - an array with numeric keys
    #2. Associative Array - an array with named keys also associate a value to another value.
    #3. Multidimensional Array - an array of arrays


    // $string = "Home, Services, About, Shop";
    // $array = explode(", ", $string);

    // foreach($array as $each) {
    //     $html = '<li><a href="/' . strtolower($each) . '">' . $each . '</a></li>';
    //     echo $html;
    // }

    // $back_string = implode(" ", $array);
    // echo '<li>'. $back_string . '</li>';

    // ?>
    // </ul>



    <div>
        <php 
            $json_text = file_get_contents("products.json");
            $array = json_decode ($json_text, true );
            
            foreach( $array as category => $value ) {
                $category = strtoupper($category);
                echo '<ul>';
                echo '<li><b>Products Category: $category </b></li>';

                foreach($value as $product){
                    $slug = strtolower( str_replace(" ","-" $product['name']) );
                    echo '
                    <li>
                        <a class="product tab href="/'.$slug.'">
                           <div class="container image">
                                <img class="product image" 
                                src="' . $product['img'] . '" />
                           </div>
                           <div>
                            <p>'. $product [name'] .'</p>
                            <p>price: $'. $product['price'] .'</p>
                           </div>
                        </a>
                    </li>
                }
                ';
            }
            echo "</ul>";
        ?>
        </div> -->




    <div>
        <p>
            <form action="<?php $_SERVER["REQUEST_URI"]; ?>">
                <label for="category">Category</label>
                <select name="category" id="category" >
                    <option value="Electronics">Electronics</option>
                    <option value="Furniture">Furniture</option>
                    <option value="Home Appliance">Home Appliance</option>
                </select>
                <label for="price">Price</label>
                <input type="text" name="price" id="price"/>
                <button type="submit">Filter</button>
            </form>
        </p>

        <?php
            $category = $_GET["category"];
            $price = $_GET["price"];
            $json_text = file_get_contents("products.json");
            $array = json_decode($json_text, true);

            /*if(isset($category)){
                $array = $array[$category];
            }*/

            if(isset($price)){
                $price = floatval($price);
                $array = array_map(function($arr){
                    return $filtered = array_filter($arr, function($assoc){
                        $price = floatval($_GET["price"]);
                        $prc = floatval (str_replace(",", "",$assoc['price']));
                        return strpos($assoc['price'], $price) + 1;
                    });
                }, $array);
            }
            
            foreach( $array as $category => $value ){
            $category = strtoupper( $category );
            echo '<ul>';
            echo "<li><b>Product Category: $category</b></li>";

            foreach($value as $product) {
                $slug = strtolower( str_replace(" ", "-", $product['name']) );
                echo '
                <li>
                    <a class="product tab" href="/'.$slug.'">
                        <div class="container image">
                        <img class="product image" src="' .$product['img'] . '" />
                        </div>
                        <div> 
                        <p>'. $product['name'] .'</p>
                        <p>price: $'. $product['price'] .'</p>
                        </div>
                    </a>
                </li>
                ';

            } 
                echo "</ul>";
            }


            #Type of Array in PHP
            #1. Indexed Array - an array with numeric keys
            #2. Associative Array - an array with named keys
            #3. Multidimensional Array - an array of arrays
            $array = ["key"=> "value", "key2" => "value2"];
            $array =[["key"=> "value2"], ["key2"=> "value"]]


            #Basic Array Functions in PHP 
            #count() - returns the number of elements in an array / use to count values in an array
            #is_array() - checks if a variable is an array
            #array_push() - adds one or more elements to the end of an array
            #array_pop() - removes the last element from an array
            #array_shift() - removes the first element from an array
            #array_unshift() - adds one or more elements to the beginning of an array 
            #array_slice() - extracts a portion of an array
            #array_splice() - removes a portion of an array and replaces it with something else / also can be used to remove elements from the middle of an array
            #array_filter() - filters elements of an array using a callback function
            #array_map() - applies a callback function to the elements of an array

            #Array function in PHP
        ?>
    </div>

</body>
</html>