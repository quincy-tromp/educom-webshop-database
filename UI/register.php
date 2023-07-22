<?php

/**
 * Function that displays the 'Registration' page content
 * @param array $data [
 *                  "page" => string : Requested page,
 *                  "values" => array : User data submitted (clean),
 *                  "errors => array : (Empty/Error messages),
 *                  "user" => array : (Empty/User data from database),
 *                  "valid" => boolean : Data validity ]
 */
function showRegisterPage($data) {
    echo '  <div class="content">
                <h1>Registration</h1>
                <form action="index.php" method="POST">
                    <input type="hidden" name="page" value="register">

            <!- TEXTFIELDS ->
                    <label for="email">Email</label>
                    <br>
                    <input type="email" name="email" value="' . getArrayValue($data["values"], "email") . '">
                    ' . getError($data, "email") . '
                    ' . getError($data, "user_already_exists") . '
                    <br>

                    <label for="name">Name</label>
                    <br>
                    <input type="text" name="name" value="' . getArrayValue($data["values"], "name") . '">
                    ' . getError($data, "name") . '
                    <br>

                    <label for="password">Password</label>
                    <br>
                    <input type="text" name="password" value="' . getArrayValue($data["values"], "password") . '">
                    ' . getError($data, "password") . '
                    <br>

                    <label for="confirm_password">Confirm password</label>
                    <br>
                    <input type="text" name="confirm_password" value="' . getArrayValue($data["values"], "confirm_password") . '">
                    ' . getError($data, "confirm_password") . '
                    <br>
            <!- SUBMIT ->
                    <input class="submit" type="submit" value="Submit">
                    <br>
                </form>
            </div>';
}