<?php 

?>
<div id="navbar">
    <!-------------------------------------------------------------------- HOME -->
    <div class="dropdown">
        <button class="dropbtn"><a href="home">Home</a></button>
    </div>
    <!---------------------------------------------------------------- RECEPTEN -->
    <div class="dropdown">
        <button class="dropbtn"><a href="recepten">Recepten</a></button>
        <!-- <div class="content">
            <a href="recepten?appeltaart">Appeltaart</a>
            <a href="recepten?worteltaart">Worteltaart</a>
            <a href="recepten?Bananentaart">Bananentaart</a>
            <a href="recepten?Chocoladekoekjes">Chocoladekoekjes</a>
        </div> -->
    </div>
</div>

<style>
    #navbar {
        width: 100vw;
        height: 10vh;
    }
    #navbar > div:nth-child(1) {
        float: left;
        margin-left: 5vw;
    }
    #navbar > button {
        vertical-align: baseline;
    }
    a {
        text-decoration: none;
        color: #181818;
        font-size: 16px;
        cursor: pointer;
        border: none;
    }

</style>