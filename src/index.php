<?php
session_start();
?>
<?php
$products = array(
    "Electronics" => array(
        "Television" => array(
            array(
                "id" => "PR001",
                "name" => "MAX-001",
                "brand" => "Samsung"
            ),
            array(
                "id" => "PR002",
                "name" => "BIG-301",
                "brand" => "Bravia"
            ),
            array(
                "id" => "PR003",
                "name" => "APL-02",
                "brand" => "Apple"
            )
        ),
        "Mobile" => array(
            array(
                "id" => "PR004",
                "name" => "GT-1980",
                "brand" => "Samsung"
            ),
            array(
                "id" => "PR005",
                "name" => "IG-5467",
                "brand" => "Motorola"
            ),
            array(
                "id" => "PR006",
                "name" => "IP-8930",
                "brand" => "Apple"
            )
        )
    ),
    "Jewelry" => array(
        "Earrings" => array(
            array(
                "id" => "PR007",
                "name" => "ER-001",
                "brand" => "Chopard"
            ),
            array(
                "id" => "PR008",
                "name" => "ER-002",
                "brand" => "Mikimoto"
            ),
            array(
                "id" => "PR009",
                "name" => "ER-003",
                "brand" => "Bvlgari"
            )
        ),
        "Necklaces" => array(
            array(
                "id" => "PR010",
                "name" => "NK-001",
                "brand" => "Piaget"
            ),
            array(
                "id" => "PR011",
                "name" => "NK-002",
                "brand" => "Graff"
            ),
            array(
                "id" => "PR012",
                "name" => "NK-003",
                "brand" => "Tiffany"
            )
        )
    )
)



