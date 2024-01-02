<?php
$navDev = true;
if($navDev){
    $navigation = array(
        array('title' => 'Home','link' => '/', "subArray"=>array()),
        array('title' => 'Store','link' => '/new-store.php', "subArray"=>array(
            array('title' => 'About Us','link' => '/about.php'),
            array('title' => 'FAQ','link' => '/faq.php'),
            array('title' => 'Check Out The New Store','link' => '/new-store.php'),
            array('title' => 'Store Of The Past','link' => '/old-store.php'),
        )),
        array('title' => 'Books','link' => '/categories.php', "subArray"=>array(
            array('title' => 'Buying Books','link' => '/buying-books.php'),
            array('title' => 'Categories','link' => '/categories.php'),
            array('title' => 'Trade Credit','link' => '/trade-credit.php'),
            // array('title' => 'Book Search / Browse','link' => '/book-search.php'),
        )),
        array('title' => 'Contact Us','link' => '/contact.php', "subArray"=>array(
            array('title' => 'Location','link' => '/location.php'),
            array('title' => 'Phone, Mail','link' => '/communication.php'),
            // array('title' => 'Goober','link' => '/about'),
            // array('title' => 'Saloon','link' => '/contact'),
        )),
    
        array('title' => 'Comics','link' => '/comics.php', "subArray"=>array(
            array('title' => 'Back Issues','link' => '/back-issues.php'),
            array('title' => 'Buying Comics','link' => '/buying-comics.php'),
            array('title' => 'New Comics','link' => '/new-comics.php'),
            array('title' => 'New Comic Previews','link' => '/new-comic-previews.php'),
            array('title' => 'Comic Subscription','link' => '/comic-subscription.php'),
    
        )),
        // array('title' => 'Links','link' => '/links.php', "subArray"=>array()),
    );
}else{
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
    );
}

?>

<nav class="sideNav">
<div>
<?php
foreach($navigation as $link){
    echo '<div class="topNav">';
    if($link['subArray'] == null){
        echo '<a href="'.$link['link'].'">'.$link['title'].'</a>';    
    }else{
        echo '<a href="'.$link['link'].'">'.$link['title'].'</a> <span class="dropdownArrow">▶</span>';
    }
    
    if(!null){
     echo '<div class="subNav">';
    foreach($link['subArray'] as $subLink){
     echo '<a href="'.$subLink['link'].'" class="subNavButton">&#x2022; '.$subLink['title'].'</a>';
    }
    echo '</div>';
    }
    echo '</div>';
}

?>
</div>
</nav>
<script>
for (let i of document.querySelectorAll('.dropdownArrow')){
    i.addEventListener('click', function(){
        // alert('clicked')
        // console.log(i.parentElement.children[2])
        if(i.innerText == '▶'){
            i.innerText = '▼';
        } else {
            i.innerText = '▶';
        }
        i.parentElement.children[2].classList.toggle('openSubNav');
        // document.querySelector().classList.toggle('openSubNav');
    });
}
</script>
<div class='sideNavButton'>

</div>

<script>
document.querySelector('.sideNavButton').addEventListener('click', function(){
    document.querySelector('.sideNav').classList.toggle('sideNavFix');
    // document.querySelector('.sideNavButton').classList.toggle('sideNavFix');
});
</script>