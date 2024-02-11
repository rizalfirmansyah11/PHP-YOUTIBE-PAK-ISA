<nav>

<ul>

    <li><a= href="?menu">isi</a></li>
    <li><a= href="#">hapus</a></li>
    <li><a= href="#">destroy</a></li>
</ul>
</nav>




<?php

    session_start();

    echo $_SESSION['user'];

    echo '<br>';

    echo $_SESSION['nama'];

    echo '<br>';

    echo $_SESSION['alamat'];

    echo '<br>';

    foreach ($_SESSION as $key => $value) {
        echo $key.'=>'.$value.'<br>';
    }


?>