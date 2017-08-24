<?=$form->field($user, 'email', [
	'template' => '<div class="input-group mb20"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>{input}</div>{error}',
]);?>

<?=$form->field($user, 'username', [
    'template' => '<div class="input-group mb20"><span class="input-group-addon"><i class="fa fa-user"></i></span>{input}</div>{error}',
]);?>

<?=$form->field($user, 'password', [
    'template' => '<div class="input-group mb20"><span class="input-group-addon"><i class="fa fa-key"></i></span>{input}</div>',
])->passwordInput();?>
