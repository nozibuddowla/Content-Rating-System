<?php
require_once CONTROLLERS . 'CriticController.php';
class AdminController extends Controller
{
    public function index()
    {

        $data = [
            "AdminName" => $_SESSION['id'],
            "Password" => $_SESSION['password'],
            "totalCritic" => $this->getTotalNumberOfCritic(),
            "totalUser" => $this->getTotalNumberOfUser(),
            "totalContentCreator" => $this->getTotalNumberOfContentCreator()
        ];
        $this->view("Admin/AdminView", $data);
    }

    public function getTotalNumberOfCritic() // brings toltal number of Critic on database
    {
        $critic = $this->model('CriticModel');
        return $critic->getTotalNumberOfCritic();
    }
    public function getTotalNumberOfUser() //brings total number of normal user on database
    {
        $user = $this->model('UserModel');
        return $user->getTotalNumberOfUser();
    }
    public function getTotalNumberOfContentCreator() //brings total number of Content Creator on database
    {
        $cc = $this->model('ContentCreatorModel');
        return $cc->getTotalNumberOfContentCreator();
    }

    public function getAllUsers() //Get all the Users with their info
    {
        $users = $this->model('UserModel')->getAllUsers();
        echo json_encode(["data" => $users]);
    }

    public function getAllContentCreator() //Get all the Content creator with their info
    {
        $users = $this->model('ContentCreatorModel')->getAllContentCreator();
        echo json_encode(["data" => $users]);
    }

    public function getAllCritic() //Get all the Critic with their info
    {
        $users = $this->model('CriticModel')->getAllCritic();
        echo json_encode(["data" => $users]);
    }

    public function getAllPendingCritic()
    {
        $users = $this->model('CriticModel')->getAllPendingCritic();
        echo json_encode(["data" => $users]);
    }

    public function TestingButton()
    {
        echo "Hoise toh hasidul eto dum ken";
    }
}
