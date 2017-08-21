<?php
    include_once 'header.php';
?>

<div class='header'>
    <div class='content'>
        <h1>Search thousands of chats and profiles <br>from all around the web.</h1>
        <h3>Or even advertize your own chats or profile</h3>
        <!--<a href='button'>Start here</a>-->
        <form action="/action_page.php">
            <select class="search-dropdown">
                      <option value="discord">Discord</option>
                      <option value="skype">Skype</option>
                      <option value="kik">Kik</option>
                    </select>
            <input class="search-bar" type="text" name="fname" placeholder="search">
        </form>
    </div>
</div>
<div class='mid-content'>
    <div class='content'>
        <h1>Find people that share your intrests.</h1>
        <p>Talcom alows you to find over 1000+ chats and profiles from popular sites Discord, Facebook, Youtube, and more, all on one site.</p>
    </div>
</div>

<?php
    include_once 'footer.php';
?>