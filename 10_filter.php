<?php
    $filters = array(
        'roll_no' => FILTER_VALIDATE_INT,
        'email' => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_input_array(INPUT_POST, $filters));
?>

<form method="post" action="10_filter.php">
    <input type="text" name="roll_no">
    <input type="email" name="email">
    <button type="submit">Submit</button>
</form>