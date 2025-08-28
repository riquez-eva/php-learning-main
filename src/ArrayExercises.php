<?php

/**
 * Cette classe contient un ensemble de fonctions à compléter qui vous permettront de vous entraîner à la manipulation de tableaux 1D et 2D.
 *
 * Pour chacune des fonctions pensez à écrire un pseudo-code qui vous permettra de réfléchir à la logique à implémenter.
 */
class ArrayExercises
{
    /**
     * Additionne tous les éléments d'un tableau d'entiers.
     *
     * @param array $array Le tableau à traiter
     *
     * @return int Le résultat de l'addition. Doit retourner 0 si un tableu vide est passé
     */
    public static function sumAllElements(array $array): int
    {
        $sum = 0;
        $count = count($array);
        if ($count >= 0) {
            for ($i = 0; $i < $count; ++$i) {
                $sum += $array[$i];
            }
        }

        return $sum;
    }

    /**
     * Additionne les éléments d'un tableau d'entiers situé entre deux index.
     * Les éléments pointés par les index sont compris dans la somme.
     *
     * Exemple :
     * pour le tableau [42, 12, 13, 25] et les index 1 et 3 le résultat devrait être 50
     *
     * Il faudra penser à plusieurs cas particuliers à traiter :
     * 1. renvoyer -1 si l'index de départ est plus grand que l'index de fin
     * 2. prendre en compte tous les éléments à partir de l'index de début si l'index de fin est plus grand que la taille du tableau
     */
    public static function sumBetweenIndexes(array $array, int $start, int $end): int
    {
        $count = count($array);
        $sum = 0;
        if ($start < 0 || $start > $end) {
            return -1;
        }

        if (empty($array)) {
            return 0;
        }
        for ($i = $start; $i <= $end; ++$i) {
            $sum += $array[$i];
        }

        return $sum;
    }

    /**
     * Crée une liste de tous les nombres impairs contenus dans un tableau d'entiers.
     *
     * Un tableau vide doit être retourné si aucun élément n'est impair // Note Eva : peut être "return empty($array)"
     *
     * 0 est un nombre pair.
     *
     * @param array $array Tableau d'entiers
     *
     * @return array Tableau contenant uniquement les valeurs impaires
     */
    public static function getOddValues(array $array): array
    {
        // tableau stockant les résultats
        $emptyArray = [];
        $oddValues = [];
        $length = count($array);

        if (empty($array)) {
            return $emptyArray;
        }
        for ($i = 0; $i <= $length; ++$i) {
            $value = $array[$i];

            if ($value % 2 !== 0) {
                array_push($oddValues, $value);
            }
        }

        return $oddValues;

        // TODO implémenter la suite de l'algorithme
        // pour ajouter un élément à un tableau vous pourrez utiliser la fonciton "array_push" : https://www.php.net/manual/en/function.array-push.php
    }

    /**
     * Compare les valeurs de deux tableaux d'entiers.
     * Attention à bien gérer la différence de taille des tableaux.
     *
     * Exemple :
     * [1, 2, 3] est égal à [1, 2, 3]
     * [1, 2, 3] n'est pas égal à [3, 44, 2]
     *
     * @return bool true si les tableaux sont identiques, false sinon
     */
    public static function compareArray(array $array1, array $array2): bool
    {
        $lengthArray1 = count($array1);
        $lengthArray2 = count($array2);

        $equal = false;

        if ($lengthArray1 == $lengthArray2) {
            for ($i = 0; $i <= $lengthArray1; ++$i) {
                $value1 = $array1[$i];
                $value2 = $array2[$i];

                if ($value1 == $value2) {
                    $equal = true;
                } else {
                    return false;
                }
            }
        }

        return $equal;
    }

    /**
     * Crée un nouveau tableau miroir de celui passé en paramètre.
     * Exemple :
     * [5, 10, 2, 23] en entrée doit donner [23, 2, 10, 5].
     *
     * Il vous est demandé de trouver une solution utilisant une ou plusieurs boucles (et non pas l'appel à une fonction native PHP)
     *
     * @param array $toReverse Tableau à traiter
     *
     * @return array Nouveau tableau miroir
     */
    public static function reverseArray(array $toReverse): array
    {
        // Indice : déclarer ici un nouveau tableau

        // TODO trouver une façon de faire une boucle pour passer en revue les éléments comme souhaité

        return [];
    }

