
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
                    }
                    break;
                case '/register':
                    include_once("views/register.php");
                    if (isset($_POST['register'])) {
                        $error = [];
                       
                        $Filename = "uploads/".($_FILES["profile_pic"]["name"]);
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($Filename, PATHINFO_EXTENSION));
                        $check = getimagesize($_FILES["profile_pic"]["tmp_name"]);
                        if ($_FILES["profile_pic"]["error"] == 0) {
                            if ($check !== false) {
                                echo "File is an image - " . $check["mime"] . ".";
                                $uploadOk = 1;
                            } else {
                                echo "File is not an image.";
                                $uploadOk = 0;
                            }


                            // Check if file already exists
                            if (file_exists($Filename)) {
                                echo "Sorry, file already exists.";
                                $uploadOk = 0;
                            }

                            // Check file size
                            if ($_FILES["profile_pic"]["size"] > 500000) {
                                echo "Sorry, your file is too large.";
                                $uploadOk = 0;
                            }

                            // Allow certain file formats
                            if (
                                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                && $imageFileType != "gif"
                            ) {
                                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                $uploadOk = 0;
                            }

                            // Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) {
                                echo "Sorry, your file was not uploaded.";
                                // if everything is ok, try to upload file
                            } else {
                                if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $Filename)) {
                                    echo "The file " . htmlspecialchars($_FILES["profile_pic"]["name"]) . " has been uploaded.";
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                                }
                            }
                        } else {
                            $Filename = "Defult.jpg";
                        }

                        echo "<pre>";
                        print_r($_FILES);
                        echo "</pre>";

                        array_pop($_POST);
                        array_pop($_POST);
                        $Data = array_merge($_POST, array("profile_pic" => $Filename, "password" => md5($_POST['password'])));

                        $InsertRes = $this->Insert("users", $Data);
                        // echo "<pre>";
                        // print_r($InsertRes);
                        // echo "</pre>";
                        if ($InsertRes['Code'] == 1) {
                            header("location:login");
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