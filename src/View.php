<?php

class View {
 
static function displayDefault() {
 
echo "<form method='POST' action='index.php' > ";
 
echo "������� ����� DOC �����: ";
 
echo "<input type='text' name='filepath' value='' > ";
 
echo "<input type='submit' name='send' value='���������'>";
 
echo "</form>";
 
}
 
static function displayError($error) {
 
echo "<b>������:</b> {$error}";
 
View::displayDefault();
 
}
 
static function displayResults($results) {

echo $results;

}
 
} // class VIEW

?>
