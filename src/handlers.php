<?php
function getAllUsers() {
    echo "Hello there";
}

function getUser(array $vars) {
    $userId = $vars['userId'];
    echo "getting user $userId";
}