    /**
     * Somme tous les éléments situés aux index impairs.
     *
     * @param array $array le tableau à traiter
     *
     * @return int la somme des éléments
     */
    public static function sumNumbersAtOddIndex(array $array): int
    {
        return -1;
    }

    /**
     * Retrouve et retourne l'index de la plus longue chaîne de caractères d'un tableau.
     *
     * @param array $strings Tableau de chaînes de caractères
     *
     * @return int Index de la plus longue chaîne
     */
    public static function findLongestString(array $strings): int
    {
        // Indice : pour trouver la longueur d'une chaîne de caracètres il est possible d'utiliser la fonction
        // "strlen" (https://www.php.net/manual/fr/function.strlen.php)

        return '';
    }

    /**
     * Additionne des tableaux 2D d'entiers de même taille (addition matricielle).
     *
     * Exemple :
     * 5 6      1 2     6 8
     * 4 3   +  4 3  =  8 6
     * 1 2      3 2     4 4
     *
     * @param array $array1 Premier tableau à additionner
     * @param array $array2 Second tableau à additionner
     *
     * @return array La somme des tableaux à 2 dimensions
     */
    public static function addArrays(array $array1, array $array2): array
    {
        // TODO compléter le code
        // déclaration du tableau résultat
        $sumArray = [];

        // Indice : faire 2 boucles "for" (avec un "for imbriqué)
        // for () {
        //     for () {
        //     }
        // }

        return $sumArray;
    }

    /**
     * Additionne toutes les lignes d’index impair.
     *
     * @param array $array le tableau 2D à traiter
     *
     * @return int la somme des lignes impaires
     */
    public static function sumOddLines(array $array): int
    {
        $result = 0;

        return $result;
    }

    /**
     * Somme des nombres situés sur la diagonale haut-gauche vers bas-droit.
     *
     * Exemple :
     * 2  1  3
     * 5  6  8
     * 6  5  3
     *
     * Donne le résultat : 2 + 6 + 3
     *
     * @param array $toProcess tableau à traiter
     *
     * @return int la somme des nombres de la diagonale
     */
    public static function sumDiagonalNumbers(array $toProcess): int
    {
        $sum = 0;

        return $sum;
    }

    /**
     * Somme les nombres des bords du tableau.
     *
     * Exemple :
     * 2  1  3
     * 5  6  8
     * 6  5  3
     *
     * Résultat :
     * 2 + 1 + 3 (1ère ligne)
     * + 5 + 6 (1ère colonne sans compter le 2)
     * + 8 + 3 (dernière colonne sans compter le 3)
     * + 5 (dernière ligne sans les doublons)
     *
     * @param array $toProcess le tableau à traiter
     *
     * @return int la somme des nombres des bords
     */
    public static function sumBordersNumbers(array $toProcess): int
    {
        return -1;
    }

    /**
     * Cherche un mot dans un tableau 2D de caractères et renvoie les positions
     * de sa première et de sa dernière lettre.
     * Le mot peut être écrit horizontalement, verticalement ou en diagonale.
     *
     * Exemple :
     *
     *  e f b l p
     *  a m P c i
     *  i v H k p
     *  b w P s q
     *  l n A m o
     *
     * Le mot "PHP" est écrit verticalement.
     * Première lettre aux index (1, 2), dernière lettre aux index (3, 2)
     *
     * Dans ce cas il faudra renvoyer un tableau tel que [[1, 2], [3, 2]]
     *
     * Dans le cas où le mot n'a pas été retrouvé, la fonction pourra renvoyer [[-1, -1], [-1, -1]]
     *
     * @param array  $array    le tableau 2D à traiter
     * @param string $toLocate le mot à localiser
     *
     * @return array tableau contenant deux paires [i, j] : début et fin du mot
     */
    public static function wordSearch(array $array, string $toLocate): array
    {
        $rows = count($array);
        $cols = count($array[0]);
        $len = strlen($toLocate);

        // Indice
        // pour indiquer l'
        $directions = [
            [0, 1],   // Droite
            [1, 0],   // Bas
            [1, 1],   // Diagonale bas-droite
            [-1, 1],  // Diagonale haut-droite
        ];

        // Mot non trouvé
        return [[-1, -1], [-1, -1]];
    }
}
