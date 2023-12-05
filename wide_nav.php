<?php
$navigation = array(
    array('title' => 'Home','link' => '/', "subArray"=>array()),
    array('title' => 'Store','link' => '/store', "subArray"=>array(
        array('title' => 'About Us','link' => '/about'),
        array('title' => 'FAQ','link' => '/faq'),
        array('title' => 'Check Out The New Store','link' => '/new-store'),
        array('title' => 'Store Of The Past','link' => '/old-store'),
    )),
    array('title' => 'Books','link' => '/books', "subArray"=>array(
        array('title' => 'Buying Books','link' => '/buying-books'),
        array('title' => 'Categories','link' => '/categories'),
        array('title' => 'Trade Credit','link' => '/trade-credit'),
        array('title' => 'Book Search / Browse','link' => '/book-search'),
    )),
    array('title' => 'Contact Us','link' => '/contact', "subArray"=>array(
        array('title' => 'Location','link' => '/location'),
        array('title' => 'Phone, Mail','link' => '/communication'),
        // array('title' => 'Goober','link' => '/about'),
        // array('title' => 'Saloon','link' => '/contact'),
    )),

    array('title' => 'Comics','link' => '/comics', "subArray"=>array(
        array('title' => 'Back Issues','link' => '/back-issues'),
        array('title' => 'Buying Comics','link' => '/buying-comics'),
        array('title' => 'New Comics','link' => '/new-comics'),
        array('title' => 'New Comic Previews','link' => '/new-comic-previews'),
        array('title' => 'Comic Subscription','link' => '/comic-subscription'),

    )),
    array('title' => 'Links','link' => '/links', "subArray"=>array()),
)

?>

<nav class="wideNav">
<div>
<?php
foreach($navigation as $link){
    echo '<div class="topNav">';
    echo '<a href="'.$link['link'].'">'.$link['title'].'</a>';
    if(!null){
     echo '<div class="subNav">';
    foreach($link['subArray'] as $subLink){
     echo '<a href="'.$subLink['link'].'" class="subNavButton">'.$subLink['title'].'</a>';
    }
    echo '</div>';
    }
    echo '</div>';
}

?>
</div>
</nav>

<script>
for (let i of document.querySelectorAll('.topNav')){
i.addEventListener('mouseenter', function(e){
    console.log(e.target.classList);
    if(document.querySelector('.openFlex')){
        for(let i of document.querySelectorAll('.openFlex')){
            i.classList.remove('openFlex');
        }
    }
    if(e.target.classList.contains('topNav')){
        e.target.querySelector('.subNav').classList.add('openFlex');
    }
})
i.addEventListener('mouseleave', function(e){
    // console.log({y:e.screenY});
    // console.log({'y -test':e.target.offsetTop + e.target.offsetHeight});

    console.log({data:e.offsetY});

    if(e.offsetY <= 20 ){
    e.target.querySelector('.subNav').classList.remove('openFlex');
}
})

};
for (let i of document.querySelectorAll('.subNav')){
i.addEventListener('mouseleave', function(e){
    // console.log(e.target.classList);
    
    document.querySelector('.openFlex').classList.remove('openFlex');}

)

};

</script>