?>
<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Category</th>
            <th>Subcategory</th>
            <th>ID</th>
            <th>Name</th>
            <th>Brand</th>
        </tr>
        <?php
        foreach ($products as $key => $value) {
            foreach ($value as  $k => $item) {
                foreach ($item as $v => $c) {
                    foreach ($c as $j => $i) {
                        if ($j == 'id') {
                            $z = $i;
                        }

                        if ($j == 'name') {
                            $x = $i;
                        }

                        if ($j == 'brand') {
                            $y = $i;
                        }
                    }



                    echo "  <tr>
<td>$key</td>
<td>$k</td>


<td>$z</td>
            
<td>$x</td>
<td>$y</td>


</tr>";
                }
            }
        }




        ?>
    </table>


    <h1>List of Mobile Subcategory</h1>
    <table>
        <tr>
            <th>Category</th>
            <th>Subcategory</th>
            <th>ID</th>
            <th>Name</th>
            <th>Brand</th>
        </tr>
        <?php
        foreach ($products as $key => $value) {
            foreach ($value as  $k => $item) {
                if ($k == 'Mobile') {
                    foreach ($item as $v => $c) {
                        foreach ($c as $j => $i) {
                            if ($j == 'id') {
                                $z = $i;
                            }

                            if ($j == 'name') {
                                $x = $i;
                            }

                            if ($j == 'brand') {
                                $y = $i;
                            }
                        }



                        echo "  <tr>
<td>$key</td>
<td>$k</td>


<td>$z</td>
            
<td>$x</td>
<td>$y</td>


</tr>";
                    }
                }
            }
        }
        ?>
    </table>
    <h1>List all products with their id, name, subcategory and category </h1>


    <h2>Brand = "SAMSUNG"</h2>
    <?php
    foreach ($products as $key => $value) {
        foreach ($value as  $k => $item) {
            foreach ($item as $v => $c) {
                foreach ($c as $j => $i) {
                    if ($j == 'id') {
                        $z = $i;
                    }

                    if ($j == 'name') {
                        $x = $i;
                    }

                    if ($j == 'brand') {

                        if ($i == 'Samsung') {
                            $y = $i;

                            echo "
<tr><td>Product ID:   $z</td><br>
<td>Product Name:  $x</td><br>
<td>Subcategory:  $k</td><br>
<td>Category:    $key</td></tr><br><br><br>
";
                        }
                    }
                }
            }
        }
    }

    ?>
    <h2>Brand = "Bravia"</h2>
    <?php
    foreach ($products as $key => $value) {
        foreach ($value as  $k => $item) {
            foreach ($item as $v => $c) {
                foreach ($c as $j => $i) {
                    if ($j == 'id') {
                        $z = $i;
                    }

                    if ($j == 'name') {
                        $x = $i;
                    }

                    if ($j == 'brand') {

                        if ($i == 'Bravia') {
                            $y = $i;

                            echo "
<tr><td>Product ID:   $z</td><br>
<td>Product Name:  $x</td><br>
<td>Subcategory:  $k</td><br>
<td>Category:    $key</td></tr><br>
";
                        }
                    }
                }
            }
        }
    }

    ?>
    <h2>Brand = "Apple"</h2>
    <?php
    foreach ($products as $key => $value) {
        foreach ($value as  $k => $item) {
            foreach ($item as $v => $c) {
                foreach ($c as $j => $i) {
                    if ($j == 'id') {
                        $z = $i;
                    }

                    if ($j == 'name') {
                        $x = $i;
                    }

                    if ($j == 'brand') {

                        if ($i == 'Apple') {
                            $y = $i;

                            echo "
<tr><td>Product ID:   $z</td><br>
<td>Product Name:  $x</td><br>
<td>Subcategory:  $k</td><br>
<td>Category:    $key</td></tr><br><br><br>
";
                        }
                    }
                }
            }
        }
    }

    ?>
    <h2>Brand = "Motorola"</h2>
    <?php
    foreach ($products as $key => $value) {
        foreach ($value as  $k => $item) {
            foreach ($item as $v => $c) {
                foreach ($c as $j => $i) {
                    if ($j == 'id') {
                        $z = $i;
                    }

                    if ($j == 'name') {
                        $x = $i;
                    }

                    if ($j == 'brand') {

                        if ($i == 'Motorola') {
                            $y = $i;

                            echo "
<tr><td>Product ID:   $z</td><br>
<td>Product Name:  $x</td><br>
<td>Subcategory:  $k</td><br>
<td>Category:    $key</td></tr><br>
";
                        }
                    }
                }
            }
        }
    }

    ?>
    <h2>Brand = "Chopard"</h2>
    <?php
    foreach ($products as $key => $value) {
        foreach ($value as  $k => $item) {
            foreach ($item as $v => $c) {
                foreach ($c as $j => $i) {
                    if ($j == 'id') {
                        $z = $i;
                    }

                    if ($j == 'name') {
                        $x = $i;
                    }

                    if ($j == 'brand') {

                        if ($i == 'Chopard') {
                            $y = $i;

                            echo "
<tr><td>Product ID:   $z</td><br>
<td>Product Name:  $x</td><br>
<td>Subcategory:  $k</td><br>
<td>Category:    $key</td></tr><br>
";
                        }
                    }
                }
            }
        }
    }

    ?>
    <h2>Brand = "Mikimoto"</h2>
    <?php
    foreach ($products as $key => $value) {
        foreach ($value as  $k => $item) {
            foreach ($item as $v => $c) {
                foreach ($c as $j => $i) {
                    if ($j == 'id') {
                        $z = $i;
                    }

                    if ($j == 'name') {
                        $x = $i;
                    }

                    if ($j == 'brand') {

                        if ($i == 'Mikimoto') {
                            $y = $i;

                            echo "
<tr><td>Product ID:   $z</td><br>
<td>Product Name:  $x</td><br>
<td>Subcategory:  $k</td><br>
<td>Category:    $key</td></tr><br>
";
                        }
                    }
                }
            }
        }
    }

    ?>
    <h2>Brand = "Bvlgari"</h2>
    <?php
    foreach ($products as $key => $value) {
        foreach ($value as  $k => $item) {
            foreach ($item as $v => $c) {
                foreach ($c as $j => $i) {
                    if ($j == 'id') {
                        $z = $i;
                    }

                    if ($j == 'name') {
                        $x = $i;
                    }

                    if ($j == 'brand') {

                        if ($i == 'Bvlgari') {
                            $y = $i;

                            echo "
<tr><td>Product ID:   $z</td><br>
<td>Product Name:  $x</td><br>
<td>Subcategory:  $k</td><br>
<td>Category:    $key</td></tr><br>
";
                        }
                    }
                }
            }
        }
    }

    ?>
    <h2>Brand = "Piaget"</h2>
    <?php
    foreach ($products as $key => $value) {
        foreach ($value as  $k => $item) {
            foreach ($item as $v => $c) {
                foreach ($c as $j => $i) {
                    if ($j == 'id') {
                        $z = $i;
                    }

                    if ($j == 'name') {
                        $x = $i;
                    }

                    if ($j == 'brand') {

                        if ($i == 'Piaget') {
                            $y = $i;

                            echo "
<tr><td>Product ID:   $z</td><br>
<td>Product Name:  $x</td><br>
<td>Subcategory:  $k</td><br>
<td>Category:    $key</td></tr><br>
";
                        }
                    }
                }
            }
        }
    }

    ?>
    <h2>Brand = "Graff"</h2>
    <?php
    foreach ($products as $key => $value) {
        foreach ($value as  $k => $item) {
            foreach ($item as $v => $c) {
                foreach ($c as $j => $i) {
                    if ($j == 'id') {
                        $z = $i;
                    }

                    if ($j == 'name') {
                        $x = $i;
                    }

                    if ($j == 'brand') {

                        if ($i == 'Graff') {
                            $y = $i;

                            echo "
<tr><td>Product ID:   $z</td><br>
<td>Product Name:  $x</td><br>
<td>Subcategory:  $k</td><br>
<td>Category:    $key</td></tr><br>
";
                        }
                    }
                }
            }
        }
    }

    ?>
    <h2>Brand = "Tiffany"</h2>
    <?php
    foreach ($products as $key => $value) {
        foreach ($value as  $k => $item) {
            foreach ($item as $v => $c) {
                foreach ($c as $j => $i) {
                    if ($j == 'id') {
                        $z = $i;
                    }

                    if ($j == 'name') {
                        $x = $i;
                    }

                    if ($j == 'brand') {

                        if ($i == 'Tiffany') {
                            $y = $i;

                            echo "
<tr><td>Product ID:   $z</td><br>
<td>Product Name:  $x</td><br>
<td>Subcategory:  $k</td><br>
<td>Category:    $key</td></tr><br>
";
                        }
                    }
                }
            }
        }
    }

    ?>
    <!-- Delete products -->


    <table>
        <?php
        foreach ($products as $key => $value) {
            foreach ($value as  $k => $item) {
                foreach ($item as $v => $c) {

                    if ($c['id'] == 'PR003') {
                        continue;



                        // print_r($c);



                    }
                    echo "  <br><tr><td>$key</td><td>$k</td><td>$c[id]</td><td>$c[name]</td><td>$c[brand]</td></tr>";
                }
            }
        }
        ?>

    </table>

    <!-- Edit products -->

    <table>
        <?php
        foreach ($products as $key => $value) {
            foreach ($value as  $k => $item) {
                foreach ($item as $v => $c) {

                    if ($c['id'] == 'PR002') {
                        $c['id'] = "BIG-555";




                        // print_r($c);



                    }
                    echo "  <br><tr><td>$key</td><td>$k</td><td>$c[id]</td><td>$c[name]</td><td>$c[brand]</td></tr>";
                }
            }
        }




        ?>

    </table>
</body>

</html>