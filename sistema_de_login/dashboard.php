<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

require_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            padding: 40px;
        }
        
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 20px;
        }
        
        h1 {
            color: #333;
            font-size: 32px;
        }
        
        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .user-info {
            text-align: right;
        }
        
        .user-info p {
            color: #666;
            font-size: 14px;
            margin: 5px 0;
        }
        
        .user-info .nome {
            font-size: 18px;
            font-weight: 600;
            color: #333;
        }
        
        .btn-logout {
            padding: 10px 20px;
            background: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-logout:hover {
            background: #c82333;
        }
        
        .content {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
        }
        
        .welcome-message {
            font-size: 18px;
            color: #333;
            margin-bottom: 30px;
        }
        
        .info-box {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 4px solid #667eea;
        }
        
        .info-box label {
            font-weight: 600;
            color: #666;
            display: block;
            margin-bottom: 5px;
            font-size: 12px;
            text-transform: uppercase;
        }
        
        .info-box p {
            font-size: 16px;
            color: #333;
            word-break: break-all;
        }
        
        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 30px;
        }
        
        .btn {
            padding: 12px 24px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
        }
        
        .btn:hover {
            background: #764ba2;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Bem-vindo! 👋</h1>
            <div class="header-right">
                <div class="user-info">
                    <p>Logado como:</p>
                    <p class="nome"><?php echo htmlspecialchars($_SESSION['usuario_nome']); ?></p>
                    <p style="font-size: 12px; color: #999;"><?php echo htmlspecialchars($_SESSION['usuario_email']); ?></p>
                </div>
                <a href="logout.php" class="btn-logout">Sair</a>
            </div>
        </header>
        
        <div class="content">
            <p class="welcome-message">
                Olá, <strong><?php echo htmlspecialchars($_SESSION['usuario_nome']); ?></strong>! 
                Sua sessão está ativa.
            </p>
            
            <div class="info-box">
                <label>ID do Usuário</label>
                <p><?php echo htmlspecialchars($_SESSION['usuario_id']); ?></p>
            </div>
            
            <div class="info-box">
                <label>Nome</label>
                <p><?php echo htmlspecialchars($_SESSION['usuario_nome']); ?></p>
            </div>
            
            <div class="info-box">
                <label>Email</label>
                <p><?php echo htmlspecialchars($_SESSION['usuario_email']); ?></p>
            </div>
            
            <div class="buttons">
                <a href="dashboard.php" class="btn">Atualizar Página</a>
            </div>
        </div>
    </div>
</body>
</html>
