<?php
    include_once 'header.php';
?>
    <style>
        .search-bar {
            height: 2em;
            width: 500px;
            max-width: 40%;
            border-radius: 0 10em 10em 0;
            border-width: 0;
            font-size: 1.8em;
            padding-left: 0.5em;
        }

        .search-dropdown {
            height: 2em;
            padding-left: 1em;
            border-radius: 10em 0 0 10em;
            font-size: 1.8em;
        }

        .spacer {
            display: block;
            padding-top: 7em;
        }

        .list {
            border-bottom: black 3px solid;
        }

    </style>

    <div class='page-content'>
        <div class='header'>
            <div class="spacer"></div>
            <form action="/action_page.php">
                <select class="search-dropdown">
				<div class="list">
                 <option value="volvo">Discord</option>
                  <option value="saab">Kik</option>
				  <option value="saab">Youtube</option>
				  <option value="saab">twitch</option>
				  <option value="saab">facebook</option>
				  <option value="saab">xat</option>
				  <option value="saab">skype</option>
				  </div>
                </select>
                <input class="search-bar" type="text" name="fname" placeholder="search">
            </form>
        </div>
    </div>
    <script src="js/index.js"></script>
</body>

</html>
