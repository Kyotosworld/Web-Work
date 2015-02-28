<?php
function var_test($variable, $type, $valeur, $superieur, $superieur_egal, $inferieur, $inferieur_egal) {
                        //int, caracter, int, int, boolean, int, boolean)
        if(isset($variable)) {
                if (($type)$variable == $variable) {
                        if (isset($valeur)) {
                                if ($variable == $valeur) {
                                        return true;
                                } else {
                                        return false;
                                }
                        } elseif (isset($superieur)) {
                                if ($superieur_egal && $variable >= $superieur) {
                                        return true;
                                } elseif ($superieur_egal && !($variable >= $superieur)) {
                                        return false;
                                } elseif (!($superieur_egal) && $variable > $superieur) {
                                        return true;
                                } elseif (!($superieur_egal) && !($variable > $superieur)) {
                                        return false;
                                }
                        } elseif (isset($inferieur)) {
                                if ($inferieur_egal && $variable <= $inferieur) {
                                        return true;
                                } elseif ($inferieur_egal && !($variable <= $inferieur)) {
                                        return false;
                                } elseif (!($inferieur_egal) && $variable < $inferieur) {
                                        return true;
                                } elseif (!($inferieur_egal) && !($variable < $inferieur)) {
                                        return false;
                                }
                        }
                        else {
                                return false;
                        }
                } else {        
                        return false;
                }
        } else {
                return false;
        }
}
?>
