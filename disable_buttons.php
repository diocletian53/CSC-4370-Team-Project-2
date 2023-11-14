<?php
session_start();

// Initialize session variables if not set
if (!isset($_SESSION['disabled_buttons'])) {
    $_SESSION['disabled_buttons'] = [];
}

// Function to check if a button is disabled
function isButtonDisabled($category, $value)
{
    return in_array("{$category}_{$value}", $_SESSION['disabled_buttons']);
}

// Function to disable a button
function disableButton($category, $value)
{
    $_SESSION['disabled_buttons'][] = "{$category}_{$value}";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jeopardy Game</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<div class="banner">
    Jeopardy
</div>

<div>
    <form method="post">
        <table>
            <?php
            // Loop through categories and values
            for ($category = 1; $category <= 5; $category++) {
                echo '<tr class="flex-container">';
                for ($value = 100; $value <= 300; $value += 100) {
                    $buttonName = "submit_{$value}_{$category}";
                    $isDisabled = isButtonDisabled($category, $value);

                    echo "<td>";
                    echo "<button type='submit' name='{$buttonName}' " . ($isDisabled ? 'disabled' : '') . ">${$value}</button>";
                    echo "</td>";

                    // If the button is clicked, disable it
                    if (isset($_POST[$buttonName])) {
                        disableButton($category, $value);
                    }
                }
                echo '</tr>';
            }
            ?>
        </table>
    </form>
</div>

<?php
// Add your test functionality here, for example:
foreach ($_SESSION['disabled_buttons'] as $disabledButton) {
    list($value, $category) = explode('_', $disabledButton);
    echo "<p>Button $$value in Category $category is disabled!</p>";
}
?>
</body>
</html>



    
</div>

</body>
</html>