<?php  ?>

<div class="image_changer">

<h2></h2>
<?php
foreach($images as $image ){

echo "<img src='$image[url]' alt='$image[alt]' class='img_changer_img' />";

};
?>
<div id="left_button" class=" img_change_but">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 41"><path d="M20.3 40.8 0 20.5 20.3.2l.7.7L1.3 20.5 21 40.1z"></path></svg>
</div>
<style>
    #right_button > svg{
        transform: rotate(180deg);
    }
</style>
<div id="right_button" class=" img_change_but">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 41"><path d="M20.3 40.8 0 20.5 20.3.2l.7.7L1.3 20.5 21 40.1z"></path></svg>
</div>
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