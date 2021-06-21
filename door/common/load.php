<?php
function get_phrase_short_from_en_text($text) {
    $en_obj = db('Grupo', 's', 'phrases', 'type,short', 'lang', 'English');
    if (!empty($en_obj)) {
        $lang_en_id = $en_obj[0]['id'];
        $phrases = db('Grupo', 's', 'phrases', 'type,full,lid', 'phrase', $text, $lang_en_id);
        if (!empty($phrases)) {
            foreach ($phrases as $phrase) {
                $field = db('Grupo', 's', 'profiles', 'type,name', 'field', $phrase['short']);
                if (!empty($field)) {
                    return $field[0]['name'];
                }
            }
        }
    }
    return '';
}

function get_group_phrase_short_from_en_text($text) {
    $en_obj = db('Grupo', 's', 'phrases', 'type,short', 'lang', 'English');
    if (!empty($en_obj)) {
        $lang_en_id = $en_obj[0]['id'];
        $phrases = db('Grupo', 's', 'phrases', 'type,full,lid', 'phrase', $text, $lang_en_id);
        if (!empty($phrases)) {
            foreach ($phrases as $phrase) {
                $field = db('Grupo', 's', 'profiles', 'type,name', 'gfield', $phrase['short']);
                if (!empty($field)) {
                    return $field[0]['name'];
                }
            }
        }
    }
    return '';
}