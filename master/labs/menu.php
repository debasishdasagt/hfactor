<div class='btn-group btn-group-sm'>
                <a class='btn btn-info' role='button' href="addtest.php">New Test</a>
                <a class='btn btn-info' role='button' href="tagtests.php">Tag Tests</a>
                <?php
                if($rolecd=="1001")
                {
                ?>
                <a class='btn btn-info' role='button' href="approvetest.php">Approve Test</a>
                <a class='btn btn-info' role='button' href="addlab.php">New Lab.</a>
                <a class="btn btn-warning" role="button" href="license.php">SW Licensing</a>
                <?php } ?>
                
</div>

