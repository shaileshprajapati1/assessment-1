
<?php
session_start();
require_once("model/model.php");
class controller  extends model
{

    public function __construct(public $baseURL = null)
    {
        ob_start();
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
                case '/addcustomer':
                    // include_once("views/banker/bankerheader.php");
                    include_once("views/banker/addcustomer.php");
                    if(isset($_POST['add'])){
                        echo "<pre>";
                        print_r($_POST);
                        echo "</pre>";

                    }

                    break;
                case '/customer':
                    include_once("views/customer/customerheader.php");
                    include_once("views/homepage.php");
                    include_once("views/footer.php");
                    break;
                case '/logout':
                    session_destroy();
                    header("location:login");
                    break;
                case '/login':
                    include_once("views/login.php");
                    if (isset($_POST['login'])) {
                        $LoginRes = $this->Login($_POST['username'], $_POST['password']);
                        // print_r($LoginRes['Data']);
                        if ($_POST['username'] != "" && $_POST['password'] != "") {
                            if ($LoginRes["Code"] == 1) {
                                $_SESSION['userdata'] = $LoginRes["Data"];
                                if ($LoginRes['Data']->role_id == 1) {
                                    header("location:banker");
                                } else {
                                    header("location:customer");
                                }
                            } else {
                                echo  "<script>
                                alert('Invalid User');
                                </script>";
                            }
                        } else {
                            echo  "<script>
                            alert('Enter valid UserName And Password');
                            </script>";
                        }
                    }
                    break;


                default:

                    break;
            }
        } else {
            header("location:home");
        }
        ob_flush();
    }
}

$controller = new controller;
?>