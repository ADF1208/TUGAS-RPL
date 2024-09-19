<?php
$username_d = "Dzilham";
    $password_d = "ADF1208";
    while (true) {
        echo "Username:";
        $username = trim(fgets(STDIN));
        echo "password:";
        $password = trim(fgets(STDIN));

        if ($username == $username_d && $password == $password_d) {
            echo "login telah sukses";
            break;
    } else {
        echo "email atau password kurang benar, silahkan ulang kembali\n";
}
}
?>