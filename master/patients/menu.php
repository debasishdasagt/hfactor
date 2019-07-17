

                <div class='btn-group btn-group-sm'>
                <a class='btn btn-info' role='button' href="patientsday.php">Today's Patients</a>
                <?php if($rolecd=='1003'){ ?>
                <a class='btn btn-info' role='button' href="newpatient.php">New Patient</a>
                <?php } else if($rolecd=='1001'){ ?>
                <a class='btn btn-info' role='button' href="selectch.php">New Patient</a>
                <?php } ?>
                
                <a class='btn btn-info' role='button' href="allpatients.php">All Patients</a>
                
                <a class='btn btn-info' role='button' href="reports.php">Reports</a>
            </div>