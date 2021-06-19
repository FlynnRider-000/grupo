<?php
function get_phrase_short_from_en_text($text) {
    $en_obj = db('Grupo', 's', 'phrases', 'type,short', 'lang', 'English');
    if (!empty($en_obj)) {
        $lang_en_id = $en_obj[0]['id'];
        $phrase = db('Grupo', 's', 'phrases', 'type,full,lid', 'phrase', $text, $lang_en_id);
        if (!empty($phrase)) return $phrase[0]['short'];
    }
    return '';
}