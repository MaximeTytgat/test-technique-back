<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'todo: write the description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // Lecture du contenu du fichier texte
        $allTheText = file_get_contents(__DIR__ . "/../../../resources/my_text.txt");
        
        // Découpage en lignes
        $lines = explode("\n", $allTheText);
        
        // Découpage de chaque ligne en mots
        $words = [];
        foreach ($lines as $line) {
            $lineWords = explode(" ", $line);
            foreach ($lineWords as $word) {
                $word = trim($word, ",.?;!");
                $word = strtolower($word);
                if (!empty($word)) {
                    $words[] = $word;
                }
            }
        }
        
        // Comptage des occurrences de chaque mot
        $wordCounts = array_count_values($words);
        
        // Tri des mots par ordre décroissant de nombre d'occurrences
        arsort($wordCounts);
        
        // Affichage des 10 premiers mots par nombre d'occurrences
        $start = 0;
        foreach ($wordCounts as $word => $count) {
            $start++;
            echo "$start: $word avec $count\n";
            if ($start === 10) {
                break;
            }
        }
    }
}
