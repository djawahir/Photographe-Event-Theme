
<?php
/**
 * Remplit automatiquement le champ "ref" avec la valeur ACF "reference"
 */
add_filter('wpcf7_form_tag', function ($tag) {
    // Étape 1 : Vérifier si le champ ciblé est "ref"
    if ('ref' === $tag['name']) {
        global $post; // Obtenir l'objet du post en cours

        // Étape 2 : Récupérer la valeur du champ ACF "reference"
        $reference_value = get_field('reference', $post->ID);

        // Étape 3 : Ajouter la valeur récupérée au champ si elle existe
        if ($reference_value) {
            $tag['values'] = array($reference_value);
        }
    }

    // Étape 4 : Retourner la balise modifiée ou non
    return $tag;
}, 10, 1);
   