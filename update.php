<?php
$token = 'ghp_token';
$repoUrl = "https://$token@github.com/<username>/<repo>"; // URL des Git-Repositories mit Token



// Ermitteln des aktuellen Verzeichnisses, in dem das PHP-Skript ausgeführt wird
$targetDir = dirname(__FILE__) . '/kwn'; // Speichern in einem Unterordner "repository"

// Zuerst das Zielverzeichnis löschen, wenn es bereits existiert
if (is_dir($targetDir)) {
    shell_exec("rm -rf $targetDir");
}

// Befehl zum Klonen des Git-Repositories
$command = "git clone $repoUrl $targetDir";

// Ausführen des Befehls
$output = shell_exec($command);

// Überprüfen des Ergebnisses
if (is_dir($targetDir)) {
    echo "Update";
} else {
    #echo "Fehler beim Klonen des Repositories: $output";
}
?>
