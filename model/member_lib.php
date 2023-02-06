<?php
function is_valid_member_email($email) {
    global $db;
    $query = '
        SELECT memberID FROM members
        WHERE memberEmail = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $valid = ($statement->rowCount() == 1);
    $statement->closeCursor();
    return $valid;
}

function get_member_by_email($email) {
    global $db;
    $query = 'SELECT * FROM members WHERE memberEmail = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $member = $statement->fetch();
    $statement->closeCursor();
    return $member;
}

function is_valid_member_login($email, $password) {
    global $db;
    $password = sha1($email . $password);
    $query = '
        SELECT * FROM members
        WHERE memberEmail = :email AND memberPW = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $valid = ($statement->rowCount() == 1);
    $statement->closeCursor();
    return $valid;
}

function get_member($member_id) {
    global $db;
    $query = 'SELECT * FROM members WHERE memberID = :member_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':member_id', $member_id);
    $statement->execute();
    $member = $statement->fetch();
    $statement->closeCursor();
    return $member;
}


function member_change_shipping_id($member_id, $address_id) {
    global $db;
    $query = 'UPDATE members SET shipAddressID = :address_id
              WHERE memberID = :member_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':address_id', $address_id);
    $statement->bindValue(':member_id', $member_id);
    $statement->execute();
    $statement->closeCursor();
}

function member_change_billing_id($member_id, $address_id) {
    global $db;
    $query = 'UPDATE members SET billingAddressID = :address_id
              WHERE memberID = :member_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':address_id', $address_id);
    $statement->bindValue(':member_id', $member_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_member($email, $first_name, $last_name,
                      $password_1, $password_2) {
   global $db;
    $password = sha1($email . $password_1);
    $query = '
        INSERT INTO members (fName, lName, memberEmail, memberPW)
        VALUES (:first_name, :last_name, :email, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $member_id = $db->lastInsertId();
    $statement->closeCursor();
    return $member_id;
}

function update_member($member_id, $email, $first_name, $last_name,
                      $password_1, $password_2) {
    global $db;
    $query = '
        UPDATE members
        SET memberEmail = :email,
            fName = :first_name,
            lName = :last_name
        WHERE memberID = :member_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':member_id', $member_id);
    $statement->execute();
    $statement->closeCursor();
    if (!empty($password_1) && !empty($password_2)) {
        $password = sha1($email . $password_1);
        $query = '
            UPDATE members
            SET memberPW = :password
            WHERE memberID = :member_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':member_id', $member_id);
        $statement->execute();
        $statement->closeCursor();
    }
}


function update_pw($member_id, $email) { 
    $pw_length= 8;

    $symbols = '~!@#$%^&*()-_=+[]{};:,.<>?';
    $symbol_count = strlen($symbols);
    $index = mt_rand(0, $symbol_count - 1);
    $password = substr($symbols, $index, 1);

    $password .= chr(mt_rand(48, 57));
    $password .= chr(mt_rand(65, 90));

    while (strlen($password) < $pw_length) {
       $password .= chr(mt_rand(97, 122));
    }

    $new_password = str_shuffle($password);

    if (!empty($new_password)) {
        global $db;
        $password = sha1($email . $new_password);
        $query = '
            UPDATE members
            SET memberPW = :password
            WHERE memberID = :member_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':member_id', $member_id);
        $statement->execute();
        $statement->closeCursor();
    }

    return $new_password;
}

?>
