<?php
require("database.php");

class Users {
    function get_user($id)
    {
        global $db;

        $request = "SELECT * FROM Users WHERE id=$id";
        $resultat = $db->query($request);
        $user = $resultat->fetch();

        return($user);
    }

    function connect($username, $password)
    {
        global $db;
        echo($username);
        $request = "SELECT * FROM Users WHERE username=\"$username\"";
        $resultat = $db->query($request);
        $user = $resultat->fetch();

        if(password_verify($password, $user["password"]))
        {
            session_start();
            $_SESSION["account"] = [
                'id' => $user["id"],
                'username' => $user["username"]
            ];

            header('Location: /');
        }
        else
        {
            echo("Impossible de se connecter");
        }
    }
}

class Works {
    function get_works()
    {
        global $db;

        $request = "SELECT * FROM works";
        $resultat = $db->query($request);
        $user = $resultat->fetchAll();

        return($user);
    }

    function create($titre, $description)
    {
        global $db;

        $request = $db->prepare('INSERT INTO works (titre, description) VALUES (?, ?)');
        $request->execute([$titre, $description]);
    }

    function del($titre, $description, $id)
    {
        global $db;

        $request = $db->prepare("DELETE works SET titre=?, description=? WHERE id=\"$id\"");
        $request->execute([$titre, $description, $id]);
    }

    function get_titre_by_id($id)
    {
        global $db;

        $request = "SELECT titre FROM works WHERE id=\"$id\"";
        $resultat = $db->query($request);
        $user = $resultat->fetch();
        print_r($user[0]);
    }

    function get_desc_by_id($id)
    {
        global $db;

        $request = "SELECT description FROM works WHERE id=\"$id\"";
        $resultat = $db->query($request);
        $user = $resultat->fetch();
        print_r($user[0]);
    }
}
?>  