<?php

final class Database {

    public function connect() {
        echo "koneksi database";
    }

}

// ERROR jika dilakukan
class MyDB extends Database {

}

?>