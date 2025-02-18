<?php
$urls = [
    'http://142.93.122.88/',
    'http://167.172.135.185/',
    'http://ragchewnetwork.ddns.net:8080/supermon2/link.php?nodes=60568,6487',
    'http://ragchewgmrshub.ddns.net/supermon2/link.php?nodes=531048,531049',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amateur Radio Network Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <header>
        <h1><i class="fa-solid fa-broadcast-tower"></i> Amateur Radio Network Dashboard</h1>
    </header>

    <div class="grid-container">
        <?php foreach ($urls as $url): ?>
            <div class="grid-item">
                <iframe src="<?php echo htmlspecialchars($url); ?>"></iframe>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
