<h1> Listagem de pessoas assss </h1>
<p><a href="<?= url('/pessoa/novo')?>">Cadastrar Pessoa</a></p> 
<?php

if (!empty($pessoas)) {

    

    foreach ($pessoas as $pessoa) {
        var_dump($pessoa);
    }
}