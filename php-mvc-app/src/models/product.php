<?php

class Product
{
    public function getData(): array
    {
        $dsn = "mysql:
        host=localhost;
        dbname=sherd_JimBelushi;
        charset=utf8;
        port=3306";

        $pdo = new PDO($dsn,"sherd_JimBelushi","adpujdB734kf3", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        $stmt = $pdo->query("SELECT * FROM `products`");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}