
<?php
require_once("model/model.php");
class controller  extends model
{

    public function __construct(public $baseURL = null)
    {
        parent::__construct();
        $this->baseURL = "http://localhost/assessment-1/assessment-1/Bank_Management_assessment/";

        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("views/header.php");
                    include_once("views/homepage.php");
                    include_once("views/footer.php");
                    break;
                case '/contact':
                    include_once("views/header.php");
                    include_once("views/contact.php");
                    include_once("views/footer.php");
                    break;
                case '/about':
                    include_once("views/header.php");
                    include_once("views/about.php");
                    include_once("views/footer.php");
                    break;
                case '/services':
                    include_once("views/header.php");
                    include_once("views/services.php");
                    include_once("views/footer.php");
                    break;
                case '/banker':
                    include_once("views/banker/bankerheader.php");
                    include_once("views/homepage.php");
                    include_once("views/footer.php");
                    break;
                case '/customer':
                    include_once("views/customer/customerheader.php");
                    include_once("views/homepage.php");
                    include_once("views/footer.php");
                    break;
                case '/login':
                    include_once("views/login.php");
                    break;
                case '/register':
                    include_once("views/register.php");
                    if (isset($_POST['register'])) {
                        $UploadFile = "uploads/";
                        $Filename = $UploadFile . ($_FILES["profile_pic"]["name"]);
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($Filename, PATHINFO_EXTENSION));
                        echo "<pre>";
                        print_r($_FILES);
                        echo "</pre>";

                        array_pop($_POST);
                        array_pop($_POST);
                        echo "<pre>";
                        print_r($_POST);
                        echo "</pre>";
                    }
                    break;

                default:

                    break;
            }
        } else {
            header("location:home");
        }
    }
}

$controller = new controller;
?>