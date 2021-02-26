<?php
	class SessionController {
		public function destroy_session(){
			session_destroy();
			echo "sessao destruida! <br>";
			echo	'<form action="index.php" method="post">';
			echo '<input type="hidden" name="class" value="Produto">';
			echo '<input type="hidden" name="acao" value="getAllProdutoCarrinho">';
			echo "<button>Voltar</button>";
			echo "</form>";
		}
	}
?>