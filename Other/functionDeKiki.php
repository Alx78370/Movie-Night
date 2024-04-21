<?php
function findMissingId(string $table, PDO $pdo): array
{
    $sql = "SELECT id FROM $table";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $ids = $stmt->fetchAll(PDO::FETCH_COLUMN);
    $missing = [];
    for ($i = 1; $i <= count($ids); $i++) {
        if (!in_array($i, $ids)) {
            $missing[] = $i;
        }
    }
    return $missing;
}
