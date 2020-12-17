<?php

function echoValue($array, $fieldName) {
    if (isset($array) && isset($array[$fieldName])) {
        echo $array[$fieldName];
    }
}

function echoChecked($array, $fieldName, $value) {
    if (isset($array[$fieldName]) && $array[$fieldName] == $value) {
        echo 'checked="checked"';
    }
}

function echoCheckedArray($array, $fieldName, $value) {
    if (isset($array[$fieldName]) &&
            is_array($array[$fieldName]) &&
            in_array($value, $array[$fieldName])) {
        echo 'checked="checked"';
    }
}

function echoSelected($array, $fieldName, $value) {
    if (isset($array[$fieldName]) && $array[$fieldName] == $value) {
        echo 'selected="selected"';
    }
}

function echoSelectedArray($array, $fieldName, $value) {
    if (isset($array[$fieldName]) &&
            is_array($array[$fieldName]) &&
            in_array($value, $array[$fieldName])) {
        echo 'selected="selected"';
    }
}
