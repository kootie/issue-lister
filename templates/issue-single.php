<?php include 'inc\header.php';    ?>

    <h2 class="page-header"><?php echo $issue->make_model;  ?></h2>
    <small>Posted By:<?php echo $issue->username; ?></small>
    <hr>
    <p class="lead"><?php echo $issue->description; ?></p>
    <ul class="list-group">
        <li class="list-group-item">Extra</li>
        <li class="list-group-item">Extra</li>
        <li class="list-group-item">Extra</li>
    </ul>
    <br><br>
    <a href="index.php">Go Back</a>

<?php include 'inc\footer.php';    ?>