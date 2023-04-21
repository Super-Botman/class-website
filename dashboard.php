<?php include("cookie_verif.php") ?>
<!DOCTYPE html>
<html>
<title>tableau de bord</title>
<?php include("header.php"); ?>
<script src="js/refresh.js"></script>

<body>
    <?php include("menu.php") ?>
    <div class="dashboard">
        <a href="messagerie.php">
            <div id="dashboard_message" class="dashboard_messages">
                <script>
                    dashboard_messagerie();
                </script>
            </div>
        </a>
    </div>
    <a href="envoi_fichiers.php">
        <div id="dashboard_fichiers" class="fichiers">
            <script>
                fichiers();
            </script>
        </div>
    </a>
    <div class="actifs_content">
        <script>
            actifs();
        </script>
    </div>
    </div>
</body>