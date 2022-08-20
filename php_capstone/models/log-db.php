<?php 

/**
 * A function to get top 10 logs
 *
 * @return array
 */
function getLatestLogs():array {

    global $dbh;
    $query = "SELECT 
            event
            FROM 
            log 
            ORDER BY
            created_at DESC
            LIMIT 10";

    $stmt = $dbh->prepare($query);

    $stmt->execute();

    $results = $stmt->fetchAll();

    return $results ? $results : [];

}
