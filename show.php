<?php
session_start();

if (!isset($_SESSION['vday_data'])) {
    echo "<script>alert('No data found!'); window.location.href='vday.php';</script>";
    exit;
}

$data = $_SESSION['vday_data'];

if (isset($_POST['submit'])) {
    $message = $_POST['message'];

    // Save message in session (you can also store it in a file)
    $_SESSION['vday_messages'][] = $message;

    echo "<script>alert('Message saved!'); window.location.href='show.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Valentine's Message</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vday.css">
    <style>
        body {
            background-color: #ffccd5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            max-width: 600px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .title {
            color: #d63384;
        }
        .love {
            font-size: 1.2em;
            font-weight: bold;
            color: #ff4d6d;
        }
        .btn-back {
            margin-top: 20px;
            background-color: #ff4d6d;
            color: white;
        }
        .btn-back:hover {
            background-color: #d63384;
        }
        .message-box {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card-body">
            <h1 class="title">💖 My Valentine 💖</h1>
            <p class="text">My name is <b><?php echo htmlspecialchars($data['fullname']); ?></b> and my handsome boyfriend is Rocky. 
            He asked me if I could be his valentine—I said <b><?php echo htmlspecialchars($data['college']); ?></b>.</p>

            <p class="text">Now, I’m planning to go on a date with him in <b><?php echo htmlspecialchars($data['country']); ?></b>. 
            Instead of ordering expensive food, I would prefer to eat <b><?php echo htmlspecialchars($data['dreamsize']); ?></b> chocolates, 
            kiss him <b><?php echo htmlspecialchars($data['studyfrequency']); ?></b> time/s, and enjoy <b><?php echo htmlspecialchars($data['favoriteproduct']); ?></b> together. 
            After Valentine's Day, I plan to spend time with him <b><?php echo htmlspecialchars($data['consumptionfrequency']); ?></b> time/s a week.</p>
            <p class="love">I love him so muchhhh! 💕</p>
            <a href="vday.php" class="btn btn-back">Back</a>

            <div class="message-box">
                <h3>Leave a message:</h3>
                <form method="POST">
                    <textarea name="message" class="form-control" rows="3" placeholder="Write your message here..."></textarea>
                    <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
                <h4>Messages:</h4>
                <ul>
                    <?php
                    if (!empty($_SESSION['vday_messages'])) {
                        foreach ($_SESSION['vday_messages'] as $msg) {
                            echo "<li>" . htmlspecialchars($msg) . "</li>";
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
