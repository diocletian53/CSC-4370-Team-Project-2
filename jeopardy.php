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
<div class="banner">
<a href="logout.php">Click here</a> to Logout.
</div>

    <form>
        <table>
        <div id = "categories">
            <tr class="flex-container">
                <td>
                    Science                </td>
                <td>
                    History
                </td>
                <td>
                    Literature                </td>
                <td>
                    Geography:

                </td>
                <td>
                    Movies 
                </td>
            </tr>
        </div id="100">
            <tr class="flex-container">
                <td><button type="submit" name="submit_100_1"<?php echo isset($_POST['submit_100-1']) ? 'disabled' : ''; ?>><a href="./question.php?id=11">$100</a></td></button>
                <td><button type="submit" name="submit_100_2"<?php echo isset($_POST['submit_100-2']) ? 'disabled' : ''; ?>><a href="./question.php?id=12">$100</a></td></button>
                <td><button type="submit" name="submit_100_3"<?php echo isset($_POST['submit_100-3']) ? 'disabled' : ''; ?>><a href="./question.php?id=13">$100</a></td></button>
                <td><button type="submit" name="submit_100_4"<?php echo isset($_POST['submit_100-4']) ? 'disabled' : ''; ?>><a href="./question.php?id=14">$100</a></td></button>
                <td><button type="submit" name="submit_100_5"<?php echo isset($_POST['submit_100-5']) ? 'disabled' : ''; ?>><a href="./question.php?id=15">$100</a></td></button>
            </tr>
        </div>
        <div id="200">
        <tr class="flex-container">
                <td><button type="submit" name="submit_200_1"<?php echo isset($_POST['submit_200-1']) ? 'disabled' : ''; ?>><a href="./question.php?id=21">$200</a></td></button>
                <td><button type="submit" name="submit_200_2"<?php echo isset($_POST['submit_200-2']) ? 'disabled' : ''; ?>><a href="./question.php?id=22">$200</a></td></button>
                <td><button type="submit" name="submit_200_3"<?php echo isset($_POST['submit_200-3']) ? 'disabled' : ''; ?>><a href="./question.php?id=23">$200</a></td></button>
                <td><button type="submit" name="submit_200_4"<?php echo isset($_POST['submit_200-4']) ? 'disabled' : ''; ?>><a href="./question.php?id=24">$200</a></td></button>
                <td><button type="submit" name="submit_200_5"<?php echo isset($_POST['submit_200-5']) ? 'disabled' : ''; ?>><a href="./question.php?id=25">$200</a></td></button>
            </tr>
        </div>
        <div id="300">
        <tr class="flex-container">
                <td><button type="submit" name="submit_300_1"<?php echo isset($_POST['submit_300-1']) ? 'disabled' : ''; ?>><a href="./question.php?id=31">$300</a></td></button>
                <td><button type="submit" name="submit_300_2"<?php echo isset($_POST['submit_300-2']) ? 'disabled' : ''; ?>><a href="./question.php?id=32">$300</a></td></button>
                <td><button type="submit" name="submit_300_3"<?php echo isset($_POST['submit_300-3']) ? 'disabled' : ''; ?>><a href="./question.php?id=33">$300</a></td></button>
                <td><button type="submit" name="submit_300_4"<?php echo isset($_POST['submit_300-4']) ? 'disabled' : ''; ?>><a href="./question.php?id=34">$300</a></td></button>
                <td><button type="submit" name="submit_300_5"<?php echo isset($_POST['submit_300-5']) ? 'disabled' : ''; ?>><a href="./question.php?id=35">$300</a></td></button>
            </tr>
        </div>
        <div id="400">
        <tr class="flex-container">
                <td><button type="submit" name="submit_400_1"<?php echo isset($_POST['submit_400-1']) ? 'disabled' : ''; ?>><a href="./question.php?id=41">$400</a></td></button>
                <td><button type="submit" name="submit_400_2"<?php echo isset($_POST['submit_400-2']) ? 'disabled' : ''; ?>><a href="./question.php?id=42">$400</a></td></button>
                <td><button type="submit" name="submit_400_3"<?php echo isset($_POST['submit_400-3']) ? 'disabled' : ''; ?>><a href="./question.php?id=43">$400</a></td></button>
                <td><button type="submit" name="submit_400_4"<?php echo isset($_POST['submit_400-4']) ? 'disabled' : ''; ?>><a href="./question.php?id=44">$400</a></td></button>
                <td><button type="submit" name="submit_400_5"<?php echo isset($_POST['submit_400-5']) ? 'disabled' : ''; ?>><a href="./question.php?id=45">$400</a></td></button>
            </tr>

        </div>
        <div id="500">
        <tr class="flex-container">
                <td><button type="submit" name="submit_500_1"<?php echo isset($_POST['submit_500-1']) ? 'disabled' : ''; ?>><a href="./question.php?id=41">$500</a></td></button>
                <td><button type="submit" name="submit_500_2"<?php echo isset($_POST['submit_500-2']) ? 'disabled' : ''; ?>><a href="./question.php?id=42">$500</a></td></button>
                <td><button type="submit" name="submit_500_3"<?php echo isset($_POST['submit_500-3']) ? 'disabled' : ''; ?>><a href="./question.php?id=43">$500</a></td></button>
                <td><button type="submit" name="submit_500_4"<?php echo isset($_POST['submit_500-4']) ? 'disabled' : ''; ?>><a href="./question.php?id=44">$500</a></td></button>
                <td><button type="submit" name="submit_500_5"<?php echo isset($_POST['submit_500-5']) ? 'disabled' : ''; ?>><a href="./question.php?id=45">$500</a></td></button>
            </tr>

        </div>
        
        </table>
        
    </form>



    
</div>

</body>
</html>