<!-- Dileep -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/feedbackmanage.css">
    <title>Feedback Management</title>
</head>

<body>
    <?php include "./headerforadmin.php" ?>
    <div class="feedback-main">

        <div class="feedback-form">
            <div class="main-head">Feedbacks</div>
            <div class="card-inside">
                <div class="author-det" id="line-1">Author Name</div>
                <div class="retrieve-line">default</div>
            </div>
            <div class="card-inside">
                <div class="author-det" id="line-2">Published Date</div>
                <div class="retrieve-line">default</div>
            </div>
            <div class="card-area">
                <div class="author-det" id="area">Feedback</div><br>
                <div class="retrieve-area">default</div>
            </div>
            <div class="card-btns">
                <button class="feedbtns"><i class="fa-solid fa-file-circle-plus"></i> Add</button>
                <button class="feedbtns"><i class="fa-solid fa-trash-can"></i>Ignore</button>
            </div>
        </div>

        <div class="feedback-source">
            <div class="source-head">Source</div>
            <table>

            </table>
        </div>

    </div>
    <?php include "./footer.php" ?>
</body>

</html>