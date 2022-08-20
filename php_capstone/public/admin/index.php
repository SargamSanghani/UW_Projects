<?php

    include __DIR__ . '/../../includes/functions.php';
    require __DIR__ . '/../../includes/connect.php';
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

    $logs = $stmt->fetchAll();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                container: {
                    center: true
                }
            }
        }
    </script>
</head>
<body>

    <nav class="flex items-center justify-between flex-wrap bg-sky-900 p-6">
        <div class="w-full block flex-grow sm:flex sm:items-center sm:w-auto container max-w-screen-lg">
            <div class="sm:flex-grow">
                <a href="#" class="text-white font-bold text-xl">
                    Admin Dashboard
                </a>
            </div>

            <div class="">
                <a href="#" class="px-5 text-white">Home</a>
                <a href="#" class="px-5 text-white">Users</a>
                <a href="#" class="px-5 text-white">Products</a>
                <a href="#" class="px-5 text-white">Categories</a>
                <a href="#" class="px-5 text-white">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container max-w-screen-lg">
        <h1 class="text-xl my-6 font-bold">Dashboard</h1>

        <h2 class="text-lg font-bold my-3">Recent Log Entries</h2>

        <table>
            <tr><td class="font-bold p-2 border-sky-900 border bg-sky-900 text-white">Date | Request method | Request URI | HTTP status code | Browser detail</td></tr>
            
            <?php foreach($logs as $log) : ?>
                <tr>
                    <td class="p-2 border-sky-900 border"><?=e($log['event'])?></td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
    
</body>
</html>