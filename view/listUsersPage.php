<?php

    require '../model/Class/User.php';

    include('../public/imports/bootstrap.php');

    use Class\User;

    $users = User::list();
    $message = '';

    // if(isset($_GET['status'])){
    //     switch ($_GET['status']) {
    //     case 'success':
    //         $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
    //         break;

    //     case 'error':
    //         $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
    //         break;
    //     }
    // }

    $results = '';
    foreach($users as $user){
        $results .= '<tr>
                        <td>'.$user->id.'</td>
                        <td>'.$user->username.'</td>
                        <td>'.$user->email.'</td>
                        <td>'.$user->password.'</td>
                        <td>'.date('d/m/Y à\s H:i:s',strtotime($user->datetime)).'</td>
                        <td>
                            <a href="editar.php?id='.$user->id.'">
                            <button type="button" class="btn btn-primary">Editar</button>
                            </a>
                            <a href="excluir.php?id='.$user->id.'">
                            <button type="button" class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                        </tr>';
    }

    $results = strlen($results) ? $results : '<tr>
                                                        <td colspan="6" class="text-center">
                                                                Nenhum usuário cadastrado
                                                        </td>
                                                        </tr>';

    ?>
    <main>

    <?=$message?>

    <section>
        <a href="../view/newUserPage.php">
        <button class="btn btn-success m-5">Novo usuário</button>
        </a>
    </section>

    <section>

        <table class="table bg-light mt-3">
            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Datetime</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                <?=$results?>
            </tbody>
        </table>

    </section>


    </main>