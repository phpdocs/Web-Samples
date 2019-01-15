<?php

//$colors=array("Black","White","Green","Red");

$colors=array("black"=>"Black","white"=>"White","green"=>"Green","red"=>"Red");

//Multi Dim Array
$products=array(
    array("pro_id"=>1,"pro_name"=>"Iphone","pro_price"=>"100,000","pro_url"=>"https://google.com"),
    array("pro_id"=>1,"pro_name"=>"Iphone","pro_price"=>"100,000","pro_url"=>"https://google.com"),
    array("pro_id"=>1,"pro_name"=>"Iphone","pro_price"=>"100,000","pro_url"=>"https://google.com"),
    array("pro_id"=>1,"pro_name"=>"Iphone","pro_price"=>"100,000","pro_url"=>"https://google.com"),
    array("pro_id"=>1,"pro_name"=>"Iphone","pro_price"=>"100,000","pro_url"=>"https://google.com"),
    array("pro_id"=>1,"pro_name"=>"Iphone","pro_price"=>"100,000","pro_url"=>"https://google.com"),
    array("pro_id"=>1,"pro_name"=>"Iphone","pro_price"=>"100,000","pro_url"=>"https://google.com"),
    array("pro_id"=>1,"pro_name"=>"Iphone","pro_price"=>"100,000","pro_url"=>"https://google.com"),
    array("pro_id"=>1,"pro_name"=>"Iphone","pro_price"=>"100,000","pro_url"=>"https://google.com"),
    array("pro_id"=>1,"pro_name"=>"Iphone","pro_price"=>"100,000","pro_url"=>"https://google.com"),
    array("pro_id"=>1,"pro_name"=>"Iphone","pro_price"=>"100,000","pro_url"=>"https://google.com"),
    array("pro_id"=>1,"pro_name"=>"Iphone","pro_price"=>"100,000","pro_url"=>"https://google.com")

);



$pro_counter=1;
?>
<table>
    <tr>
<?php
for($proloop=0;$proloop<count($products);$proloop++){
?>
<td>
    <h1><?php echo $products[$proloop]["pro_name"]; ?></h1>
    <b><?php echo $products[$proloop]["pro_price"]?></b>
    <a href="<?php echo $products[$proloop]["pro_url"]?>">Buy Now</a>
</td>
<?php
    if($pro_counter==3 && $proloop<count($products)-1){
        $pro_counter=0;
        echo "</tr><tr>";
    }
    $pro_counter++;
?>

<?php }?>
</tr>
</table>

