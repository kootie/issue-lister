<?php include 'inc\header.php';    ?>

<div class="jumbtron">
            <h1>Find an Issue</h1>
            <form method="GET" action="index.php">
                <select name="category" class="form-control">
                    <option value="0">Choose Category</option>
                    <?php foreach($categories as $category): ?>

                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>

                    <?php endforeach; ?>
                </select>
                <br>
                <input type="submit" class="btn btn-lg btn-success" value="FIND">
            </form>
        </div>

        <h3><?php echo $title ?></h3>
        <?php foreach($issues as $issue): ?>
        <div class="row marketing">
            <div class="col-md-10">
                <h4><?php echo $issue->make_model; ?></h4>
                <p><?php echo $issue->description; ?></p>

            </div>

            <div class="col-md-2">
                <a class="btn btn-default" href="issue.php?id=<?php echo $issue->id; ?>">View</a>
            </div>
        </div>
        <?php endforeach; ?>


        

<?php include 'inc\footer.php';    ?>