<?php 
    require_once(__DIR__ . '/vendor/autoload.php');
    use \Mailjet\Resources;
    define('API_PUBLIC_KEY', '9403075ff6c0369f3006a01335ccd51b');
    define('API_PRIVATE_KEY', '22d8768a1f5ad67893ff3b072a3839dd');
    $mj = new \Mailjet\Client(API_PUBLIC_KEY, API_PRIVATE_KEY,true,['version' => 'v3.1']);

if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $body = [                'Messages' => [
                   [
                    'From' => [
                        'Email' => "colasvincendon@gmail.com",
                        'Name' => "colas"
                    ],                        'To' => [
                          [
                            'Email' => "colasvincendon@gmail.com",
                            'Name' => "colas"
                        ]
                    ],
                    'Subject' => "Demande de renseignement",
                        'TextPart' => "$email, $message ",
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success();
        echo "Email envoyé avec succès !";
    }
    else{
        echo "Email non valide";
    }

} else {
    header('Location: index.php');
    die();
}
