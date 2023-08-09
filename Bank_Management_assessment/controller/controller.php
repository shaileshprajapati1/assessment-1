
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
                case '/viewallcustomer':
                    $ViewallRes = $this->Select("users",array("role_id"=>"2"));
                    // echo "<pre>";
                    // print_r($ViewallRes["Data"][0]);
                    // echo "</pre>";
                    include_once("views/banker/bankerheader.php");
                    include_once("views/banker/viewallcustomer.php");
              
                   
                    break;
                case '/totalamount':
                    include_once("views/banker/bankerheader.php");
                    include_once("views/banker/totalamount.php");
              
                   
                    break;
                
                case '/addcustomer':
                    // include_once("views/banker/bankerheader.php");
                    include_once("views/banker/addcustomer.php");
                    if (isset($_POST['add'])) {
                        array_pop($_POST);
                        $targetDirectory = "uploads/"; // Specify the directory where you want to store uploaded files
                        $targetFile = $targetDirectory . basename($_FILES["profile_pic"]["name"]);
                        $uploadOk = 1;
                        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

                        // Check if the file is a valid image
                        if (isset($_POST["submit"])) {
                            $check = getimagesize($_FILES["profile_pic"]["tmp_name"]);
                            if ($check !== false) {
                                echo "File is an image - " . $check["mime"] . ".";
                                $uploadOk = 1;
                            } else {
                                echo "File is not an image.";
                                $uploadOk = 0;
                            }
                        }

                        // Check if the file already exists
                        if (file_exists($targetFile)) {
                            echo "Sorry, the file already exists.";
                            $uploadOk = 0;
                        }

                        // Check the file size (optional)
                        // if ($_FILES["profile_pic"]["size"] > 50000) {
                        //     echo "Sorry, your file is too large.";
                        //     $uploadOk = 0;
                        // }

                        // Allow only specific file formats (optional)
                        $allowedFormats = array("jpg", "jpeg", "png", "gif");
                        if (!in_array($fileType, $allowedFormats)) {
                            echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
                            $uploadOk = 0;
                        }

                        // Check if $uploadOk is set to 0 by an error
                        if ($uploadOk == 0) {
                            echo "Sorry, your file was not uploaded.";
                        } else {
                            if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $targetFile)) {
                                echo "The file " . basename($_FILES["profile_pic"]["name"]) . " has been uploaded.";
                            } else {
                                echo "Sorry, there was an error uploading your file.";
                            }
                        }
                        $data = array_merge($_POST, array("profile_pic" => $targetFile));
                        // echo "<pre>";
                        // print_r($data);
                        // // print_r($_FILES);
                        // echo "</pre>";
                        $InsertRes = $this->Insert("users", $data);
                        if ($InsertRes["Code"] == 1) {
                            header("location:viewallcustomer");
                        }
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