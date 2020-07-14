<?php
include("includes/init.php");
$title = "Sharon's Portfolio";

// Default to form
$show_form = TRUE;

// Default to no feedback
$show_name_feedback = FALSE;
$show_email_feedback = FALSE;
$show_type_feedback = FALSE;
$show_organization_feedback = FALSE;
$show_description_feedback = FALSE;

// Default values
$name = "";
$email = "";
$type_design = "";
$organization = "";
$description = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $is_submit_valid = TRUE;

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    if (empty($name)) {
        $is_submit_valid = FALSE;
        $show_name_feedback = TRUE;
    }

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if (empty($email)) {
        $is_submit_valid = FALSE;
        $show_email_feedback = TRUE;
    }

    $type_design = filter_input(INPUT_POST, 'type_design', FILTER_SANITIZE_STRING);
    $type_design = strtolower($type_design);
    if (!in_array($type_design, array("ux", "graphic", "web"))) {
        $type_design = NULL;
    }
    if (empty($type_design)) {
        $is_submit_valid = FALSE;
        $show_type_feedback = TRUE;
    }

    $organization = filter_input(INPUT_POST, 'org', FILTER_SANITIZE_STRING);
    if (empty($organization)) {
        $is_submit_valid = FALSE;
        $show_organization_feedback = TRUE;
    }

    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    if (empty($description)) {
        $is_submit_valid = FALSE;
        $show_description_feedback = TRUE;
    }
    if (str_word_count($description) > 100) {
        $is_submit_valid = FALSE;
        $show_description_feedback = TRUE;
    }
    $show_form = !$is_submit_valid;
}
?>

<!doctype html>
<html>

<?php include("includes/head.php"); ?>

<body>

	<?php include("includes/header.php"); ?>

	<!-- <div id="writing"> -->
        <?php if ($show_form) { ?>
            <h1>Let's Collab!</h1>
            <form id="collab_form" method="post" action="form.php" novalidate>
                <?php
                    if ($show_name_feedback == TRUE) {
                        echo '<p class="feedback_form">Please enter your name.</p>';
                    }
                ?>
                <div class="input">
                    <div>
                        <label for="name_field">Name</label>
                    </div>
                    <input id="name_field" type="text" name="name" value="<?php echo htmlspecialchars($name);?>" />
                </div>
                <?php
                    if ($show_email_feedback == TRUE) {
                        echo '<p class="feedback_form">Please enter a valid email address.</p>';
                    }
                ?>
                <div class="input">
                    <div>
                        <label for="email_field">Email</label>
                    </div>
                    <input type="email" id="email_field" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>" novalidate/>
                </div>
                <?php
                    if ($show_type_feedback == TRUE) {
                        echo '<p class="feedback_form">Please choose a type of design.</p>';
                    }
                ?>
                <div class="input">
                    <div>
                        <label for="type_field">Type of design needed</label>
                    </div>
                    <select name="type_design">
                        <option value="" selected disabled>Choose Design Type</option>
                        <option value="ux">UX Design</option>
                        <option value="graphic">Graphic Design</option>
                        <option value="web">Web Design</option>
                    </select>
                </div>
                <?php
                    if ($show_organization_feedback == TRUE) {
                        echo '<p class="feedback_form">Please enter the name of your organization.</p>';
                    }
                ?>
                <div class="input">
                    <div>
                        <label for="org_field">Organization</label>
                    </div>
                    <input id="org_field" type="text" name="org" value="<?php echo htmlspecialchars($organization);?>" />
                </div>
                <?php
                if ($show_description_feedback == TRUE) {
                    echo '<p class="feedback_form">Please describe what you would like me to design in under 100 words.</p>';
                }
                ?>
                <div class="input">
                    <div>
                        <label for="descrip_field">What do you want me to design?</label>
                    </div>

                    <textarea id="descrip_field" name="description"><?php echo htmlspecialchars($_POST['description']); ?></textarea>
                </div>
                <div class="input submit-box">
                    <button type="submit" class="submit">Submit</button>
                </div>
            </form>
        <?php } else { ?>
            <h1>Thank you!</h1>
            <ul>
                <li><?php echo 'Name: '.$name?></li>
                <li><?php echo 'Email: '.$email?></li>
                <li><?php echo 'Type of Design: '.$type_design?></li>
                <li><?php echo 'Organization: '.$organization?></li>
                <li><?php echo 'Description: '.$description?></li>
            </ul>
            <p>I'll get back to you soon!</p>
        <?php } ?>
		<!-- </div> -->
		<?php include("includes/footer.php"); ?>
</body>
</html>
