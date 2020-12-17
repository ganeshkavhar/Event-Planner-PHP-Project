<?php
require_once 'functions.php';
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/Connection.php';

$connection = Connection::getInstance();
$gateway = new LocationTableGateway($connection);

$locations = $gateway->getLocations();

if (!isset($formdata)) {
    $formdata = array();
}

if (!isset($errors)) {
    $errors = array();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Event Form</title> 
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content">
            <div class = "container">
                <h1>Create Event Form</h1><!--form title-->
                <?php 
                if (isset($errorMessage)) {
                    echo '<p>Error: ' . $errorMessage . '</p>';
                }
                ?>
                <form action="createEvent.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label for="Title" class="col-md-2 control-label">Title</label><!--event title-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Title" name="Title" value="<?php echoValue($formdata, "Title")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="TitleError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Title');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Description" class="col-md-2 control-label">Description</label><!--event description-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Description" name="Description" value="<?php echoValue($formdata, "Description")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="DescriptionError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Description');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="StartDate" class="col-md-2 control-label">Start Date</label><!--start date-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="StartDate" name="StartDate" value="<?php echoValue($formdata, "StartDate")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="StartDateError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'StartDate');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="EndDate" class="col-md-2 control-label">End Date</label><!--end date-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="EndDate" name="EndDate" value="<?php echoValue($formdata, "EndDate")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="EndDateError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'EndDate');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Cost" class="col-md-2 control-label">Cost</label><!--cost-->
                        <div class="col-md-5">
                            <input type="number" class="form-control" id="Cost" name="Cost" value="<?php echoValue($formdata, "Cost")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="CostError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Cost');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="LocID" class="col-md-2 control-label">Location ID</label><!--location id-->
                        <div class="col-md-5">
                            <select name="LocID"
                                        id="LocID"
                                        class="form-control"
                                        >
                                    <?php
                                    foreach ($locations as $location) {
                                        echo '<option value="'.$location['LocationID'].'">'.$location['Name'].'</option>';
                                    }
                                    ?>
                                </select>
                        </div>
                        <div class="col-md-4">
                            <span id="LocIDError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'LocID');?>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class = "btn btn-default pull-right">Create Event <span class="glyphicon glyphicon-send"></span></button>
                    <a class="btn btn-default navbar-btn" href = "viewEvents.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a><!--register button-->
                </form>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
