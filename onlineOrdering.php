<?php 
// $url = 'http://localhost:3001/menu/odk1000';
$url = 'http://localhost:3001/menu/odk1000';
//   $obj = $_GET[$url];
//   print $obj;
  $response = file_get_contents($url);
// print $response;
// echo $response;

$data = json_decode($response, false);

// echo '<br />';
// echo $data->menu->name;
// echo '<br />';

// echo $data->menu->description;
// echo '<br />';
// echo $data->menu->tax;
// echo '<br />';
// echo $data->menu->price;
// echo '<br />';
// echo $data->menu->id;


//     $data = json_decode($response);
//    print $data;
//     echo $data->name;

?>
<style>
.test{
    height:fit-content;
    width:100vw;
    display: flex;
    justify-content: center;
}
.test > div{
    text-align: center;
    min-height: 250px;
    height: fit-content;
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    width: 100%;
    max-width:1100px;
    justify-content: space-between;
    align-items: center;
    align-content:center;

}
.test > div > div {
    min-height: 200px;
    height: fit-content;
    width: 200px;
    border: 1px solid black;
    border-radius:5px;
}

.test > div > div > h3{
    width: 100%;
}
</style>
<div class="test">
<div>
<?php 
    foreach($data->menu as $data){
    echo '<div>';
echo '<h3>';
print $data->name;
echo '</h3>';
print '<br />';
print $data->price;
print '<br />';
print $data->description;
print '<br />';
print $data->tax;
// print $data->name;

echo '</div>';
    }


    // ?>
</div>
</div>

