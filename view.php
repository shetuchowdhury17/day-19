<?php
//require_once 'app/classes/Demo.php';
//require_once 'app/classes/Student.php';
//require_once 'app/classes/Exam.php';

require_once 'vendor/autoload.php';
use App\classes\Demo;
use App\classes\Student;
use App\classes\Exam;



Student::add();
echo '<br/>';
Exam::view();

//    if(isset($_POST['btn']))
//    {
//        $demo = new App\classes\Demo();
//        $result = $demo->wordCharCount($_POST);
//    }

    if(isset($_POST['btn']))
    {
        $result = Demo::wordCharCount($_POST);
    }
?>

<form action="" method="post">
    <table>
        <tr>
            <th>Enter Your Word</th>
            <td><input type="text" name="enter_string" size="50"></td>
        </tr>

        <tr>
            <th>Total Number of Word</th>
            <td><input type="text" value="<?php echo $result['word_length']?>"></td>
        </tr>

        <tr>
            <th>Total Number of Character</th>
            <td><input type="text" value="<?php echo $result['string_lenght']?>"></td>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>
