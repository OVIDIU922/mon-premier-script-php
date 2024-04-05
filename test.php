<?php var_dump( array('CodeIgniter', 'php', 'phpMyAdmin', 'lucidar.me') ); ?>
var_dump($characters);
public function index()
{
    $value = $rick + 1;

    return $this->twig->render('Home/index.html.twig', [
        "value" => $value,
    ]);
}