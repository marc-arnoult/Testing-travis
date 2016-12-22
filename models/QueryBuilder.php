<?php


class QueryBuilder
{
    public function selectAll()
    {
        $statement = $pdo->prepare('select * from ');
    }
}