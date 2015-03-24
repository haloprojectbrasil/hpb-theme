<?php get_header(); ?>

	<div class="box">
        <h1>Oops!</h1>
        <p>Me parece que a página que você estava tentando acessar.... bem, não existe.</p>
        <p>Isso pode ser resultado de várias coisas. Ou realmente não existe, ou foi movida para outro lugar - ou o gênio digitou errado hehehe. Tente pesquisar no formulário abaixo pelo que você estava procurando :)</p>
		<?php
			$search_form=get_search_form();
			echo $search_form;
		?>
    </div>

<?php get_footer(); ?>
