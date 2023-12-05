<?php $images = array(
    array('url' => './wbsp/IMG_0154 Large.jpeg', 'alt' => ''),
    array('url' => './wbsp/IMG_0167 Large.jpeg', 'alt' => ''),
    array('url' => './wbsp/IMG_0158 Large.jpeg', 'alt' => ''),
    array('url' => './wbsp/IMG_0159 Large.jpeg', 'alt' => ''),
    array('url' => './wbsp/IMG_0160 Large.jpeg', 'alt' => ''),
    array('url' => './wbsp/IMG_0161 Large.jpeg', 'alt' => ''),
    array('url' => './wbsp/IMG_0162 Large.jpeg', 'alt' => ''),
    array('url' => './wbsp/IMG_0163 Large.jpeg', 'alt' => ''),
    array('url' => './wbsp/IMG_0165 Large.jpeg', 'alt' => ''),
    array('url' => './wbsp/IMG_0168 Large.jpeg', 'alt' => ''),
    array('url' => './wbsp/IMG_0169 Large.jpeg', 'alt' => ''),
    array('url' => './wbsp/IMG_0170 Large.jpeg', 'alt' => ''),
    array('url' => './wbsp/IMG_0171 Large.jpeg', 'alt' => '')
    
    ); ?>

<div class="image_changer">

<h2></h2>
<?php
foreach($images as $image ){

echo "<img src='$image[url]' alt='$image[alt]' class='img_changer_img' />";

};
?>
<div id="left_button" class=" img_change_but"></div>
<div id="right_button" class=" img_change_but"></div>
</div>



<script>
let images = document.querySelectorAll('.img_changer_img');
let counter = 0
setInterval(() => {
counter++
if(counter > images.length -1 ){
    
    counter = 0
}
for (let i of images){
    i.classList.remove('img_changer_op')
}
images[counter].classList.add('img_changer_op')

}, 2250);
</script>