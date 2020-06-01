<!DOCTYPE html>
<html>
  <head>
    <title>CGM Sistemas - Automação Comercial</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/cgm.ico" sizes="32x32" type="image/png">
  </head>
    <?php 
      $nome = "";
      $email = "";
      $fone = "";
      $cidade = "";
      $msg = "";

      $erro_nome = "";
      $erro_email = "";
      $erro_fone = "";
      $erro_cidade = "";
      $erro_msg = "";
    
    ?>
    <?php
      function clear_input ($data) {
        $cleandata = trim($data);
        $cleandata = stripcslashes($cleandata);
        $cleandata = htmlspecialchars($cleandata);

        return $cleandata;
      }
    ?>
  <body>
   <!-- navbar -->
    <header id="navbar">
      <img src="img/cgm_topo.png" alt="CGM Sistemas">
      <nav><br><br>
        <ul id="navbar-list">
          <li><a href="https://download.teamviewer.com/download/TeamViewer_Setup.exe">Team Viewer</a></li>
          <li><a href="#about-section">Sobre</a></li>
          <li><a href="#skills-section">Sistemas</a></li>
          <li><a href="#rodape">Contato</a></li>
        </ul>
      </nav>
    </header>
    <!-- fim navbar -->
    <main>
      <!-- banner início -->
      <div id="main-banner"></div>
      <!-- banner fim -->
      <!-- about inicio -->
      <section id="about-section">
        <h2>Sobre a CGM Sistemas</h2>
        <p>A nossa empresa nasceu em 1993 e consolidou-se no mercado através do comprometimento com nossos clientes. 
          Hoje oferecemos soluções para automação de farmácias, drogarias, lojas, mercados, postos de combustveis e silos. 
          Tudo isso graças a um resultado de muito trabalho e dedicação, com a ajuda de nossos clientes e colaboradores para que 
          chegássemos num objetivo que disponibilizar uma forma rápida, prática e segura, com consultas, relatórios e 
          mecanismos de atendimento ao cliente com mais agilidade no suporte ao cliente. </p>
      </section>
      <!-- about fim -->
    </main>
    <!-- skills inicio -->
    <section id="skills-section">
      <div class="container">
        <div class="skills-container" style="order: 1">
          <img src="img/loja.png" alt="CGM Sistemas">
          <h3>Lojas e Supermercados</h3>
          <p>
              - Controle de Estoque; <br>
              - Emissão de NFCe e NFe; <br>
              - Controle de Contas a pagar e de Crediário (Convenios);<br>
              - Controle de Venda Consignada e Programa de Fidelidade; <br>
              - Modulo Mobile; <br> 
              - Controle para romaneio de carga. <br>                   
          </p>
          
        </div>
        <div class="skills-container" style="order: 4">
          <img src="img/posto.png" alt="CGM Sistemas">
          <h3>Postos de Combustíveis</h3>
          <p>
            - Controle de Estoque; <br>
            - LMC; <br>
            - Automação de bombas; <br>
            - Emissão de NFCe (Nota Fiscal de Consumidor Eletrônica); <br>
            - Emissão de NFe (Nota Fiscal Eletrônica); <br>
            - Controle de Contas a pagar; <br>
            - Controle de Crediário (Convenios);<br>
          </p>

        </div>
        <div class="skills-container" style="order: 2">
          <img src="img/farmaco.png" alt="CGM Sistemas">
          <h3>Farmácias e Drogarias</h3>
          <p>
            - Controle de Estoque e Pedidos Eletrônicos; <br>
            - Farmácia Popular (Concentrador Próprio) e PBM's; <br>
            - Controle de Lotes e Validades (SNGPC); <br>
            - Emissão de NFCe e NFe; <br>
            - Controle de Contas a pagar e de Crediário (Convenios);<br>
            - Gerenciador de Programa de Fidelidade; <br>                         
            - Controle de Tele-Entrega. <br>                                     
          </p>
        </div>
        <div class="skills-container" style="order: 3">
          <img src="img/farmaco.png" alt="CGM Sistemas">
          <h3>SNGPC</h3>
          <p>
            - Envio dos Arquivos para a Anvisa; <br>
            - Emissão de Mapas Trimestrais; <br>
            - Emissão de Mapas Mensais; <br>
            - Emissão de Mapas Diários. <br>
          </p>
        </div>
        <div class="skills-container"style="order: 5">

          <img src="img/silos.png" alt="CGM Sistemas">
          <h3>Silos e Armazéns</h3>
          <p>
            - Emissão de NFe (Nota Fiscal Eletrônica); <br>
            - Controle de Saldos do produtor; <br>
            - Controle de Expedição para o Porto; <br>
            - Emissão Contra-nota para o Produtor; <br>
            - Relatórios por safra/culturas por Produtor. <br>
          </p>
        </div>
        <div class="skills-container"style="order: 6">
          <img src="img/financeiro.png" alt="CGM Sistemas">
          <h3>Financeiro</h3>
          <p>
              - Gerar lançamentos de receitas e despesas; <br>
              - Programar lançamentos futuros; <br>
              - Controlar suas contas bancarias; <br>
              - Demonstrativo Financeiro (Relatórios e Gráficos).<br>
          </p>  
        </div>
      </div>
    </section>
    <br>
    <!-- skills fim -->
    <!-- footer inicio -->
    <footer>
      <h2 id="rodape">Contato</h2>
      <p> 
        Horário de Atendimento:<br>
        Seg-Sex: 8:00 as 11:30 hrs - 13:30 as 18:00 hrs<br>
        Rua José Bonifácio, 221 - A  /  Canguçu/RS
      </p>
      <p>
        Caso queira falar sobre algum dos nossos sistemas pode entrar em contato pelos fones (53) 3252.7856 - (53) 3252.2485 - (53) 98118.1800,
        ou se preferir entre em contato pelo formulário abaixo.
      </p>
      <br>

      <?php 
          // Inserir Arquivos do PHPMailer
          require 'phpmailer/Exception.php';
          require 'phpmailer/PHPMailer.php';
          require 'phpmailer/SMTP.php';

          // Usar as classes sem o namespace
          use PHPMailer\PHPMailer\PHPMailer;
          use PHPMailer\PHPMailer\Exception;
		
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $fone = $_POST['fone'];
            $cidade = $_POST['cidade'];
            $msg = $_POST['msg'];

            if ($nome == "") {
              $erro_nome = '* O nome é obrigatório';
            } elseif ($email == "") {
              $erro_email = '* O E-mail é obrigatório';
            } elseif (filter_var($email,FILTER_VALIDATE_EMAIL) == false) {
              $erro_email = '* O E-mail  informado é inválido';
            } elseif ($fone == "") {
              $erro_fone = '* O Telefone é obrigatório';
            } elseif ($cidade == "") {
              $erro_cidade = '* A cidade é obrigatória';  
            } elseif ($msg == "") {
              $erro_msg = '* A mensagem é obrigatória';
            } else {
              $nome = clear_input($nome);
              $email = clear_input($email);
              $fone = clear_input($fone);
              $cidade = clear_input($cidade);
              $msg = clear_input($msg);
            }

            $texto_mensagem = 'E-mail enviado através do Site' . '<br><br>' . 
                  'Nome: ' . $nome . '<br>' . 
                  'E-mail: ' . $email . '<br>' . 
                  'Telefone: ' . $fone . '<br>' . 
                  'Cidade: ' . $cidade . '<br>' . 
                  'Mensagem: ' . $msg . '<br>';

            // Criação do Objeto da Classe PHPMailer
            $mail = new PHPMailer(true); 
            $mail->CharSet="UTF-8";


            try {
          
              //Retire o comentário abaixo para soltar detalhes do envio 
              // $mail->SMTPDebug = 2;                                
              // Usar SMTP para o envio
              $mail->isSMTP();                                      
              // Detalhes do servidor (No nosso exemplo é o Google)
              $mail->Host = 'smtp.gmail.com';
              // Permitir autenticação SMTP
              $mail->SMTPAuth = true;                               
              // Nome do usuário
              $mail->Username = 'cgmsistemassite@gmail.com';  
              // Senha do E-mail         
              $mail->Password = 'cgm12345';       
              // Tipo de protocolo de segurança
              $mail->SMTPSecure = 'tls';   
              // Porta de conexão com o servidor                        
              $mail->Port = 587;
              // Garantir a autenticação com o Google
              $mail->SMTPOptions = array(
                  'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
        
                // Remetente
                $mail->setFrom($email, 'Contato On-Line CGM Sistemas');
                
                // Destinatário
                $mail->addAddress('cgm@cgmsistemas.com.br', 'CGM Sistemas');
                $mail->addAddress('contato@cgmsistemas.com.br', 'CGM Sistemas');
                $mail->addAddress('atendimento@cgmsistemas.com.br', 'CGM Sistemas');
                $mail->addAddress('cgmsistemassite@gmail.com', 'CGM Sistemas');
        
                // Conteúdo 
                // Define conteúdo como HTML
                $mail->isHTML(true);                                  
        
                // Assunto
                $mail->Subject = 'Site - CGM SISTEMAS';
                $mail->Body    = $texto_mensagem;
                $mail->AltBody = $texto_mensagem;
        
                // Enviar E-mail
                $mail->send();
                  echo 'Mensagem enviada com sucesso, agradecemos o contato!';
                } catch (Exception $e) {
                  echo 'A mensagem não foi enviada';
                }
          }
      ?>

      <form action="index.php#rodape" method="post" name="frcont" id="frcont" enctype="multipart/form-data" >
          <input type="text" name="nome" placeholder="Seu nome" required >
            <div class="erro-form"><?php echo $erro_nome; ?></div>
          <input type="email" name="email" placeholder="Seu e-mail" required>
            <div class="erro-form"><?php echo $erro_email; ?></div>
          <input type="fone" name="fone" placeholder="Seu telefone" required>
            <div class="erro-form"><?php echo $erro_fone; ?></div> 
          <input type="text" name="cidade" placeholder="Sua cidade" required>
            <div class="erro-form"><?php echo $erro_cidade; ?></div> 
          <textarea name="msg" placeholder="Digite uma mensagem" required></textarea> 
            <div class="erro-form"><?php echo $erro_msg; ?></div>
          <input type="submit" value="Enviar">
            <div class="sucesso-form"></div>
          
      </form>

    <!-- E-mail fim -->  

      <p>Desenvolvido por <span class="detail">CGM Sistemas</span></p>
    </footer>
    <!-- footer fim -->
  </body>
</html>